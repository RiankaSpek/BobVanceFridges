<?php

use RedBeanPHP\R as R;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [];
        displayTemplate('home/index.html', $data);
    }

    public function candr()
    {
        displayTemplate('home/candr.html', []);
    }

    public function candrPost() 
    {
        $message = R::dispense('messages');
        $message->email = $_POST['email'];
        $message->message = $_POST['message'];

        R::store($message);

        $data = [
            'confirm' => 'Message has been send'
        ];

        displayTemplate('home/candr.html', $data);
    }

    public function about()
    {
        displayTemplate('home/about.html', []);
    }
}
