<?php

class ObtienenController
{

	function __construct()
	{
		
	}

 	function ListarObtienen(){
		 require_once(dirname(__FILE__).'/../views/obtienen/list_obtienen.php');
	}

	static public function ListarObtienen1(){
	   	 require_once(dirname(__FILE__).'/../models/ObtienenModel.php');
         $result_Listar= ObtienenModel::ListarObtienen();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarObtienen(){
		 require_once(dirname(__FILE__).'/../views/obtienen/insert_obtienen.php');
	}

	function IngresarObtienen1(){
		 require_once(dirname(__FILE__).'/../views/obtienen/insert_obtienen1.php');
	}

	static public function IngresarObtienen2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final){
	  	 require_once(dirname(__FILE__).'/../models/ObtienenModel.php');
         $result_Listar= ObtienenModel::IngresarObtienen2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarObtienenByCod($cod_ano_escolar, $cod_asignatura, $cedula){
    	 require_once(dirname(__FILE__).'/../models/ObtienenModel.php');
         $result_Listar = ObtienenModel::BuscarObtienenByCod($cod_ano_escolar, $cod_asignatura, $cedula);
         return $result_Listar;
	}

	function UpdateObtienen(){
		 require_once(dirname(__FILE__).'/../views/obtienen/update_obtienen.php');
	}

	function UpdateObtienen1(){
		 require_once(dirname(__FILE__).'/../views/obtienen/update_obtienen1.php');
	}

	static public function UpdateObtienen2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final){
	  	 require_once(dirname(__FILE__).'/../models/ObtienenModel.php');
         $result_Listar= ObtienenModel::UpdateObtienen2($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteObtienen(){
		 require_once(dirname(__FILE__).'/../views/obtienen/deleted_obtienen.php');
	}

	static public function DeleteObtienen1($cod_ano_escolar, $cod_asignatura, $cedula){
		require_once(dirname(__FILE__).'/../models/ObtienenModel.php');
        $result_Listar= ObtienenModel::DeleteObtienen($cod_ano_escolar, $cod_asignatura, $cedula);
        return $result_Listar;

		 
	}

}

?>