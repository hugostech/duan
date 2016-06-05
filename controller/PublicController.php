<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:35 PM
 */

require 'db/DB.class.php';
require_once 'controller/Controller.class.php';
require 'Model/User.class.php';

class PublicController extends Controller
{
    public function index()
    {
        $user = new User();
//        var_dump($_SESSION['Login']);
        if(isset($_SESSION['Login'])){
            $id = $_SESSION['Login'];

        }
        return self::view('smart-shop/index');


    }

    public function contactus()
    {
        return self::view('smart-shop/contact');
    }


}