<?php

namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
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
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }
            //$this->show($registerModel->errors);
            return $this->render('register', [
                'model'=>$registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model'=>$registerModel
        ]);
    }
}