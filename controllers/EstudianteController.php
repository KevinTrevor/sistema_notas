<?php

class EstudianteController
{

	function __construct()
	{
		
	}

 	function ListarEstudiante(){
		 require_once(dirname(__FILE__).'/../views/estudiante/list_estudiante.php');
	}

	static public function ListarEstudiante1(){
	   	 require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
         $result_Listar= EstudianteModel::ListarEstudiante();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarEstudiante(){
		 require_once(dirname(__FILE__).'/../views/estudiante/insert_estudiante.php');
	}

	function IngresarEstudiante1(){
		 require_once(dirname(__FILE__).'/../views/estudiante/insert_estudiante1.php');
	}

	static public function IngresarEstudiante2($cedula, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
         $result_Listar= EstudianteModel::IngresarEstudiante2($cedula, $fecha_ingreso);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarEstudianteByCedula($cedula){
    	 require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
         $result_Listar = EstudianteModel::BuscarEstudianteByCedula($cedula);
         return $result_Listar;
	}

	function UpdateEstudiante(){
		 require_once(dirname(__FILE__).'/../views/estudiante/update_estudiante.php');
	}

	function UpdateEstudiante1(){
		 require_once(dirname(__FILE__).'/../views/estudiante/update_estudiante1.php');
	}

	static public function UpdateEstudiante2($cedula, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
         $result_Listar= EstudianteModel::UpdateEstudiante2($cedula, $fecha_ingreso);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeleteEstudiante(){
		 require_once(dirname(__FILE__).'/../views/estudiante/deleted_estudiante.php');
	}

	static public function DeleteEstudiante1($cedula){
		require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
        $result_Listar= EstudianteModel::DeleteEstudiante($cedula);
        return $result_Listar;

		 
	}

}

?>