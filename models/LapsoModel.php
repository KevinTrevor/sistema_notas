<?php 

class LapsoModel
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
	

	public static function ListarLapso(){
		$sql_lapso = "SELECT `cod_grado`, trim(`cod_ano_escolar`) as `cod_ano_escolar`, trim(`num_grado`) as `num_grado`, trim(`cupo`) as `cupo` FROM `lapso` ORDER BY `cod_grado` asc";
		$result_lapso = LapsoModel::Get_Data($sql_lapso);
  		return $result_lapso;
	}

    // Para la insersión

	public static function IngresarLapso2 ($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin){
        
		$sql_lapso = "INSERT INTO `lapso` (`cod_ano_escolar`, `num_lapso`, `mes_inicio`, `mes_fin`) VALUES ('$cod_ano_escolar', '$num_lapso', '$mes_inicio', '$mes_fin')";
		$result_lapso = LapsoModel::Update_Data($sql_lapso);
  		return $result_lapso;
	}

	// Para la actualización 

	public static function BuscarLapsoByCod($cod_ano_escolar, $num_lapso){
    	$sql_lapso = "SELECT * FROM `lapso` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso'" ;
		$result_lapso = LapsoModel::Get_Data($sql_lapso);
  		return $result_lapso;
	}

	public static function UpdateLapso2 ($cod_ano_escolar, $num_lapso, $mes_inicio, $mes_fin){

		$sql_lapso = "UPDATE `lapso` SET `mes_inicio` = '$mes_inicio', `mes_fin` = '$mes_fin'  WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso'";
		$result_lapso = LapsoModel::Update_Data($sql_lapso);
  		return $result_lapso;
	}

	
	// Para eliminar

	public static function DeleteLapso ($cod_ano_escolar, $num_lapso){
		$sql_lapso = "DELETE FROM `lapso` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `num_lapso` = '$num_lapso'";
		$result_lapso = LapsoModel::Update_Data($sql_lapso);
  		return $result_lapso;
	}
}

?>