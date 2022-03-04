<?php

class Persona_RepresentanteController
{

	function __construct()
	{
		
	}

 	function ListarPersona_Representante(){
		require_once(dirname(__FILE__).'/../views/persona/list_persona.php');
      require_once(dirname(__FILE__).'/../views/representante/list_representante.php');
	}

	static public function ListarPersona_Representante1(){
	   	require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/RepresentanteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::ListarPersona(),
            'Representante' => RepresentanteModel::ListarRepresentante()];
        return $result_Listar;
	}
  
  // Para insertar

	function IngresarPersona_Representante(){
		require_once(dirname(__FILE__).'/../views/persona/insert_persona.php');
      require_once(dirname(__FILE__).'/../views/representante/insert_representante.php');
	}

	function IngresarPersona_Representante1(){
		 require_once(dirname(__FILE__).'/../views/persona/insert_persona1.php');
         require_once(dirname(__FILE__).'/../views/representante/insert_representante1.php');
	}

	static public function IngresarPersona_Representante2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/RepresentanteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::IngresarPersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Representante' => RepresentanteModel::IngresarRepresentante2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}

	// Para actualizar 

    static public function BuscarPersona_RepresentanteByCedula($cedula){
    	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/RepresentanteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::BuscarPersonaByCedula($cedula),
            'Representante' => RepresentanteModel::BuscarRepresentanteByCedula($cedula)
         ];
         return $result_Listar;
	}

	function UpdatePersona_Representante(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona.php');
         require_once(dirname(__FILE__).'/../views/representante/update_representante.php');
	}

	function UpdatePersona_Representante1(){
		 require_once(dirname(__FILE__).'/../views/persona/update_persona1.php');
         require_once(dirname(__FILE__).'/../views/representante/update_representante1.php');
	}

	static public function UpdatePersona_Representante2($cedula, $nombres, $apellidos, $login, $clave, $permisos, $fecha_ingreso){
	  	 require_once(dirname(__FILE__).'/../models/PersonaModel.php');
         require_once(dirname(__FILE__).'/../models/RepresentanteModel.php');
         $result_Listar= [
            'Persona' => PersonaModel::UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, $permisos),
            'Representante' => RepresentanteModel::UpdateRepresentante2($cedula, $fecha_ingreso)
         ];
         return $result_Listar;
	}
  
  // Para eliminar

	function DeletePersona_Representante(){
		 require_once(dirname(__FILE__).'/../views/persona/deleted_persona.php');
         require_once(dirname(__FILE__).'/../views/representante/deleted_representante.php');
	}

	static public function DeletePersona_Representante1($cedula){
		require_once(dirname(__FILE__).'/../models/PersonaModel.php');
        require_once(dirname(__FILE__).'/../models/RepresentanteModel.php');
        $result_Listar= [
            'Persona' => PersonaModel::DeletePersona($cedula),
            'Representante' => RepresentanteModel::DeleteRepresentante($cedula)
        ];
        return $result_Listar;

		 
	}

}

?>