<?php 

class DictanModel
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
	

	public static function ListarDictan(){
		$sql_dictan = "SELECT `cod_ano_escolar`, trim(`cod_grado`) as `cod_grado`, trim(cod_asignatura) as `cod_asignatura`, trim(cedula) as `cedula` FROM `dictan` ORDER BY `cod_ano_escolar` asc";
		$result_dictan = DictanModel::Get_Data($sql_dictan);
  		return $result_dictan;
	}

    // Para la insersión

	public static function IngresarDictan2 ($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
        
		$sql_dictan = "INSERT INTO `dictan` (`cod_ano_escolar`, `cod_grado`, `cod_asignatura`, `cedula`) VALUES ('$cod_ano_escolar', '$cod_grado', '$cod_asignatura', '$cedula')";
		$result_dictan = DictanModel::Update_Data($sql_dictan);
  		return $result_dictan;
	}

	// Para la actualización 

	public static function BuscarDictanByCod($cod_ano_escolar, $cod_grado){
    	$sql_dictan = "SELECT * FROM `dictan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado'" ;
		$result_dictan = DictanModel::Get_Data($sql_dictan);
  		return $result_dictan;
	}

	/*public static function UpdateDictan2 ($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){

		$sql_dictan = "UPDATE `dictan` SET `cedula` = '$cedula'  WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado' and `cod_asignatura` = '$cod_asignatura'";
		$result_dictan = DictanModel::Update_Data($sql_dictan);
  		return $result_dictan;
	}*/

	
	// Para eliminar

	public static function DeleteDictan ($cod_ano_escolar, $cod_grado, $cod_asignatura, $cedula){
		$sql_dictan = "DELETE FROM `dictan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_grado` = '$cod_grado' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'";
		$result_dictan = DictanModel::Update_Data($sql_dictan);
  		return $result_dictan;
	}
}

?>