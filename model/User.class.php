<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 26/05/16
 * Time: 3:14 PM
 */
require_once 'model/Model.class.php';
class User extends Model
{
    protected $table = "user";
    private $username;
    private $password;
    private $authority;

    /*
     * return:0 wrong passwork
     *        1 user
     *        2 admin
     * */
    public function verify($username, $password)
    {
        $password = md5($password);
        $sql = "select * from $this>table where username=$username and password=$password";
        $result = $this->db->query($sql);
        if(!empty($result)){
            $data = mysqli_fetch_array($result);
            return $data['authority'];
        }else{
            return 0;
        }


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