<?php

class PrelanController
{

	function __construct()
	{
		
	}

 	function ListarPrelan(){
		 require_once(dirname(__FILE__).'/../views/prelan/list_prelan.php');
	}

	static public function ListarPrelan1(){
	   	 require_once(dirname(__FILE__).'/../models/PrelanModel.php');
         $result_Listar= PrelanModel::ListarPrelan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarPrelan(){
		 require_once(dirname(__FILE__).'/../views/prelan/insert_prelan.php');
	}

	function IngresarPrelan1(){
		 require_once(dirname(__FILE__).'/../views/prelan/insert_prelan1.php');
	}

	static public function IngresarPrelan2($cod_asignatura1, $cod_asignatura2){
	  	 require_once(dirname(__FILE__).'/../models/PrelanModel.php');
         $result_Listar= PrelanModel::IngresarPrelan2($cod_asignatura1, $cod_asignatura2);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPrelanByCod($cod_asignatura1, $cod_asignatura2){
    	 require_once(dirname(__FILE__).'/../models/PrelanModel.php');
         $result_Listar = PrelanModel::BuscarPrelanByCod($cod_asignatura1, $cod_asignatura2);
         return $result_Listar;
	}

	/*function UpdatePrelan(){
		 require_once(dirname(__FILE__).'/../views/prelan/update_prelan.php');
	}

	function UpdatePrelan1(){
		 require_once(dirname(__FILE__).'/../views/prelan/update_prelan1.php');
	}

	static public function UpdatePrelan2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final){
	  	 require_once(dirname(__FILE__).'/../models/PrelanModel.php');
         $result_Listar= PrelanModel::UpdatePrelan2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final);
         return $result_Listar;
	}*/
  
  // Para eliminar

	function DeletePrelan(){
		 require_once(dirname(__FILE__).'/../views/prelan/deleted_prelan.php');
	}

	static public function DeletePrelan1($cod_asignatura1, $cod_asignatura2){
		require_once(dirname(__FILE__).'/../models/PrelanModel.php');
        $result_Listar= PrelanModel::DeletePrelan($cod_asignatura1, $cod_asignatura2);
        return $result_Listar;

		 
	}

}

?>