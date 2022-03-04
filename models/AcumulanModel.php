<?php 

class AcumulanModel
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
	

	public static function ListarAcumulan(){
		$sql_acumulan = "SELECT `cod_ano_escolar`, trim(`num_lapso`) as `num_lapso`, trim(`cod_asignatura`) as `cod_asignatura`, trim(`cedula`) as `cedula` FROM `acumulan` ORDER BY `cod_ano_escolar` asc";
		$result_acumulan = AcumulanModel::Get_Data($sql_acumulan);
  		return $result_acumulan;
	}

    // Para la insersión

	public static function IngresarAcumulan2 ($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial){
        
		$sql_acumulan = "INSERT INTO `acumulan` (`cod_ano_escolar`, `num_lapso`, `cod_asignatura`, `cedula`, `nota_parcial`) VALUES ('$cod_ano_escolar', '$num_lapso', '$cod_asignatura', '$cedula', '$nota_parcial')";
		$result_acumulan = AcumulanModel::Update_Data($sql_acumulan);
  		return $result_acumulan;
	}

	// Para la actualización 

	public static function BuscarAcumulanByCod($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula){
    	$sql_acumulan = "SELECT * FROM `acumulan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso' and `cod_asignatura` = '$cod_asignatura' and `cedula` = `$cedula`";
		$result_acumulan = AcumulanModel::Get_Data($sql_acumulan);
  		return $result_acumulan;
	}

	public static function UpdateAcumulan2 ($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula, $nota_parcial){

		$sql_acumulan = "UPDATE `acumulan` SET `nota_parcial` = '$nota_parcial' WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'";
		$result_acumulan = AcumulanModel::Update_Data($sql_acumulan);
  		return $result_acumulan;
	}

	
	// Para eliminar

	public static function DeleteAcumulan ($cod_ano_escolar, $num_lapso, $cod_asignatura, $cedula){
		$sql_acumulan = "DELETE FROM `acumulan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'";
		$result_acumulan = AcumulanModel::Update_Data($sql_acumulan);
  		return $result_acumulan;
	}
}

?>