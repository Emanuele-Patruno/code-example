<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ex_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }


    public function getData($slug = FALSE){
        if (slug == FALSE){
            $query = $this->db->get('data');
            return $query->row_array();
        }
    }
}