<?php

namespace src\controllers;

use \core\Controller;
use \core\Mail;
use src\models\Event;
use src\models\Courtesy;
use src\models\User;

class HomeController extends Controller
{


    public function index()
    {
        $this->render('home', ['nome' => "Hello, world"]);
    }
}
