<?php

class PersonaController
{

	function __construct()
	{
		
	}

 	function ListarPersona(){
		 require_once(dirname(__FILE__).'/../views/persona/list_persona.php');
	}

	static public function ListarPersona1(){
	   	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         $result_Listar= PersonaModel::ListarPersona();
         return $result_Listar;
	}
  
  // Para insertar

	function IngresarPersona(){
		 require_once(dirname(__FILE__).'/../views/persona/insert_persona.php');
	}

	function IngresarPersona1(){
		 require_once(dirname(__FILE__).'/../views/persona/insert_persona1.php');
	}

	static public function IngresarPersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         $result_Listar= PersonaModel::IngresarPersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos);
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPersonaByCedula($cedula){
    	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         $result_Listar = PersonaModel::BuscarPersonaByCedula($cedula);
         return $result_Listar;
	}

	function UpdatePersona(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona.php');
	}

	function UpdatePersona1(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona1.php');
	}

	static public function UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         $result_Listar= PersonaModel::UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos);
         return $result_Listar;
	}
  
  // Para eliminar

	function DeletePersona(){
		 require_once(dirname(__FILE__).'/../views/persona/deleted_persona.php');
	}

	static public function DeletePersona1($cedula){
		require_once(dirname(__FILE__).'/../models/PersonaModel.php');
        $result_Listar= PersonaModel::DeletePersona($cedula);
        return $result_Listar;

		 
	}

}

?>