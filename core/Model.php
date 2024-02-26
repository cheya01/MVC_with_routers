<?php

namespace app\core;

class Model
{
    public function show($stuff): void
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }
}