<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller
{
    protected function show($stuff): void
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var \app\core\middlewares\BaseMiddleware
     */
    protected array $middlewares = [];
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
    public function render($view, $params = []): array|false|string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

}