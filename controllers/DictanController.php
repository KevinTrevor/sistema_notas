<?php

class DictanController
{

	function __construct()
	{
		
	}

 	function ListarDictan(){
		 require_once(dirname(__FILE__).'/../views/dictan/list_dictan.php');
	}

	static public function ListarDictan1(){
	   	 require_once(dirname(__FILE__).'/../models/DictanModel.php');
         $result_Listar= DictanModel::ListarDictan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarDictan(){
		 require_once(dirname(__FILE__).'/../views/dictan/insert_dictan.php');
	}

	function IngresarDictan1(){
		 require_once(dirname(__FILE__).'/../views/dictan/insert_dictan1.php');
	}

	static public function IngresarDictan2($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
	  	 require_once(dirname(__FILE__).'/../models/DictanModel.php');
         $result_Listar= DictanModel::IngresarDictan2($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarDictanByCod($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
    	 require_once(dirname(__FILE__).'/../models/DictanModel.php');
         $result_Listar = DictanModel::BuscarDictanByCod($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula);
         return $result_Listar;
	}

	/*function UpdateDictan(){
		 require_once(dirname(__FILE__).'/../views/dictan/update_dictan.php');
	}

	function UpdateDictan1(){
		 require_once(dirname(__FILE__).'/../views/dictan/update_dictan1.php');
	}

	static public function UpdateDictan2($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
	  	 require_once(dirname(__FILE__).'/../models/DictanModel.php');
         $result_Listar= DictanModel::UpdateDictan2($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula);
         return $result_Listar;
	}*/
  
  // Para eliminar

	function DeleteDictan(){
		 require_once(dirname(__FILE__).'/../views/dictan/deleted_dictan.php');
	}

	static public function DeleteDictan1($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
		require_once(dirname(__FILE__).'/../models/DictanModel.php');
        $result_Listar= DictanModel::DeleteDictan($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula);
        return $result_Listar;

		 
	}

}

?>