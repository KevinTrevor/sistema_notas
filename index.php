<?php
    include_once("models/DocenteModel.php");
    include_once("models/EstudianteModel.php");
    include_once("models/PersonaModel.php");
    include_once("models/PlantelModel.php");
    include_once("models/ZonaEducativaModel.php");
    include_once("models/RepresentanteModel.php");
    include_once("models/AnoEscolarModel.php");
    include_once("models/GradoModel.php");
    include_once("models/AsignaturaModel.php");
    include_once("models/LapsoModel.php");
    include_once("models/ContratanModel.php");
    include_once("models/DictanModel.php");
    include_once("models/MatriculanModel.php");
    include_once("models/ObtienenModel.php");
    include_once("models/AcumulanModel.php");
    include_once("models/PrelanModel.php");
    include_once("models/RepresentanModel.php");

    PersonaModel::IngresarPersona2("29582382", "Kevin David", "Rojas Noriega", "kevinrojas", "090501kd", 2);
    PersonaModel::IngresarPersona2("14221391", "Yarylui Elena", "Noriega Rodríguez", "yarylui", "1109", 3);
    PersonaModel::IngresarPersona2("28316308", "Nestor Gabriel", "Aguilar Rojas", "nestoraguilar", "211001na", 4);
    PersonaModel::IngresarPersona2("12222773", "Luis Geronimo", "Rojas Rojas", "luisrojas", "462021", 2);
    PersonaModel::IngresarPersona2("3889777", "Yaritza Ramona", "Rodríguez Jimenez", "viejitayara", "2313", 3);
    PersonaModel::IngresarPersona2("29668074", "Maria Celeste del Jesús", "Aguilera Garate", "cotamella", "100202mc", 4);

    DocenteModel::IngresarDocente2("29582382", "04127955420", "kevintrevor0905@gmail.com");
    DocenteModel::IngresarDocente2("12222773", "04120960038", "luisgeronimo@gmail.com");

    EstudianteModel::IngresarEstudiante2("28316308", "2018-10-25");
    EstudianteModel::IngresarEstudiante2("29668074", "2019-12-10");

    RepresentanteModel::IngresarRepresentante2("14221391", "04120950775", "yarylui@gmail.com");
    RepresentanteModel::IngresarRepresentante2("3889777", "04123526289", "viejitayara@gmail.com");

    ZonaEducativaModel::IngresarZonaEducativa2("1", "Nueva Esparta");
    ZonaEducativaModel::IngresarZonaEducativa2("2", "Anzoategui");

    PlantelModel::IngresarPlantel2("1", "1", "Pbro. Manuel Montaner Salazar", "Villa Rosa, Calle Principal", "Secundaria");
    PlantelModel::IngresarPlantel2("2", "1", "Argelia Laya", "Villa Rosa, Sector H", "Secundaria");
    PlantelModel::IngresarPlantel2("3", "2", "Liceo Anzoategui", "Puerto La Cruz", "Secundaria");

    AnoEscolarModel::IngresarAnoEscolar2(2021, 2022);
    AnoEscolarModel::IngresarAnoEscolar2(2020, 2021);

    GradoModel::IngresarGrado2("2020-2021", "1", "1", 1, 40);
    GradoModel::IngresarGrado2("2020-2021", "1", "2", 2, 40);
    GradoModel::IngresarGrado2("2021-2022", "1", "1", 1, 40);
    GradoModel::IngresarGrado2("2021-2022", "1", "2", 2, 40);

    AsignaturaModel::IngresarAsignatura2("2021-2022", "1", "3", "Matemáticas II");
    AsignaturaModel::IngresarAsignatura2("2021-2022", "1", "2", "Matemáticas III");
    AsignaturaModel::IngresarAsignatura2("2021-2022", "1", "1", "Álgebra Lineal");

    LapsoModel::IngresarLapso2("2020-2021", 1, "Mayo", "Agosto");
    LapsoModel::IngresarLapso2("2020-2021", 2, "Agosto", "Noviembre");
    LapsoModel::IngresarLapso2("2020-2021", 3, "Enero", "Marzo");
    LapsoModel::IngresarLapso2("2021-2022", 1, "Mayo", "Agosto");
    LapsoModel::IngresarLapso2("2021-2022", 2, "Agosto", "Noviembre");
    LapsoModel::IngresarLapso2("2021-2022", 3, "Enero", "Marzo");

    ContratanModel::IngresarContratan2("1", "29582382", "Fijo");
    ContratanModel::IngresarContratan2("1", "12222773", "Contratado");

    DictanModel::IngresarDictan2("2021-2022", "1", "1", "29582382");
    DictanModel::IngresarDictan2("2021-2022", "1", "2", "12222773");

    MatriculanModel::IngresarMatriculan2("2021-2022", "1", "1", "28316308", "A");
    MatriculanModel::IngresarMatriculan2("2021-2022", "1", "1", "29668074", "A");

    AcumulanModel::IngresarAcumulan2("2021-2022", 1, "1", "28316308", 19);
    AcumulanModel::IngresarAcumulan2("2021-2022", 2, "1", "28316308", 20);
    AcumulanModel::IngresarAcumulan2("2021-2022", 3, "1", "28316308", 18);
    AcumulanModel::IngresarAcumulan2("2021-2022", 1, "1", "29668074", 17);
    AcumulanModel::IngresarAcumulan2("2021-2022", 2, "1", "29668074", 16);
    AcumulanModel::IngresarAcumulan2("2021-2022", 3, "1", "29668074", 19);

    ObtienenModel::IngresarObtienen2("2021-2022", "1", "28316308", 19);
    ObtienenModel::IngresarObtienen2("2021-2022", "1", "29668074", 17.5);

    PrelanModel::IngresarPrelan2("3", "2");
    PrelanModel::IngresarPrelan2("2", "1");

    RepresentanModel::IngresarRepresentan2("14221391", "28316308", "Madre");
    RepresentanModel::IngresarRepresentan2("3889777", "29668074", "Abuela");

    /*DocenteModel::UpdateDocente2("29582382", "04127955420", "kevinrojas.noriega@gmail.com");
    EstudianteModel::UpdateEstudiante2("28306308", "2019-10-25");
    PersonaModel::UpdatePersona2("29582382", "Kevin Trevor", "Rojas Rodriguez", "kevinrojas", "090501kd", 2);
    PlantelModel::UpdatePlantel2("1", "1", "Pbro. Manuel Montaner Salazar", "Villa San Antonio, Calle Principal", "Secundaria");
    ZonaEducativaModel::UpdateZonaEducativa2("1", "Caracas");
    GradoModel::UpdateGrado2("2021-2022", "1", 1, 45);*/

    /*DocenteModel::DeleteDocente("29582382");
    EstudianteModel::DeleteEstudiante("28306308");
    PersonaModel::DeletePersona("29582382");
    DictanModel::DeleteDictan("2021-2022", "1", "1", "29582382");*/
    require_once(dirname(__FILE__).'/views/layout/layout.php');
?>