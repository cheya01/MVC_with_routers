<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): string
    {
        $params = [
            'name' => "Cheya"
        ];
        return $this->render('home', $params);
    }
    public function contact(): string
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}