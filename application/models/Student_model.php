<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student_model
 *
 * @author themos401
 */
class Student_model extends CI_Model {

    public function getStudent() {
        $this->db->join('student_class', 'student_class.class_id = student.class_id');
        return $this->db->get('student');
    }

}
