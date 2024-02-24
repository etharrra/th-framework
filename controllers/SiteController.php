<?php

namespace app\controllers;

use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'Thar Htoo'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'handling post data...';
    }
}
