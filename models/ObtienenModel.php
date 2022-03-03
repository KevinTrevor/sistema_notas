<?php 

class ObtienenModel
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
	

	public static function ListarObtienen(){
		$sql_obtienen = "SELECT `cod_ano_escolar`, trim(`cod_asignatura`) as `cod_asignatura`, trim(`cedula`) as `cedula`, trim(`nota_final`) as `nota_final` FROM `obtienen` ORDER BY `cod_ano_escolar` asc";
		$result_obtienen = ObtienenModel::Get_Data($sql_obtienen);
  		return $result_obtienen;
	}

    // Para la insersión

	public static function IngresarObtienen2 ($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final){
        
		$sql_obtienen = "INSERT INTO `obtienen` (`cod_ano_escolar`, `cod_asignatura`, `cedula`, `nota_final`) VALUES ('$cod_ano_escolar', '$cod_asignatura', '$cedula', '$nota_final')";
		$result_obtienen = ObtienenModel::Update_Data($sql_obtienen);
  		return $result_obtienen;
	}

	// Para la actualización 

	public static function BuscarObtienenByCod($cod_ano_escolar, $cod_asignatura, $cedula){
    	$sql_obtienen = "SELECT * FROM `obtienen` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'" ;
		$result_obtienen = ObtienenModel::Get_Data($sql_obtienen);
  		return $result_obtienen;
	}

	public static function UpdateObtienen2 ($cod_ano_escolar, $cod_asignatura, $cedula, $nota_final){

		$sql_obtienen = "UPDATE `obtienen` SET `nota_final` = '$nota_final' WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'";
		$result_obtienen = ObtienenModel::Update_Data($sql_obtienen);
  		return $result_obtienen;
	}

	
	// Para eliminar

	public static function DeleteObtienen ($cod_ano_escolar, $cod_asignatura, $cedula){
		$sql_obtienen = "DELETE FROM `obtienen` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_asignatura` = '$cod_asignatura' and `cedula` = '$cedula'";
		$result_obtienen = ObtienenModel::Update_Data($sql_obtienen);
  		return $result_obtienen;
	}
}

?>