<?php
   require_once(dirname(__FILE__).'/../../controllers/EstudianteController.php');
   $controller= new EstudianteController();
   $result_estudiante= $controller->ListarEstudiante1();
   $numrows = mysqli_num_rows($result_estudiante);
?>

<body>
   <div class = "bg-light border p-2">
      <div>
         <?php echo "<a class = 'float-end' href='?controller=Estudiante&action=IngresarEstudiante' title= 'Ingresar'>";?>  
         <img width="50px" height ="50px" src="../sistema_notas/images/add_icon.png" alt=""> </a>
      </div>

      <div>
         <h1 class = "text-center">Listado de Estudiantes</h1>
      </div>
   </div>

<div class="table-responsive">
   <table id="dtBasicExample" data-order='[[ 0, "asc" ]]' data-page-length='10' class="table table-sm table-striped table-hover table-bordered" cellspacing="0" width="100%" >
 
      <thead>
         <tr>
              <th class="th-sm">Cédula</th>
              <th class="th-sm">Nombres y Apellidos</th>
              <th class="th-sm">Fecha de Ingreso</th>
              <th class="th-sm">Modificar</th>
              <th class="th-sm">Eliminar</th>
              <th class="th-sm">Acceder</th>
         </tr>

  </thead>

 <tbody>
 <?php 
     
      if ($numrows != 0)
      {
                       while ($numrows = mysqli_fetch_array($result_estudiante))
                       {?>
                            <tr>
                                <?php
                                    $i = $numrows["cedula"];
                                ?>
                                <th scope="row"><?php echo $numrows["cedula"]; ?></th>                                   
                                <td><?php echo "$numrows[nombres]"." "."$numrows[apellidos]";?></td>
                                <td><?php echo "$numrows[fecha_ingreso]";?></td>
                              
                                <td align= "center">
                                    <?php echo "<a href='?controller=Estudiante&action=UpdateEstudiante&i=$i' title= 'Modificar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/update_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=Estudiante&action=DeleteEstudiante&i=$i' title= 'Eliminar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/delete_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=Estudiante&action=ListarEstudiante&i=$i' title= 'Acceder'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/access_icon.png" alt=""> </a>
                                </td>
                            </tr>
                  <?php }
      }
?>
</div>

</body>