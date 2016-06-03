<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:35 PM
 */
require 'db/DB.class.php';
require 'controller/Controller.class.php';
class PublicController extends Controller
{
    public function index(){
        return self::view('smart-shop/index');
    }

    public function contactus(){
        return self::view('smart-shop/contact');
    }
}