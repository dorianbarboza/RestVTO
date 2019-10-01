<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once( APPPATH.'/libraries/REST_Controller.php' );
use Restserver\libraries\REST_Controller;
class Vigila_WS extends REST_Controller {
  function __construct()
  {
  header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
  header("Access-Control-Allow-Origin: *");
  parent::__construct();
  $this->load->database(); /* Cargamos la base de datos */
  $this->load->helper('url'); /* Añadimos el helper al controlador */
  $this -> load -> model ('Vigila_model'); /* Añadimos el modelo de datos */
  }
  public function getvigila_get() {
  $data = $this->Vigila_model->getVigila();
  header('Content-Type: application/json');
  $this->response( $data);
  }




  }
