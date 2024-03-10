<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\models\User;
use app\core\Request;
use app\core\Model;

class AuthController extends Controller
{
    public function login(): array|false|string
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request): array|false|string
    {
        $user = new User();
        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()){
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
            //$this->show($registerModel->errors);
            return $this->render('register', [
                'model'=>$user
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model'=>$user
        ]);
    }
}