<?php

class RepresentanController
{

	function __construct()
	{
		
	}

 	function ListarRepresentan(){
		 require_once('views/representan/list_representan.php');
	}

	static public function ListarRepresentan1(){
	   	 require_once('models/RepresentanModel.php');
         $result_Listar= RepresentanModel::ListarRepresentan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarRepresentan(){
		 require_once('views/representan/insert_representan.php');
	}

	function IngresarRepresentan1(){
		 require_once('views/representan/insert_representan1.php');
	}

	static public function IngresarRepresentan2($cedula1, $cedula2, $parentesco){
	  	 require_once('models/RepresentanModel.php');
         $result_Listar= RepresentanModel::IngresarRepresentan2($cedula1, $cedula2, $parentesco);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarRepresentanByCod($cedula1, $cedula2){
    	 require_once('models/RepresentanModel.php');
         $result_Listar = RepresentanModel::BuscarRepresentanByCod($cedula1, $cedula2);
         return $result_Listar;
	}

	function UpdateRepresentan(){
		 require_once('views/representan/update_representan.php');
	}

	function UpdateRepresentan1(){
		 require_once('views/representan/update_representan1.php');
	}

	static public function UpdateRepresentan2($cedula1, $cedula2, $parentesco){
	  	 require_once('models/RepresentanModel.php');
         $result_Listar= RepresentanModel::UpdateRepresentan2($cedula1, $cedula2, $parentesco);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteRepresentan(){
		 require_once('views/representan/deleted_representan.php');
	}

	static public function DeleteRepresentan1($cedula1, $cedula2){
		require_once('models/RepresentanModel.php');
        $result_Listar= RepresentanModel::DeleteRepresentan($cedula1, $cedula2);
        return $result_Listar;

		 
	}

}

?>