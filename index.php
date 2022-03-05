<?php 
    session_start();
    $_SESSION['User'] = "Epsilon";
    $_SESSION['Nivel'] = "Bachilleres";

    if (isset($_GET['controller'])&&isset($_GET['action'])) {
        $controller=$_GET['controller'];
        $action=$_GET['action'];
        
    }else{
     $controller = 'Estudiante';
     $action = 'ListarEstudiante';
    }
    require_once(dirname(__FILE__).'/views/layout/layout.php');
?>