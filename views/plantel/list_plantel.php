<?php
   require_once(dirname(__FILE__).'/../../controllers/PlantelController.php');
   $controller= new PlantelController();
   $result_plantel= $controller->ListarPlantel1();
   $numrows = mysqli_num_rows($result_plantel);
   /*$numrows = mysqli_num_rows($result_estudiante);*/
?>

<body>
   <div class = "bg-light border p-2">
      <div>
         <button class="btn btn-lg btn-success float-end me-4">Agregar</button>
      </div>

      <div>
         <h1 class = "text-center">Listado de Planteles</h1>
      </div>
   </div>

   <div class = "mt-5 mx-3 p-3 rounded border bg-dark text-light">
      <span class = "border-end border-light ps-3 pe-2">Código Plantel</span>
      <span class = "border-end border-light ps-3 pe-2">Código Zona</span>
      <span class = "border-end border-light ps-3 pe-2">Nombre</span>
      <span class = "border-end border-light ps-3 pe-2">Dirección</span>
      <span class = "ps-3 pe-2">Nivel Educativo</span>
   </div>

   <div class = "shadow-sm">
<?php
   while ($numrows = mysqli_fetch_array($result_plantel)){
   ?>
      <div class = "mx-3 px-3 pb-4 pt-3 rounded border bg-light">
            <span class = "border-end border-secondary px-3"><?php echo $numrows["cod_plantel"]; ?></span>
            <span class = "border-end border-secondary px-3"><?php echo $numrows["cod_zona"];?></span>
            <span class = "border-end border-secondary px-3"><?php echo $numrows["nombre"]; ?></span>
            <span class = "border-end border-secondary px-3"><?php echo $numrows["direccion"]; ?></span>
            <span class = "border-end border-secondary px-3"><?php echo $numrows["nivel_educativo"]; ?></span>
            <!--Estos son los botones-->
            <button class = "btn btn-info float-end mb-2">Acceder</button>
            <button class ="btn btn-danger float-end mx-2 mb-2">Eliminar</button>
            <button class ="btn btn-warning float-end mx-2 mb-2">Modificar</button>

      </div>
<?php
   }?>
</div>

</body>