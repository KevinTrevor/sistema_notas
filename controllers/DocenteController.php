<?php

class DocenteController
{

	function __construct()
	{
		
	}

 	function ListarDocente(){
		 require_once('views/docente/list_docente.php');
	}

	static public function ListarDocente1(){
	   	 require_once('models/DocenteModel.php');
         $result_Listar= DocenteModel::ListarDocente();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarDocente(){
		 require_once('views/docente/insert_docente.php');
	}

	function IngresarDocente1(){
		 require_once('views/docente/insert_docente1.php');
	}

	static public function IngresarDocente2($cedula, $telefono, $email){
	  	 require_once('models/DocenteModel.php');
         $result_Listar= DocenteModel::IngresarDocente2($cedula, $telefono, $email);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarDocenteByCedula($cedula){
    	 require_once('models/DocenteModel.php');
         $result_Listar = DocenteModel::BuscarDocenteByCedula($cedula);
         return $result_Listar;
	}

	function UpdateDocente(){
		 require_once('views/docente/update_docente.php');
	}

	function UpdateDocente1(){
		 require_once('views/docente/update_docente1.php');
	}

	static public function UpdateDocente2($cedula, $telefono, $email){
	  	 require_once('models/DocenteModel.php');
         $result_Listar= DocenteModel::UpdateDocente2($cedula, $telefono, $email);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteDocente(){
		 require_once('views/docente/deleted_estudiante.php');
	}

	static public function DeleteDocente1($cedula){
		require_once('models/DocenteModel.php');
        $result_Listar= DocenteModel::DeleteDocente($cedula);
        return $result_Listar;

		 
	}

}

?>