<?php

class ZonaEducativaController
{

	function __construct()
	{
		
	}

 	function ListarZonaEducativa(){
		 require_once('views/zona_educativa/list_zona_educativa.php');
	}

	static public function ListarZonaEducativa1(){
	   	 require_once('models/ZonaEducativaModel.php');
         $result_Listar= ZonaEducativaModel::ListarZonaEducativa();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarZonaEducativa(){
		 require_once('views/zona_educativa/insert_zona_educativa.php');
	}

	function IngresarZonaEducativa1(){
		 require_once('views/zona_educativa/insert_zona_educativa1.php');
	}

	static public function IngresarZonaEducativa2($cod_zona, $estado){
	  	 require_once('models/ZonaEducativaModel.php');
         $result_Listar= ZonaEducativaModel::IngresarZonaEducativa2($cod_zona, $estado);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarZonaEducativaByCod($cod_zona){
    	 require_once('models/ZonaEducativaModel.php');
         $result_Listar = ZonaEducativaModel::BuscarZonaEducativaByCod($cod_zona);
         return $result_Listar;
	}

	function UpdateZonaEducativa(){
		 require_once('views/zona_educativa/update_zona_educativa.php');
	}

	function UpdateZonaEducativa1(){
		 require_once('views/zona_educativa/update_zona_educativa1.php');
	}

	static public function UpdateZonaEducativa2($cod_zona, $estado){
	  	 require_once('models/ZonaEducativaModel.php');
         $result_Listar= ZonaEducativaModel::UpdateZonaEducativa2($cod_zona, $estado);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteZonaEducativa(){
		 require_once('views/zona_educativa/deleted_zona_educativa.php');
	}

	static public function DeleteZonaEducativa1($cod_zona){
		require_once('models/ZonaEducativaModel.php');
        $result_Listar= ZonaEducativaModel::DeleteZonaEducativa($cod_zona);
        return $result_Listar;

		 
	}

}

?>