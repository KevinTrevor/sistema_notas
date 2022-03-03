<?php

class LapsoController
{

	function __construct()
	{
		
	}

 	function ListarLapso(){
		 require_once('views/lapso/list_lapso.php');
	}

	static public function ListarLapso1(){
	   	 require_once('models/LapsoModel.php');
         $result_Listar= LapsoModel::ListarLapso();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarLapso(){
		 require_once('views/lapso/insert_lapso.php');
	}

	function IngresarLapso1(){
		 require_once('views/lapso/insert_lapso1.php');
	}

	static public function IngresarLapso2($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin){
	  	 require_once('models/LapsoModel.php');
         $result_Listar= LapsoModel::IngresarLapso2($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarLapsoByCod($cod_ano_escolar, $num_lapso){
    	 require_once('models/LapsoModel.php');
         $result_Listar = LapsoModel::BuscarLapsoByCod($cod_ano_escolar, $num_lapso);
         return $result_Listar;
	}

	function UpdateAnoEscolar(){
		 require_once('views/lapso/update_lapso.php');
	}

	function UpdateAnoEscolar1(){
		 require_once('views/lapso/update_lapso1.php');
	}

	static public function UpdateLapso2($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin){
	  	 require_once('models/LapsoModel.php');
         $result_Listar= LapsoModel::UpdateLapso2($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteLapso(){
		 require_once('views/lapso/deleted_lapso.php');
	}

	static public function DeleteLapso1($cod_ano_escolar, $num_lapso){
		require_once('models/LapsoModel.php');
        $result_Listar= LapsoModel::DeleteLapso($cod_ano_escolar, $num_lapso);
        return $result_Listar;

		 
	}

}

?>