<?php
/**
 * Created by PhpStorm.
 * User: Akib
 * Date: 10/19/2017
 * Time: 12:42 PM
 */

class UnitProcedureModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function getAllUnit(){
        $sql = "SELECT unit.id, unit.unit_name, university.name , session.session FROM unit 
                INNER JOIN university ON unit.university_id = university.id
                INNER JOIN session ON unit.session_id = session.id";

        return $this->db->select($sql);
    }
}