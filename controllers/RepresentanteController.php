<?php

class RepresentanteController
{

	function __construct()
	{
		
	}

 	function ListarRepresentante(){
		 require_once('views/representante/list_representante.php');
	}

	static public function ListarRepresentante1(){
	   	 require_once('models/RepresentanteModel.php');
         $result_Listar= RepresentanteModel::ListarRepresentante();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarRepresentante(){
		 require_once('views/representante/insert_representante.php');
	}

	function IngresarRepresentante1(){
		 require_once('views/representante/insert_representante1.php');
	}

	static public function IngresarRepresentante2($cedula, $telefono, $email){
	  	 require_once('models/RepresentanteModel.php');
         $result_Listar= RepresentanteModel::IngresarRepresentante2($cedula, $telefono, $email);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarRepresentanteByCedula($cedula){
    	 require_once('models/RepresentanteModel.php');
         $result_Listar = RepresentanteModel::BuscarRepresentanteByCedula($cedula);
         return $result_Listar;
	}

	function UpdateRepresentante(){
		 require_once('views/representante/update_representante.php');
	}

	function UpdateRepresentante1(){
		 require_once('views/representante/update_representante1.php');
	}

	static public function UpdateRepresentante2($cedula, $telefono, $email){
	  	 require_once('models/RepresentanteModel.php');
         $result_Listar= RepresentanteModel::UpdateRepresentante2($cedula, $telefono, $email);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteRepresentante(){
		 require_once('views/representante/deleted_representante.php');
	}

	static public function DeleteRepresentante1($cedula){
		require_once('models/RepresentanteModel.php');
        $result_Listar= RepresentanteModel::DeleteRepresentante($cedula);
        return $result_Listar;

		 
	}

}

?>