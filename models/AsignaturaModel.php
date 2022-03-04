<?php 

class AsignaturaModel
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
	

	public static function ListarAsignatura(){
		$sql_asignatura = "SELECT `cod_asignatura`, trim(`cod_ano_escolar`) as `cod_ano_escolar`, trim(`cod_grado`) as `cod_grado`, trim(`nombre`) as `nombre` FROM `asignatura` ORDER BY cod_asignatura asc";
		$result_asignatura = AsignaturaModel::Get_Data($sql_asignatura);
  		return $result_asignatura;
	}

    // Para la insersión

	public static function IngresarAsignatura2 ($cod_ano_escolar, $cod_grado, $cod_asignatura, $nombre){
        
		$sql_asignatura = "INSERT INTO `asignatura` (`cod_asignatura`,`cod_ano_escolar`, `cod_grado`, `nombre`) VALUES ('$cod_asignatura', '$cod_ano_escolar', '$cod_grado', '$nombre')";
		$result_asignatura = AsignaturaModel::Update_Data($sql_asignatura);
  		return $result_asignatura;
	}

	// Para la actualización 

	public static function BuscarAsignaturaByCod($cod_asignatura){
    	$sql_asignatura = "SELECT * FROM `asignatura` WHERE `cod_asignatura` = '$cod_asignatura'" ;
		$result_asignatura = AsignaturaModel::Get_Data($sql_asignatura);
  		return $result_asignatura;
	}

	public static function UpdateAsignatura2 ($cod_ano_escolar, $cod_asignatura, $cod_grado, $nombre){

		$sql_asignatura = "UPDATE `asignatura` SET `cod_ano_escolar` = '$cod_ano_escolar', `cod_grado` = '$cod_grado', `nombre` = '$nombre'  WHERE `cod_asignatura` = '$cod_asignatura'";
		$result_asignatura = AsignaturaModel::Update_Data($sql_asignatura);
  		return $result_asignatura;
	}

	
	// Para eliminar

	public static function DeleteAsignatura ($cod_asignatura){
		$sql_asignatura = "DELETE FROM `asignatura` WHERE `cod_asignatura` = '$cod_asignatura'";
		$result_asignatura = AsignaturaModel::Update_Data($sql_asignatura);
  		return $result_asignatura;
	}
}

?>