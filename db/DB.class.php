<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:01 PM
 */
class DB
{
    protected $db;

    public function __construct()
    {
        global $config;
        $this->db = new mysqli($config['db_host'], $config['db_user'], $config['db_pwd'], $config['db_database']);
    }


    public function query($sql)
    {
        try {
            return $this->db->query($sql);

        } catch (Exception $e) {
            echo $e;
            return false;
        }

    }


}