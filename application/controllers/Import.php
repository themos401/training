<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author themos401
 */
class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function index() {
        $data = array(
            'results' => $this->student_model->getStudent()
        );
        $this->load->view('student_view', $data);
    }

    public function addForm() {
        $this->load->view('student_add');
    }

}
