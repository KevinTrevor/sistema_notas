<?php 

class EstudianteModel
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
	

	public static function ListarEstudiante(){
		$sql_estudiante = "SELECT `cedula`, trim(`fecha_ingreso`) as `fecha_ingreso` FROM `estudiante` ORDER BY `cedula` asc";
		$result_estudiante = EstudianteModel::Get_Data($sql_estudiante);
  		return $result_estudiante;
	}

    // Para la insersión

	public static function IngresarEstudiante2 ($cedula, $fecha_ingreso){
		$sql_estudiante = "INSERT INTO `estudiante` (`cedula`, `fecha_ingreso`) VALUES ('$cedula', '$fecha_ingreso')";
		$result_estudiante = EstudianteModel::Update_Data($sql_estudiante);
  		return $result_estudiante;
	}

	// Para la actualización 

	public static function BuscarEstudianteByCedula($cedula){
    	$sql_estudiante = "SELECT * FROM `estudiante` WHERE `cedula` = '$cedula'";
		$result_estudiante = EstudianteModel::Get_Data($sql_estudiante);
  		return $result_estudiante;
	}

	public static function UpdateEstudiante2 ($cedula, $fecha_ingreso){

		$sql_estudiante = "UPDATE `estudiante` SET `fecha_ingreso` = '$fecha_ingreso' WHERE `cedula` = '$cedula'";
		$result_estudiante = EstudianteModel::Update_Data($sql_estudiante);
  		return $result_estudiante;
	}

	
	// Para eliminar

	public static function DeleteEstudiante ($cedula){
		$sql_estudiante = "DELETE FROM estudiante WHERE cedula = '$cedula'";
		$result_estudiante = EstudianteModel::Update_Data($sql_estudiante);
  		return $result_estudiante;
	}
}

?>