<?php
require_once 'Conexion.php';

class Colaborador extends Conexion{

  private $accesoBD;

  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion();

  }

  public function listarColaborador(){
    try{
      $consulta = $this->accesoBD->prepare("CALL spu_colaboradores_listar()");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }


}