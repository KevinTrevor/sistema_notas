<?php

class Persona_DocenteController
{

	function __construct()
	{
		
	}

 	function ListarPersona_Docente(){
		require_once(dirname(__FILE__).'/../views/persona/list_persona.php');
      require_once(dirname(__FILE__).'/../views/docente/list_docente.php');
	}

	static public function ListarPersona_Docente1(){
	   	require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/EstudianteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::ListarPersona(),
            'Docente' => DocenteModel::ListarDocente()];
        return $result_Listar;
	}
  
  // Para insertar

	function IngresarPersona_Docente(){
		require_once(dirname(__FILE__).'/../views/persona/insert_persona.php');
      require_once(dirname(__FILE__).'/../views/docente/insert_docente.php');
	}

	function IngresarPersona_Docente1(){
		 require_once(dirname(__FILE__).'/../views/persona/insert_persona1.php');
         require_once(dirname(__FILE__).'/../views/docente/insert_docente1.php');
	}

	static public function IngresarPersona_Docente2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/DocenteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::IngresarPersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Docente' => DocenteModel::IngresarDocente2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPersona_DocenteByCedula($cedula){
    	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/DocenteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::BuscarPersonaByCedula($cedula),
            'Docente' => DocenteModel::BuscarDocenteByCedula($cedula)
         ];
         return $result_Listar;
	}

	function UpdatePersona_Docente(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona.php');
         require_once(dirname(__FILE__).'/../views/docente/update_docente.php');
	}

	function UpdatePersona_Docente1(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona1.php');
         require_once(dirname(__FILE__).'/../views/docente/update_docente1.php');
	}

	static public function UpdatePersona_Docente2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/DocenteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Docente' => DocenteModel::UpdateDocente2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}
  
  // Para eliminar

	function DeletePersona_Docente(){
		 require_once(dirname(__FILE__).'/../views/persona/deleted_persona.php');
         require_once(dirname(__FILE__).'/../views/docente/deleted_docente.php');
	}

	static public function DeletePersona_Docente1($cedula){
		require_once(dirname(__FILE__).'/../models/PersonaModel.php');
        require_once(dirname(__FILE__).'/../models/DocenteModel.php');
        $result_Listar= [
            'Persona' => PersonaModel::DeletePersona($cedula),
            'Docente' => DocenteModel::DeleteDocente($cedula)
        ];
        return $result_Listar;

		 
	}

}

?>