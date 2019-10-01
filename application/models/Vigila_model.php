<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Vigila_model extends CI_Model {
function __construct(){
parent::__construct();
$this -> load -> database();
}
function getVigila(){
$this->db->select('Cedula, EjercicioFiscal, NombreObraPublica, SectorInversion,Etapa,InstanciaEjecutora,
                                           FondoPrograma,TipoAdjudicacion,Municipio,Localidad,Colonia,Calle,ModalidadEjecucion,
                                           Contratista,NoContrato,FechaInicioContrato,FechaFinContrato,InversionContratada,Residente,
                                           Latitud,Longitud,PorcentajeAvance,Supervisor');
$this->db->from('vto');
$this->db->order_by("EjercicioFiscal", "asc");
$consulta = $this->db->get();
$resultado = $consulta->result();
return $resultado;
}



}
?>
