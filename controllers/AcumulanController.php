<?php

class AcumulanController
{

	function __construct()
	{
		
	}

 	function ListarAcumulan(){
		 require_once('views/acumulan/list_acumulan.php');
	}

	static public function ListarAcumulan1(){
	   	 require_once('models/AcumulanModel.php');
         $result_Listar= AcumulanModel::ListarAcumulan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarAcumulan(){
		 require_once('views/acumulan/insert_acumulan.php');
	}

	function IngresarAcumulan1(){
		 require_once('views/acumulan/insert_acumulan1.php');
	}

	static public function IngresarAcumulan2($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial){
	  	 require_once('models/AcumulanModel.php');
         $result_Listar= AcumulanModel::IngresarAcumulan2($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarAcumulanByCod($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula){
    	 require_once('models/AcumulanModel.php');
         $result_Listar = AcumulanModel::BuscarAcumulanByCod($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula);
         return $result_Listar;
	}

	function UpdateAcumulan(){
		 require_once('views/acumulan/update_acumulan.php');
	}

	function UpdateAcumulan1(){
		 require_once('views/acumulan/update_acumulan1.php');
	}

	static public function UpdateAcumulan2($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial){
	  	 require_once('models/AcumulanModel.php');
         $result_Listar= AcumulanModel::UpdateAcumulan2($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteAcumulan(){
		 require_once('views/acumulan/deleted_acumulan.php');
	}

	static public function DeleteAcumulan1($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula){
		require_once('models/AcumulanModel.php');
        $result_Listar= AcumulanModel::DeleteAcumulan($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula);
        return $result_Listar;

		 
	}

}

?>