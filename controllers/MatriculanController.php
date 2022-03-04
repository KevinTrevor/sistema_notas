<?php

class MatriculanController
{

	function __construct()
	{
		
	}

 	function ListarMatriculan(){
		 require_once(dirname(__FILE__).'/../views/matriculan/list_matriculan.php');
	}

	static public function ListarMatriculan1(){
	   	 require_once(dirname(__FILE__).'/../models/MatriculanModel.php');
         $result_Listar= MatriculanModel::ListarMatriculan();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarMatriculan(){
		 require_once(dirname(__FILE__).'/../views/matriculan/insert_matriculan.php');
	}

	function IngresarMatriculan1(){
		 require_once(dirname(__FILE__).'/../views/matriculan/insert_matriculan1.php');
	}

	static public function IngresarMatriculan2($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion){
	  	 require_once(dirname(__FILE__).'/../models/MatriculanModel.php');
         $result_Listar= MatriculanModel::IngresarMatriculan2($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarMatriculanByCod($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula){
    	 require_once(dirname(__FILE__).'/../models/MatriculanModel.php');
         $result_Listar = MatriculanModel::BuscarMatriculanByCod($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula);
         return $result_Listar;
	}

	function UpdateMatriculan(){
		 require_once(dirname(__FILE__).'/../views/matriculan/update_matriculan.php');
	}

	function UpdateMatriculan1(){
		 require_once(dirname(__FILE__).'/../views/matriculan/update_matriculan1.php');
	}

	static public function UpdateMatriculan2($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion){
	  	 require_once(dirname(__FILE__).'/../models/MatriculanModel.php');
         $result_Listar= MatriculanModel::UpdateMatriculan2($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteMatriculan(){
		 require_once(dirname(__FILE__).'/../views/matriculan/deleted_matriculan.php');
	}

	static public function DeleteMatriculan1($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula){
		require_once(dirname(__FILE__).'/../models/MatriculanModel.php');
        $result_Listar= MatriculanModel::DeleteMatriculan($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula);
        return $result_Listar;

		 
	}

}

?>