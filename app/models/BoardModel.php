<?php

/**
 * LoginModel Model
 */
class BoardModel extends MainModel{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertIntoBoard($data){
        return $this->db->insert('board', $data);
    }

    public function getAllBoard()
    {
        $sqp = "SELECT * FROM board";
        return $this->db->select($sqp);
    }
}