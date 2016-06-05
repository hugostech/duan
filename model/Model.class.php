<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 3/06/16
 * Time: 4:21 PM
 */
include_once 'db/DB.class.php';

class Model extends DB
{
    protected $table;

    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=$id";
        $result = $this->db->query($sql);
        $data = mysqli_fetch_array($result);
        return $data;

    }

    public function create($data)
    {
        $sql_head = "INSERT INTO `$this->table`";
        $sql_body = "(";
        $sql_foot = "VALUES (";
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                $sql_body .= "`$key`,";
                if (gettype($value) != 'integer' && gettype($value) != 'float') {
                    $sql_foot .= "\"$value\",";
                }else{
                    $sql_foot .= "$value,";
                }
            }
        }

        $sql_body = substr_replace($sql_body, ") ", -1, 1);
        $sql_foot = substr_replace($sql_foot, ")", -1, 1);
        $sql = $sql_head . $sql_body . $sql_foot;

        $this->db->query($sql);
        return true;

    }
}