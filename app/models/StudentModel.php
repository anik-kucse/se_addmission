<?php

/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/11/2017
 * Time: 8:34 AM
 */
class StudentModel extends MainModel {
    public function __construct(){
        parent::__construct();
    }

    public function getAllFromStudent(){
        $sql = "SELECT * FROM student";
        return $this->db->select($sql);
    }

    public function insertStudent($data){
        return $this->db->insert('student', $data, true);
    }

    public function updateStudent($data, $cond){
        return $this->db->update('student', $data, $cond);
    }

    public function getStudentByUserId($userId){
        $sql = "SELECT id FROM student WHERE user_id = $userId";
        return $this->db->select($sql);
    }

}