<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/12/2017
 * Time: 5:28 AM
 */

class SubjectType extends MainController
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::subjectType();
    }

    public function subjectType(){
        $data = ['pageName' => 'Subject Type'];
        $this->load->view("partials/header", $data);

        $simpleModel = $this->load->model('SimpleModel');
        $table['list'] = $simpleModel->getAll('subject_type');
        $table['users'] = $simpleModel->getAll('users');

        $this->load->view("admin/subject_type", $table);
        $this->load->view("partials/footer");
    }

    public function addNew(){
        $simpleModel = $this->load->model('SimpleModel');
        Session::init();
        $data =[
            'type'        =>  $_POST['session_name'],
            'modified_by' =>  session::get('id')
        ];
        $res = $simpleModel->insert('subject_type',$data);
        if($res){
            header("Location: ".BASE_URL."/SubjectType");
        }else{
            var_dump($res);
        }
    }

    public function update(){
        $simpleModel = $this->load->model('SimpleModel');
        Session::init();
        $data =[
            'type'        =>  $_POST['session_name'],
            'modified_by' =>  Session::get('id')
        ];
        $session_id = $_POST['session_id'];
        $cond = "id = $session_id";
        $res = $simpleModel->update('subject_type',$data, $cond);
        if($res){
            header("Location: ".BASE_URL."/SubjectType");
        }
        else {
            var_dump($session_id);
            echo "Error Mofo check your shitty code.";
        }
    }

    public function delete(){
        $session_id = $_POST['delete'];
        $cond = "id = $session_id";
        $simpleModel = $this->load->model('simpleModel');
        $res = $simpleModel->delete('subject_type', $cond);
        if($res){
            header("Location: ".BASE_URL."/SubjectType");
        }
        else {
            var_dump($session_id);
            echo "Error Mofo check your shitty code.";
        }
    }
}