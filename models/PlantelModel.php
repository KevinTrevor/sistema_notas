<?php 

class PlantelModel
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
	

	public static function ListarPlantel(){
		$sql_plantel = "SELECT `cod_plantel`, trim(`cod_zona`) as `cod_zona`, trim(`nombre`) as `nombre`, trim(`direccion`) as `direccion`, trim(`nivel_educativo`) as `nivel_educativo` FROM `plantel` ORDER BY cedula asc";
		$result_plantel = PlantelModel::Get_Data($sql_plantel);
  		return $result_plantel;
	}

    // Para la insersión

	public static function IngresarPlantel2 ($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo){
		$sql_plantel = "INSERT INTO `plantel` (`cod_plantel`, `cod_zona`, `nombre`, `direccion`, `nivel_educativo`) VALUES ('$cod_plantel', '$cod_zona', '$nombre', '$direccion', '$nivel_educativo')";
		$result_plantel = PlantelModel::Update_Data($sql_plantel);
  		return $result_plantel;
	}

	// Para la actualización 

	public static function BuscarPlantelByCod($cod_plantel){
    	$sql_plantel = "SELECT * FROM `plantel` WHERE `cod_plantel` = $cod_plantel";
		$result_plantel = PlantelModel::Get_Data($sql_plantel);
  		return $result_plantel;
	}

	public static function UpdatePlantel2 ($cod_plantel, $cod_zona, $nombre, $direccion, $nivel_educativo){

		$sql_plantel = "UPDATE `plantel` SET `cod_zona` = '$cod_zona', `nombre` = '$nombre', `direccion` = '$direccion', `nivel_educativo` = '$nivel_educativo' WHERE `cod_plantel` = '$cod_plantel'";
		$result_plantel = PlantelModel::Update_Data($sql_plantel);
  		return $result_plantel;
	}

	
	// Para eliminar

	public static function DeletePlantel ($cod_plantel){
		$sql_plantel = "DELETE FROM `plantel` WHERE `cod_plantel` = '$cod_plantel'";
		$result_plantel = PlantelModel::Update_Data($sql_plantel);
  		return $result_plantel;
	}
}

?>