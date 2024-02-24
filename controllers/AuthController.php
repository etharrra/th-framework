<?php

namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;
use app\core\Router;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return 'handling post data...';
        }
        return $this->render('register');
    }
}
