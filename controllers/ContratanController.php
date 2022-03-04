<?php

class ContratanController
{

	function __construct()
	{
		
	}

 	function ListarContratan(){
		 require_once(dirname(__FILE__).'/../views/contratan/list_contratan.php');
	}

	static public function ListarContratan1(){
	   	 require_once(dirname(__FILE__).'/../models/ContratanModel.php');
         $result_Listar= ContratanModel::ListarContratan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarContratan(){
		 require_once(dirname(__FILE__).'/../views/contratan/insert_contratan.php');
	}

	function IngresarContratan1(){
		 require_once(dirname(__FILE__).'/../views/contratan/insert_contratan1.php');
	}

	static public function IngresarContratan2($cod_plantel, $cedula, $tipo_contrato){
	  	 require_once(dirname(__FILE__).'/../models/ContratanModel.php');
         $result_Listar= ContratanModel::IngresarContratan2($cod_plantel, $cedula, $tipo_contrato);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarContratanByCod($cod_plantel, $cedula){
    	 require_once(dirname(__FILE__).'/../models/ContratanModel.php');
         $result_Listar = ContratanModel::BuscarContratanByCod($cod_plantel, $cedula);
         return $result_Listar;
	}

	function UpdateContratan(){
		 require_once(dirname(__FILE__).'/../views/contratan/update_contratan.php');
	}

	function UpdateContratan1(){
		 require_once(dirname(__FILE__).'/../views/contratan/update_contratan1.php');
	}

	static public function UpdateContratan2($cod_plantel, $cedula, $tipo_contrato){
	  	 require_once(dirname(__FILE__).'/../models/ContratanModel.php');
         $result_Listar= ContratanModel::UpdateContratan2($cod_plantel, $cedula, $tipo_contrato);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteContratan(){
		 require_once(dirname(__FILE__).'/../views/contratan/deleted_contratan.php');
	}

	static public function DeleteContratan1($cod_plantel, $cedula){
		require_once(dirname(__FILE__).'/../models/ContratanModel.php');
        $result_Listar= ContratanModel::DeleteContratan($cod_plantel, $cedula);
        return $result_Listar;

		 
	}

}

?>