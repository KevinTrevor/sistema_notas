<?php

class PlantelController
{

	function __construct()
	{
		
	}

 	function ListarPlantel(){
		 require_once('views/plantel/list_plantel.php');
	}

	static public function ListarPlantel1(){
	   	 require_once('models/PlantelModel.php');
         $result_Listar= PlantelModel::ListarZonaEducativa();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarPlantel(){
		 require_once('views/plantel/insert_plantel.php');
	}

	function IngresarPlantel1(){
		 require_once('views/plantel/insert_plantel1.php');
	}

	static public function IngresarPlantel2($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo){
	  	 require_once('models/PlantelModel.php');
         $result_Listar= PlantelModel::IngresarPlantel2($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPlantelByCod($cod_plantel){
    	 require_once('models/PlantelModel.php');
         $result_Listar = PlantelModel::BuscarPlantelByCod($cod_plantel);
         return $result_Listar;
	}

	function UpdatePlantel(){
		 require_once('views/plantel/update_plantel.php');
	}

	function UpdatePlantel1(){
		 require_once('views/plantel/update_plantel1.php');
	}

	static public function UpdatePlantel2($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo){
	  	 require_once('models/PlantelModel.php');
         $result_Listar= PlantelModel::UpdatePlantel2($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeletePlantel(){
		 require_once('views/plantel/deleted_plantel.php');
	}

	static public function DeletePlantel1($cod_plantel){
		require_once('models/PlantelModel.php');
        $result_Listar= PlantelModel::DeletePlantel($cod_plantel);
        return $result_Listar;

		 
	}

}

?>