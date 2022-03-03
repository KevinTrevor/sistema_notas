<?php

class AsignaturaController
{

	function __construct()
	{
		
	}

 	function ListarAsignatura(){
		 require_once('views/asignatura/list_asignatura.php');
	}

	static public function ListarAsignatura1(){
	   	 require_once('models/AsignaturaModel.php');
         $result_Listar= AsignaturaModel::ListarAsignatura();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarAsignatura(){
		 require_once('views/asignatura/insert_asignatura.php');
	}

	function IngresarAsignatura1(){
		 require_once('views/asignatura/insert_asignatura1.php');
	}

	static public function IngresarAsignatura2($cod_ano_escolar, $cod_grado, $cod_asignatura, $nombre){
	  	 require_once('models/AsignaturaModel.php');
         $result_Listar= AsignaturaModel::IngresarAsignatura2($cod_ano_escolar, $cod_grado, $cod_asignatura, $nombre);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarAsignaturaByCod($cod_asignatura){
    	 require_once('models/AsignaturaModel.php');
         $result_Listar = AsignaturaModel::BuscarAsignaturaByCod($cod_asignatura);
         return $result_Listar;
	}

	function UpdateAsignatura(){
		 require_once('views/asignatura/update_asignatura.php');
	}

	function UpdateAsignatura1(){
		 require_once('views/asignatura/update_asignatura1.php');
	}

	static public function UpdateAsignatura2($cod_ano_escolar, $cod_asignatura, $cod_grado, $nombre){
	  	 require_once('models/AsignaturaModel.php');
         $result_Listar= AsignaturaModel::UpdateAsignatura2($cod_ano_escolar, $cod_asignatura, $cod_grado, $nombre);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteAsignatura(){
		 require_once('views/asignatura/deleted_asignatura.php');
	}

	static public function DeleteAsignatura1($cod_asignatura){
		require_once('models/AsignaturaModel.php');
        $result_Listar= AsignaturaModel::DeleteAsignatura($cod_asignatura);
        return $result_Listar;

		 
	}

}

?>