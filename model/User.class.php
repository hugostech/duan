<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 26/05/16
 * Time: 3:14 PM
 */
class User extends DB
{
    private $username;
    private $password;
    private $authority;

    public function __construct($id)
    {

    }

    public function __construct()
    {
    }

    public function create($array){

    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = md5($password);
    }

    /**
     * @return mixed
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param mixed $authority
     */
    public function setAuthority($authority)
    {
        $this->authority = $authority;
    }

}