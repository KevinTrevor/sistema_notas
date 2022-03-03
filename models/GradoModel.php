<?php 

class GradoModel
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
	

	public static function ListarGrado(){
		$sql_grado = "SELECT `cod_grado`, trim(`cod_ano_escolar`) as `cod_ano_escolar`, trim(`num_grado`) as `num_grado`, trim(`cupo`) as `cupo` FROM `grado` ORDER BY `cod_grado` asc";
		$result_grado = GradoModel::Get_Data($sql_grado);
  		return $result_grado;
	}

    // Para la insersión

	public static function IngresarGrado2 ($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo){
        
		$sql_grado = "INSERT INTO `grado` (`cod_ano_escolar`, `cod_plantel`, `cod_grado`, `num_grado`, `cupo`) VALUES ('$cod_ano_escolar', '$cod_grado', '$cod_plantel', '$num_grado', '$cupo')";
		$result_grado = GradoModel::Update_Data($sql_grado);
  		return $result_grado;
	}

	// Para la actualización 

	public static function BuscarGradoByCod($cod_ano_escolar, $cod_grado){
    	$sql_grado = "SELECT * FROM `grado` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado'" ;
		$result_grado = GradoModel::Get_Data($sql_grado);
  		return $result_grado;
	}

	public static function UpdateGrado2 ($cod_ano_escolar, $cod_grado, $cod_plantel, $num_grado, $cupo){

		$sql_grado = "UPDATE `grado` SET `cod_plantel` = '$cod_plantel', `num_grado` = '$num_grado', `cupo` = '$cupo'  WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado'";
		$result_grado = GradoModel::Update_Data($sql_grado);
  		return $result_grado;
	}

	
	// Para eliminar

	public static function DeleteGrado ($cod_ano_escolar, $cod_grado){
		$sql_grado = "DELETE FROM `grado` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado' and `cod_grado` = '$cod_grado'";
		$result_grado = GradoModel::Update_Data($sql_grado);
  		return $result_grado;
	}
}

?>