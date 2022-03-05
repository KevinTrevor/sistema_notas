<?php

if (isset($_SESSION['User']) == 1 and (isset($_POST['id']) == 1))
{ 

	$cedula = $_POST['cedula'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$login = $_POST['login'];
	$clave = $_POST['clave'];
	$fecha_ingreso = $_POST['url_noticia'];
	$url_imagen = $_POST['url_imagen'];

	require_once(dirname(__FILE__).'/../../controllers/PersonaController.php');
    require_once(dirname(__FILE__).'/../../controllers/EstudianteController.php');
    $controller1= new PersonaController();
    $controller2= new EstudianteController();
    $result_persona= $controller1->UpdatePersona2($cedula, $nombres, $apellidos, $login, $clave, 4);
    $result_estudiante= $controller2->UpdateEstudiante2($cedula, $fecha_ingreso);
	
	if ($result_persona == false or $result_estudiante == false) // la consulta no fue exitosa 
	{   ?>
		<div class="alert alert-warning alert-dismissable">
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	   			<span aria-hidden="true">&times;</span>
	   			</button>
				<label for="busqueda" align="right"> <strong>Mensaje de Advertencia</strong><br> 
	   			<p> Ocurrió un error mientras se intentaba actualizar el registro en la base de datos. Revise los datos e intente nuevamente. Asegúrese de hacer alguna actualización de datos y de que no está intentando modificar datos inexistentes. </p> </label> <br>
	   			
	   	</div>
	   
 
	   	  			
	<?php 
    }else
	{   ?>
		 <div class="alert alert-success">
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span> 
                </button>
                <label for="busqueda" align="right"> <strong>Mensaje de Éxito</strong> <br> 
                <p> El registro del Estudiante en el Sistema de Notas ha sido modificado en la base de datos de forma satisfactoria.</p> </label> <br>
                
          </div>
	<?php
	}
    
    require_once(dirname(__FILE__).'/list_estudiante.php');
}else{
    require_once(dirname(__FILE__).'/list_estudiante.php');
}

?>  