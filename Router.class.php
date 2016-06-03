<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:28 PM
 * Desc:Handle the request
 */
require 'controller/PublicController.php';
class Router
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


        }


    }

    private function blind($controller,$functionName){
        $this->controller = new $controller();
        $this->controller->$functionName();
        return true;
    }

}