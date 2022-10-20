<?php  
class Crud extends CI_Controller 
{
  public function __construct()
  {
  /*call CodeIgniter's default Constructor*/
  parent::__construct();

  /*load database libray manually*/
  $this->load->database();

  /*load Model*/
  $this->load->model('Crud_model');
  }
    /*Display*/
    public function displaydata()
  {
    //$dati=$this->Crud_model->display_records();
    //var_dump($dati);
      $result['data']=$this->Crud_model->display_records();
      $this->load->view('display_records',$result);
  }

    public function paginacontenuti($id_db = NULL)
    {
      //$result["data"] = $this->Crud_model->paginacontenuti($id_db);
      $this->load->view('paginacontenuti');
    }

}
?>