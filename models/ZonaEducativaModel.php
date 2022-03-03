<?php 

class ZonaEducativaModel
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
	

	public static function ListarZonaEducativa(){
		$sql_plantel = "SELECT `cod_zona`, trim(`estado`) as `estado` FROM `zona_educativa` ORDER BY 'cod_zona' asc";
		$result_plantel = ZonaEducativaModel::Get_Data($sql_plantel);
  		return $result_plantel;
	}

    // Para la insersión

	public static function IngresarZonaEducativa2 ($cod_zona, $estado){
		$sql_zona_educativa = "INSERT INTO `zona_educativa` (`cod_zona`, `estado`) VALUES ('$cod_zona', '$estado')";
		$result_zona_educativa = ZonaEducativaModel::Update_Data($sql_zona_educativa);
  		return $result_zona_educativa;
	}

	// Para la actualización 

	public static function BuscarZonaEducativaByCod($cod_zona){
    	$sql_zona_educativa = "SELECT * FROM `zona_educativa` WHERE `cod_zona` = $cod_zona";
		$result_zona_educativa = ZonaEducativaModel::Get_Data($sql_zona_educativa);
  		return $result_zona_educativa;
	}

	public static function UpdateZonaEducativa2 ($cod_zona, $estado){
		$sql_zona_educativa = "UPDATE `zona_educativa` SET `estado` = '$estado' WHERE `cod_zona` = '$cod_zona'";
		$result_zona_educativa = ZonaEducativaModel::Update_Data($sql_zona_educativa);
  		return $result_zona_educativa;
	}

	
	// Para eliminar

	public static function DeleteZonaEducativa ($cod_zona){
		$sql_zona_educativa = "DELETE FROM `plantel` WHERE `cod_zona` = '$cod_zona'";
		$result_zona_educativa = ZonaEducativaModel::Update_Data($sql_zona_educativa);
  		return $result_zona_educativa;
	}
}

?>