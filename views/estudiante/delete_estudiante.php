<?php
$cedula = $_GET['i'];
require_once(dirname(__FILE__)."/../../controller/PersonaController.php");
require_once(dirname(__FILE__)."/../../controller/EstudianteController.php");

$controller1 = new PersonaController();
$controller2 = new EstuidanteCOntroller();
$resultado1 = $controller1->DeletePersona($cedula);
$resultado2 = $controller2->DeleteEstudiante($cedula);

if($resultado1==false||$resultado2==false){?>
<div class="alert alert-warning alert-dismissable">
		        <label> <strong>Mensaje de Advertencia</strong><br> 
	   			<p> Ocurrió un error mientras se intentaba eliminar el registro en la base de datos. Revise los datos e intente nuevamente. Asegúrese de que no esté intentando eliminar un registro inexistente. </p> </label> <br>
	   			
	   	</div>
<?php
}else{?>

    <div>
     <label><strong>EXITO</strong></label>
     <p>EL registro Estudiante ha sido eliminado de forma exitosa</p>
    </div>

    <?php
	}
	
    require_once(dirname(__FILE__).'/list_estudiante.php');
}



