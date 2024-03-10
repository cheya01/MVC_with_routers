<?php

namespace app\core;

class Controller
{
    protected function show($stuff): void
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = []): array|false|string
    {
        return Application::$app->router->renderView($view, $params);
    }
}