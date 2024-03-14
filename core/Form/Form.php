<?php

namespace app\core\Form;

use app\core\Model;

class Form
{
    public function begin($action, $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }
    public function end(): void
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute): InputField
    {
        return new InputField($model, $attribute);
    }

}