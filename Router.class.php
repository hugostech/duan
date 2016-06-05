<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:28 PM
 * Desc:Handle the request
 */
require 'controller/PublicController.php';
require 'controller/Auth.php';
require 'lib/RoutorTool.class.php';
class Router extends RoutorTool
{
    protected $controller;
    public function __construct($path)
    {
        switch($path){
            case '/':
            case 'index':
                self::blind('PublicController','index');
                break;
            case 'contactus':
                self::blind('PublicController','contactus');
                break;
            case 'register':
                self::blind('Auth','register');
                break;
        }


    }


}