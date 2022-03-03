<?php 

class MatriculanModel
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
	

	public static function ListarMatriculan(){
		$sql_matriculan = "SELECT `cod_ano_escolar`, trim(`cod_plantel`) as `cod_plantel`, trim(`cod_grado`) as `cod_grado`, trim(`cedula`) as `cedula`, trim(`seccion`) as `seccion` FROM `matriculan` ORDER BY `cod_ano_escolar` asc";
		$result_matriculan = MatriculanModel::Get_Data($sql_matriculan);
  		return $result_matriculan;
	}

    // Para la insersión

	public static function IngresarMatriculan2 ($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion){
        
		$sql_matriculan = "INSERT INTO `matriculan` (`cod_ano_escolar`, `cod_plantel`, `cod_grado`, `cedula`, `seccion`) VALUES ('$cod_ano_escolar', '$cod_plantel', '$cod_grado', '$cedula', '$seccion')";
		$result_matriculan = MatriculanModel::Update_Data($sql_matriculan);
  		return $result_matriculan;
	}

	// Para la actualización 

	public static function BuscarMatriculanByCod($cod_ano_escolar, $cod_plantel, $cod_grado){
    	$sql_matriculan = "SELECT * FROM `matriculan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_plantel` = '$cod_plantel' and `cod_grado` = '$cod_grado'" ;
		$result_matriculan = MatriculanModel::Get_Data($sql_matriculan);
  		return $result_matriculan;
	}

	public static function UpdateMatriculan2 ($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula, $seccion){

		$sql_matriculan = "UPDATE `matriculan` SET `seccion` = '$seccion' WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_plantel` = '$cod_plantel' and `cod_grado` = '$cod_grado' and `cedula` = '$cedula'";
		$result_matriculan = MatriculanModel::Update_Data($sql_matriculan);
  		return $result_matriculan;
	}

	
	// Para eliminar

	public static function DeleteMatriculan ($cod_ano_escolar, $cod_plantel, $cod_grado, $cedula){
		$sql_matriculan = "DELETE FROM `matriculan` WHERE `cod_ano_escolar` = '$cod_ano_escolar' and `cod_plantel` = '$cod_plantel' and `cod_grado` = '$cod_grado' and `cedula` = '$cedula'";
		$result_matriculan = MatriculanModel::Update_Data($sql_matriculan);
  		return $result_matriculan;
	}
}

?>