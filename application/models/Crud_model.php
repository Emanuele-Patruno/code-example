<?php
class Crud_model extends CI_Model 
{
  /*View*/
    function display_records()
    {
      //$query=$this->db->get("pagine");
      //$query = $db->query('SELECT titolo,contenuto FROM pagine');
      //$query=$this->db->query("pagine");
      //$query = $this->db->query('SELECT titolo,contenuto FROM pagine WHERE pubblicato = 1 LIMIT 1 ')->result_array();
      //$query = $this->db->query("SELECT * FROM pagine");
      //$row = $query->row();
      //return $row;
      $query = $this->db->query("SELECT titolo, id FROM pagine")->result_array();
      return $query;
    }


    function get_singolo_valore($id) {

      if ($id != 9999999) {
          $interr = "WHERE id = $id";
      } else {
          $interr = "WHERE id = 1";
      }
      return $this->db->query("SELECT titolo FROM pagine $interr")->row_array();

      // $str = $this->db->last_query();
      // echo "<pre>";
      // print_r($str);
      // exit;
      
  }
}  