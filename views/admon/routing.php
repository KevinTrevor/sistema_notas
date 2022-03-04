<?php 

$controllers=array(
	
	'ZonaEducativa'=>['ListarZonaEducativa', 'IngresarZonaEducativa', 'IngresarZonaEducativa1', 'UpdateZonaEducativa', 'UpdateZonaEducativa1', 'DeleteZonaEducativa'],
    'Plantel'=>['ListarPlantel', 'IngresarPlantel', 'IngresarPlantel1', 'UpdatePlantel', 'UpdatePlantel1', 'DeletePlantel'],
    'Grado'=>['ListarGrado', 'IngresarGrado', 'IngresarGrado1', 'UpdateGrado', 'UpdateGrado1', 'DeleteGrado'],
    'Asignatura'=>['ListarAsignatura', 'IngresarAsignatura', 'IngresarAsignatura1', 'UpdateAsignatura', 'UpdateAsignatura1', 'DeleteAsignatura'],
    'Persona'=>['ListarPersona', 'IngresarPersona', 'IngresarPersona1', 'UpdatePersona', 'UpdatePersona1', 'DeletePersona'],
    'Persona_Estudiante'=>['ListarPersona_Estudiante', 'IngresarPersona_Estudiante', 'IngresarPersona_Estudiante1', 'UpdatePersona_Estudiante', 'UpdatePersona_Estudiante1', 'DeletePersona_Estudiante'],
    'Docente'=>['ListarDocente', 'IngresarDocente', 'IngresarDocente1', 'UpdateDocente', 'UpdateDocente1', 'DeleteDocente'],
    'Representante'=>['ListarRepresentante', 'IngresarRepresentante', 'IngresarRepresentante1', 'UpdateRepresentante', 'UpdateRepresentante1', 'DeleteRepresentante'],
    'Estudiante'=>['ListarEstudiante', 'IngresarEstudiante', 'IngresarEstudiante1', 'UpdateEstudiante', 'UpdateEstudiante1', 'DeleteEstudiante'],
    'AnoEscolar'=>['ListarAnoEscolar', 'IngresarAnoEscolar', 'IngresarAnoEscolar1', 'UpdateAnoEscolar', 'UpdateAnoEscolar1', 'DeleteAnoEscolar'],
    'Lapso'=>['ListarLapso', 'IngresarLapso', 'IngresarLapso1', 'UpdateLapso', 'UpdateLapso1', 'DeleteLapso'],
    'Acumulan'=>['ListarAcumulan', 'IngresarAcumulan', 'IngresarAcumulan1', 'UpdateAcumulan', 'UpdateAcumulan1', 'DeleteAcumulan'],
    'Contratan'=>['ListarContratan', 'IngresarContratan', 'IngresarContratan1', 'UpdateContratan', 'UpdateContratan1', 'DeleteContratan'],
    'Dictan'=>['ListarDictan', 'IngresarDictan', 'IngresarDictan1', 'UpdateDictan', 'UpdateDictan1', 'DeleteDictan'],
    'Obtienen'=>['ListarObtienen', 'IngresarObtienen', 'IngresarObtienen1', 'UpdateObtienen', 'UpdateObtienen1', 'DeleteObtienen'],
    'Matriculan'=>['ListarMatriculan', 'IngresarMatriculan', 'IngresarMatriculan1', 'UpdateMatriculan', 'UpdateMatriculan1', 'DeleteMatriculan'],
    'Prelan'=>['ListarPrelan', 'IngresarPrelan', 'IngresarPrelan1', 'UpdatePrelan', 'UpdatePrelan1', 'DeletePrelan'],
    'Representan'=>['ListarRepresentan', 'IngresarRepresentan', 'IngresarRepresentan1', 'UpdateRepresentan', 'UpdateRepresentan1', 'DeleteRepresentan']
	// este arreglo ira creciendo a la medida que va creciendo las opciones de menu me mi sistema
);

if (@array_key_exists($controller, $controllers)) {
	
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('ZonaEducativa','ListarZonaEducativa');
	}		
}else{
        call('Estudiante', 'IngresarEstudiante');
		/*call('ZonaEducativa','ListarZonaEducativa');*/
}

function call($controller, $action){
	

	require_once(dirname(__FILE__).'/../../controllers/'.$controller.'Controller.php');

	switch ($controller) {
		 
		case 'ZonaEducativa': 
			$controller= new ZonaEducativaController();
			break;
        case 'Plantel':
            $controller= new PlantelController();
            break;
        case 'Grado':
            $controller= new GradoController();
            break;
        case 'Asignatura':
            $controller= new AsignaturaController();
            break;
        case 'Persona':
            $controller= new PersonaController();
            break;
        case 'Persona_Estudiante':
            $controller= new Persona_EstudianteController();
            break;
        case 'Docente':
            $controller= new DocenteController();
            break;
        case 'Representante':
            $controller= new RepresentanteController();
            break;
        case 'Estudiante':
            $controller= new EstudianteController();
            break;
        case 'AnoEscolar':
            $controller= new AnoEscolarController();
            break;
        case 'Lapso':
            $controller= new LapsoController();
            break;
        case 'Acumulan':
            $controller= new AcumulanController();
            break;
        case 'Contratan':
            $controller= new ContratanController();
            break;
        case 'Dictan':
            $controller= new DictanController();
            break;
        case 'Obtienen':
            $controller= new ObtienenController();
            break;
        case 'Matriculan':
            $controller= new MatriculanController();
            break;
        case 'Prelan':
            $controller= new PrelanController();
            break;
        case 'Representan':
            $controller= new RepresentanController();
            break;
			 // en este switche habran tantos case como listas del menu se tengan
	}
	
	$controller->{$action}();
}

?>