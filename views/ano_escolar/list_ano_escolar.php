<?php
   require_once('../sistema_notas/controllers/AnoEscolarController.php');
   $controller= new AnoEscolarController();
   $result_ano= $controller->ListarAnoEscolar1();
   $numrows = mysqli_num_rows($result_ano);
   /*$numrows = mysqli_num_rows($result_estudiante);*/
?>

<body>
   <div class = "bg-light border p-2">
      <div>
         <button class="btn btn-lg btn-success float-end me-4">Agregar</button>
      </div>

      <div>
         <h1 class = "text-center">Listado de Años Escolares</h1>
      </div>
   </div>

   <div class = "mt-5 mx-3 p-3 rounded border bg-dark text-light">
      <span class = "border-end border-light ps-3 pe-2">Código </span>
      <span class = "border-end border-light ps-3 pe-2">Año de Inicio</span>
      <span class = "border-end border-light ps-3 pe-2">Año de Fin</span>
   </div>

   <div class = "shadow-sm">
<?php
   while ($numrows = mysqli_fetch_array($result_ano)){
   ?>
      <div class = "mx-3 px-3 pb-4 pt-3 rounded border bg-light">
            <span class = "border-end border-secondary px-1"><?php echo $numrows["cod_ano_escolar"]; ?></span>
            <span class = "border-end border-secondary px-4"><?php echo $numrows["ano_inicio"]; ?></span>
            <span class = "border-end border-secondary px-4"><?php echo $numrows["ano_fin"]; ?></span>
            
            <!--Estos son los botones-->
            <button class = "btn btn-info float-end mb-2">Acceder</button>
            <button class ="btn btn-danger float-end mx-2 mb-2">Eliminar</button>
            <button class ="btn btn-warning float-end mx-2 mb-2">Modificar</button>

      </div>
<?php
   }?>
</div>

</body>