<?php

namespace app\core;

class Session
{
    protected const FLASH_KEY = 'flash_messages';
    public function __construct()
    {
        session_start();
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            //mark to be removed
            $flashMessage['remove'] = true;
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }

    public function setFlash($key, $message)
    {
        $_SESSION[self::FLASH_KEY][$key] = [
            'removed' => false,
            'value' => $message

        ];
    }

    public function getFlash($key)
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        if (isset($flashMessages[$key])) {
            $value = $flashMessages[$key]['value'];
            // Mark the flash message as removed after retrieving it
            $flashMessages[$key]['removed'] = true;
            $_SESSION[self::FLASH_KEY] = $flashMessages;
            return $value;
        }
        return false;
    }

    public function __destruct()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key => &$flashMessage) {
            if ($flashMessage['removed']) {
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }
}