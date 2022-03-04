<?php 

class PersonaModel
{
	
	function __construct()
	{
	
	}

	// FUNCIONES GENERICAS PARA CONSULTAR Y ACTUALIZAR (INSERTAR, MODIFICAR Y ELIMINAR)

	public static function Get_Data($sql){
		include_once(dirname(__FILE__).'/../core/Conectar.php');
		$conexion=Conectar::conexion();
		if(!$result = mysqli_query($conexion, $sql)) die();
		$conexion = Conectar::desconexion($conexion);
  		return $result;
	}

	public static function Update_Data($sql){
		include_once(dirname(__FILE__).'/../core/Conectar.php');
		$conexion=Conectar::conexion();
		mysqli_autocommit($conexion, FALSE);
		$result = mysqli_query($conexion, $sql);

		if ($result == true) // la consulta fue exitosa 
		{   
			if (mysqli_affected_rows($conexion) == 0) // si no hizo la actualizacion
			{   mysqli_rollback($conexion);
				$result = false;
			}else   // si hizo la actualizacion
			{   mysqli_commit($conexion);
				$result = true;
		    }
		}

		$conexion = Conectar::desconexion($conexion);

	  	return $result;
	}

	
    // para el resto de las operaciones
	

	public static function ListarPersona(){
		$sql_persona = "SELECT `cedula`, trim(`nombres`) as `nombres`, trim(`apellidos`) as `apellidos` FROM `persona_usuario` ORDER BY `cedula` asc";
		$result_persona = PersonaModel::Get_Data($sql_persona);
  		return $result_persona;
	}

    // Para la insersión

	public static function IngresarPersona2 ($cedula, $nombres, $apellidos, $login, $clave, $permisos){
		$sql_persona = "INSERT INTO `persona_usuario` (`cedula`, `nombres`, `apellidos`, `login`, `clave`, `permisos`) VALUES ('$cedula', '$nombres', '$apellidos', '$login', '$clave', '$permisos')";
		$result_persona = PersonaModel::Update_Data($sql_persona);
  		return $result_persona;
	}

	// Para la actualización 

	public static function BuscarPersonaByCedula($cedula){
    	$sql_persona = "SELECT * FROM `persona_usuario` WHERE `cedula` = $cedula";
		$result_persona = PersonaModel::Get_Data($sql_persona);
  		return $result_persona;
	}

	public static function UpdatePersona2 ($cedula, $nombres, $apellidos, $login, $clave, $permisos){

		$sql_persona = "UPDATE `persona_usuario` SET `nombres` = '$nombres', `apellidos` = '$apellidos', `login` = '$login', `clave` = '$clave', `permisos` = '$permisos' WHERE cedula = $cedula";
		$result_persona = PersonaModel::Update_Data($sql_persona);
  		return $result_persona;
	}

	
	// Para eliminar

	public static function DeletePersona ($cedula){
		$sql_persona = "DELETE FROM `persona_usuario` WHERE `cedula` = $cedula";
		$result_persona = PersonaModel::Update_Data($sql_persona);
  		return $result_persona;
	}
}

?>