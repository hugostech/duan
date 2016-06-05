<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 26/05/16
 * Time: 2:25 PM
 */

require_once 'controller/Controller.class.php';
class Auth extends Controller
{
    public function register($array)
    {
        if ($array['password_re'] == $array['password_check']) {
            $user = new User();
            $data = array(
                'username'=>$array['username'],
                'password'=>md5($array['password_re']),
                'authority'=>1
            );
            if($user->create($data)){
                $_SESSION['Login']='1';

                $email = array(
                    'to'=>$array['username'],
                    'subject'=>'Thanks for register',
                    'content'=>"Thanks for register in T-shirt Shop, Your username is $array[0], password is $array[1]",
                    'header'=>'From: T-shirt Shop <no-reply@example.com>' . "\r\n"

                );
                self::mailto($email);
            }
        }

        return $this->redirect('index');
    }
}