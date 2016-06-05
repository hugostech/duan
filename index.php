<?php
/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:00 PM
 * Desc:website entry
 */
session_start();
require 'Router.class.php';


if(isset($_GET['route'])){
    $path = $_GET['route'];
}else{
    $path = '/';
}
$router = new Router($path);
