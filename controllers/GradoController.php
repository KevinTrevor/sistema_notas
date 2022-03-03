<?php

class GradoController
{

	function __construct()
	{
		
	}

 	function ListarGrado(){
		 require_once('views/grado/list_grado.php');
	}

	static public function ListarGrado1(){
	   	 require_once('models/GradoModel.php');
         $result_Listar= GradoModel::ListarGrado();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarGrado(){
		 require_once('views/grado/insert_grado.php');
	}

	function IngresarGrado1(){
		 require_once('views/grado/insert_grado1.php');
	}

	static public function IngresarGrado2($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo){
	  	 require_once('models/GradoModel.php');
         $result_Listar= GradoModel::IngresarGrado2($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarGradoByCod($cod_ano_escolar, $cod_grado){
    	 require_once('models/GradoModel.php');
         $result_Listar = GradoModel::BuscarGradoByCod($cod_ano_escolar, $cod_grado);
         return $result_Listar;
	}

	function UpdateGrado(){
		 require_once('views/grado/update_grado.php');
	}

	function UpdateGrado1(){
		 require_once('views/grado/update_grado1.php');
	}

	static public function UpdateGrado2($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo){
	  	 require_once('models/GradoModel.php');
         $result_Listar= GradoModel::UpdateGrado2($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteGrado(){
		 require_once('views/grado/deleted_grado.php');
	}

	static public function DeleteGrado1($cod_ano_escolar, $cod_grado){
		require_once('models/GradoModel.php');
        $result_Listar= GradoModel::DeleteGrado($cod_ano_escolar, $cod_grado);
        return $result_Listar;

		 
	}

}

?>