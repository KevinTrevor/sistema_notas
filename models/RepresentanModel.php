<?php 

class RepresentanModel
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
	

	public static function ListarRepresentan(){
		$sql_representan = "SELECT `cedula1`, trim(`cedula2`) as `cedula2`, trim(`parentesco`) as `parentesco` FROM `representan` ORDER BY `cedula1` asc";
		$result_representan = RepresentanModel::Get_Data($sql_representan);
  		return $result_representan;
	}

    // Para la insersión

	public static function IngresarRepresentan2 ($cedula1, $cedula2, $parentesco){

		$sql_representan = "INSERT INTO `representan` (`cedula1`, `cedula2`, `parentesco`) VALUES ('$cedula1', '$cedula2', '$parentesco')";
		$result_representan = RepresentanModel::Update_Data($sql_representan);
  		return $result_representan;
	}

	// Para la actualización 

	public static function BuscarRepresentanByCedula($cedula1){
    	$sql_representan = "SELECT * FROM `representan` WHERE `cedula1` = '$cedula1'";
		$result_representan = RepresentanModel::Get_Data($sql_representan);
  		return $result_representan;
	}

	public static function UpdateRepresentan2 ($cedula1, $cedula2, $parentesco){

		$sql_representan = "UPDATE `representan` SET `parentesco` = '$parentesco' WHERE `cedula1` = '$cedula1' and `cedula2` = '$cedula2'";
		$result_representan = RepresentanModel::Update_Data($sql_representan);
  		return $result_representan;
	}

	
	// Para eliminar

	public static function DeleteRepresentan ($cedula1, $cedula2){
		$sql_representan = "DELETE FROM `representan` WHERE `cedula1` = '$cedula1' and `cedula2` = '$cedula2'";
		$result_representan = RepresentanModel::Update_Data($sql_representan);
  		return $result_representan;
	}
}

?>