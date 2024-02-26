<?php

namespace app\controllers;

use app\core\Controller;
use app\models\RegisterModel;
use app\core\Request;
use app\core\Model;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request)
    {
        $errors = [];
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            $firstname = $request->getBody()['firstname'];
            if(!$firstname){
                $errors['firstname'] = 'This field is required';
            }
            $this->show($errors);
            return 'Handle submitted data';
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'errors' =>$errors
        ]);
    }
}