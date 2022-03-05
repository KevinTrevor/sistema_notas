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
         <?php echo "<a class = 'float-end' href='?controller=Plantel&action=IngresarPlantel' title= 'Ingresar'>";?>  
         <img width="50px" height ="50px" src="../sistema_notas/images/add_icon.png" alt=""> </a>
      </div>

      <div>
         <h1 class = "text-center">Listado de Planteles</h1>
      </div>
   </div>

<div class="table-responsive">
   <table id="dtBasicExample" data-order='[[ 0, "asc" ]]' data-page-length='10' class="table table-sm table-striped table-hover table-bordered" cellspacing="0" width="100%" >
 
      <thead>
         <tr>
              <th class="th-sm">Código Plantel</th>
              <th class="th-sm">Código Zona</th>
              <th class="th-sm">Nombre</th>
              <th class="th-sm">Dirección</th>
              <th class="th-sm">Nivel Educativo</th>
              <th class="th-sm">Modificar</th>
              <th class="th-sm">Eliminar</th>
              <th class="th-sm">Acceder</th>
         </tr>

  </thead>

 <tbody>
 <?php 
     
      if ($numrows != 0)
      {
                       while ($numrows = mysqli_fetch_array($result_plantel))
                       {?>
                            <tr>
                                <?php
                                    $i = $numrows["cod_plantel"];
                                ?>
                                <th scope="row"><?php echo $numrows["cod_plantel"]; ?></th>                                   
                                <td><?php echo "$numrows[cod_zona]";?></td>
                                <td><?php echo "$numrows[nombre]";?></td>
                                <td><?php echo "$numrows[direccion]";?></td>
                                <td><?php echo "$numrows[nivel_educativo]";?></td>
                              
                                <td align= "center">
                                    <?php echo "<a href='?controller=Plantel&action=UpdatePlantel&i=$i' title= 'Modificar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/update_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=Plantel&action=DeletePlantel&i=$i' title= 'Eliminar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/delete_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=Plantel&action=ListarPlantel&i=$i' title= 'Acceder'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/access_icon.png" alt=""> </a>
                                </td>
                            </tr>
                  <?php }
      }
?>
</div>

</body>