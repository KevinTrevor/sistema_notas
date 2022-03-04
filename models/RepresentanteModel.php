<?php 

class RepresentanteModel
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
	

	public static function ListarRepresentante(){
		$sql_representante = "SELECT * FROM `persona_usuario` INNER JOIN `representante` WHERE `persona_usuario`.`cedula` = `representante`.`cedula` ORDER BY `persona_usuario`.`cedula` asc";
		$result_representante = RepresentanteModel::Get_Data($sql_representante);
  		return $result_representante;
	}

    // Para la insersión

	public static function IngresarRepresentante2 ($cedula, $telefono, $email){

		$sql_representante = "INSERT INTO `representante` (`cedula`, `telefono`, `email`) VALUES ('$cedula', '$telefono', '$email')";
		$result_representante = RepresentanteModel::Update_Data($sql_representante);
  		return $result_representante;
	}

	// Para la actualización 

	public static function BuscarRepresentanteByCedula($cedula){
    	$sql_representante = "SELECT * FROM `representante` WHERE `cedula` = '$cedula'";
		$result_representante = RepresentanteModel::Get_Data($sql_representante);
  		return $result_representante;
	}

	public static function UpdateRepresentante2 ($cedula, $telefono, $email){

		$sql_representante = "UPDATE `representante` SET `telefono` = '$telefono', `email` = '$email'  WHERE `cedula` = '$cedula'";
		$result_representante = RepresentanteModel::Update_Data($sql_representante);
  		return $result_representante;
	}

	
	// Para eliminar

	public static function DeleteRepresentante ($cedula){
		$sql_representante = "DELETE FROM `representante` WHERE `cedula` = '$cedula'";
		$result_representante = RepresentanteModel::Update_Data($sql_representante);
  		return $result_representante;
	}
}

?>