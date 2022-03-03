<?php 

class AnoEscolarModel
{
	
	function __construct()
	{
	
	}

	// FUNCIONES GENERICAS PARA CONSULTAR Y ACTUALIZAR (INSERTAR, MODIFICAR Y ELIMINAR)

	public static function Get_Data($sql){
		include_once('core/Conectar.php');
		$conexion=Conectar::conexion();
		if(!$result = mysqli_query($conexion, $sql)) die();
		$conexion = Conectar::desconexion($conexion);
  		return $result;
	}

	public static function Update_Data($sql){
		include_once('core/Conectar.php');
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
	

	public static function ListarAnoEscolar(){
		$sql_ano_escolar = "SELECT `cod_ano_escolar`, trim(`ano_inicio`) as `ano_inicio`, trim(`ano_fin`) as `ano_fin` FROM `ano_escolar` ORDER BY `cod_ano_escolar` asc";
		$result_ano_escolar = AnoEscolarModel::Get_Data($sql_ano_escolar);
  		return $result_ano_escolar;
	}

    // Para la insersión

	public static function IngresarAnoEscolar2 ($ano_inicio, $ano_fin){
        $cod_ano_escolar = "$ano_inicio-$ano_fin";
		$sql_ano_escolar = "INSERT INTO `ano_escolar` (`cod_ano_escolar`, `ano_inicio`, `ano_fin`) VALUES ('$cod_ano_escolar', '$ano_inicio', '$ano_fin')";
		$result_ano_escolar = AnoEscolarModel::Update_Data($sql_ano_escolar);
  		return $result_ano_escolar;
	}

	// Para la actualización 

	public static function BuscarAnoEscolarByCod($cod_ano_escolar){
    	$sql_ano_escolar = "SELECT * FROM `ano_escolar` WHERE `cod_ano_escolar` = '$cod_ano_escolar'";
		$result_ano_escolar = AnoEscolarModel::Get_Data($sql_ano_escolar);
  		return $result_ano_escolar;
	}

	public static function UpdateAnoEscolar2 ($cod_ano_escolar, $ano_inicio, $ano_fin){

		$sql_ano_escolar = "UPDATE `ano_escolar` SET `ano_inicio` = '$ano_inicio', `ano_fin` = '$ano_fin'  WHERE `cod_ano_escolar` = '$cod_ano_escolar'";
		$result_ano_escolar = AnoEscolarModel::Update_Data($sql_ano_escolar);
  		return $result_ano_escolar;
	}

	
	// Para eliminar

	public static function DeleteAnoEscolar ($cod_ano_escolar){
		$sql_ano_escolar = "DELETE FROM `ano_escolar` WHERE `cod_ano_escolar` = '$cod_ano_escolar'";
		$result_ano_escolar = AnoEscolarModel::Update_Data($sql_ano_escolar);
  		return $result_ano_escolar;
	}
}

?>