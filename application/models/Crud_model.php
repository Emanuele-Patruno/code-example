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
      $query = $this->db->query("SELECT titolo FROM pagine WHERE titolo = 'Location'")->result_array();
      return $query;
    }

    function paginacontenuti($id_db)
    { 
      $id_riga = "";

      if($id_db != NULL){
        $id_riga = " WHERE id = $id_db";
      }else{
        $id_riga = " WHERE id = '1'";
      }
      $query = $this->db->query("SELECT titolo FROM pagine $id_riga")->row_array();
      return $query;
    }

    function get_singolo_valore($id) {

      if ($id != 9999999) {
          $interr = "where id=$id";
      } else {
          $interr = '';
      }

      return $this->db->query('SELECT titolo FROM pagine $interr')->row_array();
  }
}  