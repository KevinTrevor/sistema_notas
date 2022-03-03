<?php 

class ContratanModel
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
	

	public static function ListarContratan(){
		$sql_contratan = "SELECT `cod_plantel`, trim(`cedula`) as `cedula`, trim(`tipo_contrato`) as `tipo_contrato` FROM `contratan` ORDER BY `cod_plantel` asc";
		$result_contratan = ContratanModel::Get_Data($sql_contratan);
  		return $result_contratan;
	}

    // Para la insersión

	public static function IngresarContratan2 ($cod_plantel, $cedula, $tipo_contrato){
        
		$sql_contratan = "INSERT INTO `contratan` (`cod_plantel`, `cedula`, `tipo_contrato`) VALUES ('$cod_plantel', '$cedula', '$tipo_contrato')";
		$result_contratan = ContratanModel::Update_Data($sql_contratan);
  		return $result_contratan;
	}

	// Para la actualización 

	public static function BuscarContratanByCod($cod_plantel, $cedula){
    	$sql_contratan = "SELECT * FROM `contratan` WHERE `cod_plantel` = '$cod_plantel' and `cedula` = '$cedula'" ;
		$result_contratan = ContratanModel::Get_Data($sql_contratan);
  		return $result_contratan;
	}

	public static function UpdateContratan2 ($cod_plantel, $cedula, $tipo_contrato){

		$sql_contratan = "UPDATE `contratan` SET `tipo_contrato` = '$tipo_contrato'  WHERE `cod_plantel` = '$cod_plantel' and `cedula` = '$cedula'";
		$result_contratan = ContratanModel::Update_Data($sql_contratan);
  		return $result_contratan;
	}

	
	// Para eliminar

	public static function DeleteContratan ($cod_plantel, $cedula){
		$sql_contratan = "DELETE FROM `contratan` WHERE `cod_plantel` = '$cod_plantel' and `cedula` = '$cedula'";
		$result_contratan = ContratanModel::Update_Data($sql_contratan);
  		return $result_contratan;
	}
}

?>