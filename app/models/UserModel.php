<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/11/2017
 * Time: 12:22 AM
 */
class UserModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function getAllFromUsers(){
        $sql = "SELECT * FROM user";
        return $this->db->select($sql);
    }
}