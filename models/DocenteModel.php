<?php 

class DocenteModel
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
	

	public static function ListarDocente(){
		$sql_docente = "SELECT * FROM `persona_usuario` INNER JOIN `docente` WHERE `persona_usuario`.`cedula` = `docente`.`cedula` ORDER BY `persona_usuario`.`cedula` asc";
		$result_docente = DocenteModel::Get_Data($sql_docente);
  		return $result_docente;
	}

    // Para la insersión

	public static function IngresarDocente2 ($cedula, $telefono, $email){

		$sql_docente = "INSERT INTO `docente` (`cedula`, `telefono`, `email`) VALUES ('$cedula', '$telefono', '$email')";
		$result_docente = DocenteModel::Update_Data($sql_docente);
  		return $result_docente;
	}

	// Para la actualización 

	public static function BuscarDocenteByCedula($cedula){
    	$sql_docente = "SELECT * FROM `docente` WHERE `cedula` = '$cedula'";
		$result_docente = DocenteModel::Get_Data($sql_docente);
  		return $result_docente;
	}

	public static function UpdateDocente2 ($cedula, $telefono, $email){

		$sql_docente = "UPDATE `docente` SET `telefono` = '$telefono', `email` = '$email'  WHERE `cedula` = '$cedula'";
		$result_docente = DocenteModel::Update_Data($sql_docente);
  		return $result_docente;
	}

	
	// Para eliminar

	public static function DeleteDocente ($cedula){
		$sql_docente = "DELETE FROM `docente` WHERE `cedula` = '$cedula'";
		$result_docente = DocenteModel::Update_Data($sql_docente);
  		return $result_docente;
	}
}

?>