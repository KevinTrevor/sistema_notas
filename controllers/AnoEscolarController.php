<?php

class AnoEscolarController
{

	function __construct()
	{
		
	}

 	function ListarAnoEscolar(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/list_ano_escolar.php');
	}

	static public function ListarAnoEscolar1(){
	   	 require_once(dirname(__FILE__).'/../models/AnoEscolarModel.php');
         $result_Listar= AnoEscolarModel::ListarAnoEscolar();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarAnoEscolar(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/insert_ano_escolar.php');
	}

	function IngresarAnoEscolar1(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/insert_ano_escolar1.php');
	}

	static public function IngresarAnoEscolar2($ano_inicio, $ano_fin){
	  	 require_once(dirname(__FILE__).'/../models/AnoEscolarModel.php');
         $result_Listar= AnoEscolarModel::IngresarAnoEscolar2($ano_inicio, $ano_fin);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarAnoEscolarByCod($cod_ano_escolar){
    	 require_once(dirname(__FILE__).'/../models/AnoEscolarModel.php');
         $result_Listar = AnoEscolarModel::BuscarAnoEscolarByCod($cod_ano_escolar);
         return $result_Listar;
	}

	function UpdateAnoEscolar(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/update_ano_escolar.php');
	}

	function UpdateAnoEscolar1(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/update_ano_escolar1.php');
	}

	static public function UpdateAnoEscolar2($cod_ano_escolar, $ano_inicio, $ano_fin){
	  	 require_once(dirname(__FILE__).'/../models/AnoEscolarModel.php');
         $result_Listar= AnoEscolarModel::UpdateAnoEscolar2($cod_ano_escolar, $ano_inicio, $ano_fin);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteAnoEscolar(){
		 require_once(dirname(__FILE__).'/../views/ano_escolar/deleted_ano_escolar.php');
	}

	static public function DeleteAnoEscolar1($cod_ano_escolar){
		require_once(dirname(__FILE__).'/../models/AnoEscolarModel.php');
        $result_Listar= AnoEscolarModel::DeleteAnoEscolar($cod_ano_escolar);
        return $result_Listar;

		 
	}

}

?>