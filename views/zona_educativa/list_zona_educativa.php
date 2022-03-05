<?php
   require_once('controllers/ZonaEducativaController.php');
   $controller= new ZonaEducativaController();
   $result_zonas= $controller->ListarZonaEducativa1();
   $numrows = mysqli_num_rows($result_zonas);
?>

<div class = "bg-light border p-2">
    <div>
         <?php echo "<a class = 'float-end' href='?controller=ZonaEducativa&action=IngresarZonaEducativa' title= 'Ingresar'>";?>  
         <img width="50px" height ="50px" src="../sistema_notas/images/add_icon.png" alt=""> </a>
      </div>

    <div>
        <h1 class = "text-center">Listado de Zonas</h1>
    </div>
</div>

<div class="table-responsive">
   <table id="dtBasicExample" data-order='[[ 0, "asc" ]]' data-page-length='10' class="table table-sm table-striped table-hover table-bordered" cellspacing="0" width="100%" >
 
      <thead>
         <tr>
              <th class="th-sm">Código Zona</th>
              <th class="th-sm">Estado</th>
              <th class="th-sm">Modificar</th>
              <th class="th-sm">Eliminar</th>
              <th class="th-sm">Acceder</th>
         </tr>

  </thead>

 <tbody>
 <?php 
     
      if ($numrows != 0)
      {
                       while ($numrows = mysqli_fetch_array($result_zonas))
                       {?>
                            <tr>
                                <?php
                                    $i = $numrows["cod_zona"];
                                ?>
                                <th scope="row"><?php echo $numrows["cod_zona"]; ?></th>                                   
                                <td><?php echo "$numrows[estado]";?></td>
                              
                                <td align= "center">
                                    <?php echo "<a href='?controller=ZonaEducativa&action=UpdateZonaEducativa&i=$i' title= 'Modificar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/update_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=ZonaEducativa&action=DeleteZonaEducativa&i=$i' title= 'Eliminar'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/delete_icon.png" alt=""> </a>
                                </td>
                                <td align= "center">
                                    <?php echo "<a href='?controller=ZonaEducativa&action=ListarZonaEducativa&i=$i' title= 'Acceder'>";?>  
                                    <img width="50px" height ="50px" src="../sistema_notas/images/access_icon.png" alt=""> </a>
                                </td>
                            </tr>
                  <?php }
      }
?>
</div>