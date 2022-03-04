<?php 

class PrelanModel
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
	

	public static function ListarPrelan(){
		$sql_prelan = "SELECT `cod_asignatura1`, trim(`cod_asignatura2`) as `cod_asignatura2` FROM `prelan` ORDER BY `cod_asignatura1` asc";
		$result_prelan = PrelanModel::Get_Data($sql_prelan);
  		return $result_prelan;
	}

    // Para la insersión

	public static function IngresarPrelan2 ($cod_asignatura1, $cod_asignatura2){

		$sql_prelan = "INSERT INTO `prelan` (`cod_asignatura1`, `cod_asignatura2`) VALUES ('$cod_asignatura1', '$cod_asignatura2')";
		$result_prelan = PrelanModel::Update_Data($sql_prelan);
  		return $result_prelan;
	}

	// Para la actualización 

	public static function BuscarPrelanByCod($cod_asignatura1){
    	$sql_prelan = "SELECT * FROM `prelan` WHERE `cod_asignatura1` = '$cod_asignatura1'";
		$result_prelan = PrelanModel::Get_Data($sql_prelan);
  		return $result_prelan;
	}

	/*public static function UpdatePrelan2 ($cod_asignatura1, $cod_asignatura2){

		$sql_prelan = "UPDATE `prelan` SET `cod_asignatura2` = '$cod_asignatura2' WHERE `cod_asignatura1` = '$cod_asignatura1'";
		$result_prelan = PrelanModel::Update_Data($sql_prelan);
  		return $result_prelan;
	}*/

	
	// Para eliminar

	public static function DeletePrelan ($cod_asignatura1, $cod_asignatura2){
		$sql_prelan = "DELETE FROM `prelan` WHERE `cod_asignatura1` = '$cod_asignatura1' and `cod_asignatura2` = '$cod_asignatura2'";
		$result_prelan = PrelanModel::Update_Data($sql_prelan);
  		return $result_prelan;
	}
}

?>