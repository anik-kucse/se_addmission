<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/20/2017
 * Time: 12:16 PM
 */

class FormSellModel extends MainModel{
    public function __construct(){
        parent::__construct();
    }

    public function getFormDetail(){
        $sql = "SELECT form_sell.id, users.full_name , unit.unit_name, university.name, form_sell.serial_number, 
                session.session, unit.form_price, unit.service_charge, form_sell.is_approve, form_sell.unit_id
                FROM form_sell	
                INNER JOIN student ON student.id = form_sell.student_id
                INNER JOIN users ON student.user_id = users.id
                INNER JOIN unit ON form_sell.unit_id = unit.id
                INNER JOIN university ON unit.university_id = university.id
                INNER JOIN session ON session.id = unit.session_id";
        return $this->db->select($sql);
    }
}