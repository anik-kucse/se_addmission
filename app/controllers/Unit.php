<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 10/12/2017
 * Time: 3:49 PM
 */

class Unit extends MainController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        self::unit();
    }

    public function unit(){
        $pageName=['pageName' => 'Unit'];
        $this->load->view('partials/header', $pageName);

        $simpleModel = $this->load->model('SimpleModel');
        $table['list'] = $simpleModel->getAll('unit');
        $table['university'] = $simpleModel->getAll('university');
        $table['session'] =$simpleModel->getAll('session');
        $table['users'] =$simpleModel->getAll('users');

        $this->load->view('admin/unit',$table);
        $this->load->view('partials/footer');
    }

    public function addNew(){
        $simpleModel = $this->load->model('SimpleModel');
        Session::init();
        $data = [
            'unit_name' => $_POST['unit_name'],
            'university_id' => $_POST['university'],
            'session_id' => $_POST['session'],
            'start_date_time' => date( 'Y-m-d H:i:s', strtotime($_POST['starting_time'])),
            'end_date_time' => date( 'Y-m-d H:i:s', strtotime($_POST['ending_time'])),
            'selection_date_time' => date( 'Y-m-d H:i:s', strtotime($_POST['selection_time'])),
            'exam_date_time' => date( 'Y-m-d H:i:s', strtotime($_POST['exam_time'])),
            'form_price' => $_POST['form_price'],
            'service_charge' => $_POST['service_charge'],
            'detail' => $_POST['details'],
            'modified_by' => Session::get('id')
        ];
        $res = $simpleModel->insert('unit', $data);
        if($res){
            header('Location:'.BASE_URL.'/unit');
        }else{
            var_dump($res);
        }
//        write to database
//        echo  "<br>".date( 'Y-m-d H:i:s', strtotime($data['start_date_time']));
//        echo  "<br>".date( 'Y-m-d H:i:s', strtotime($data['end_date_time']));
//        load from database
//        echo  "<br>".date( 'Y-m-d\TH:i', strtotime('2017-01-01 01:00:00'));
//        echo  "<br>".date( 'Y-m-d\TH:i', strtotime('2017-01-01 13:00:00'));
    }

    public function update()
    {
        $simpleModel = $this->load->model('SimpleModel');
        Session::init();
        $data = [
            'unit_name' => $_POST['unit_name'],
            'university_id' => $_POST['university'],
            'session_id' => $_POST['session'],
            'start_date_time' => date('Y-m-d H:i:s', strtotime($_POST['starting_time'])),
            'end_date_time' => date('Y-m-d H:i:s', strtotime($_POST['ending_time'])),
            'selection_date_time' => date('Y-m-d H:i:s', strtotime($_POST['selection_time'])),
            'exam_date_time' => date('Y-m-d H:i:s', strtotime($_POST['exam_time'])),
            'form_price' => $_POST['form_price'],
            'service_charge' => $_POST['service_charge'],
            'detail' => $_POST['details'],
            'modified_by' => Session::get('id')
        ];
        $unitId = $_POST['unit_id'];
        $cond = "id = $unitId";

        $res = $simpleModel->update('unit', $data, $cond);
        if ($res) {
            header('Location:' . BASE_URL . '/unit');
        } else {
            var_dump($res);
        }
    }

    public function delete(){
        $simpleModel = $this->load->model('SimpleModel');
        $unitId = $_POST['delete'];
        $cond = "id = $unitId";
        $res = $simpleModel->delete('unit',$cond);
        if($res){
            header('Location:'.BASE_URL.'/unit');
        } else{
            var_dump($res);
        }
    }
}