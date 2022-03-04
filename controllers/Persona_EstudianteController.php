<?php

class Persona_EstudianteController
{

	function __construct()
	{
		
	}

 	function ListarPersona_Estudiante(){
		 require_once('views/persona/list_persona.php');
         require_once('views/estudiante/list_estudiante.php');
	}

	static public function ListarPersona_Estudiante1(){
	   	 require_once('models/PersonaModel.php');
         require_once('models/EstudianteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::ListarPersona(),
            'Estudiante' => EstudianteModel::ListarEstudiante()];
        return $result_Listar;
	}
  
  // Para insertar

	function IngresarPersona_Estudiante(){
		 require_once('views/persona/insert_persona.php');
         require_once('views/estudiante/insert_estudiante.php');
	}

	function IngresarPersona_Estudiante1(){
		 require_once('views/persona/insert_persona1.php');
         require_once('views/estudiante/insert_estudiante1.php');
	}

	static public function IngresarPersona_Estudiante2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once('models/PersonaModel.php');
         require_once('models/EstudianteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::IngresarPersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Estudiante' => EstudianteModel::IngresarEstudiante2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPersona_EstudianteByCedula($cedula){
    	 require_once('models/PersonaModel.php');
         require_once('models/EstudianteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::BuscarPersonaByCedula($cedula),
            'Estudiante' => EstudianteModel::BuscarEstudianteByCedula($cedula)
         ];
         return $result_Listar;
	}

	function UpdatePersona_Estudiante(){
		 require_once('views/persona/update_persona.php');
         require_once('views/estudiante/update_estudiante.php');
	}

	function UpdatePersona_Estudiante1(){
		 require_once('views/persona/update_persona1.php');
         require_once('views/estudiante/update_estudiante1.php');
	}

	static public function UpdatePersona_Estudiante2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once('models/PersonaModel.php');
         require_once('models/EstudianteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Estudiante' => EstudianteModel::UpdateEstudiante2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}
  
  // Para eliminar

	function DeletePersona_Estudiante(){
		 require_once('views/persona/deleted_persona.php');
         require_once('views/estudiante/deleted_estudiante.php');
	}

	static public function DeletePersona_Estudiante1($cedula){
		require_once('models/PersonaModel.php');
        require_once('models/EstudianteModel.php');
        $result_Listar= [
            'Persona' => PersonaModel::DeletePersona($cedula),
            'Estudiante' => EstudianteModel::DeleteEstudiante($cedula)
        ];
        return $result_Listar;

		 
	}

}

?>