<?php
   require_once('controllers/ZonaEducativaController.php');
   $controller= new ZonaEducativaController();
   $result_zonas= $controller->ListarZonaEducativa1();
   $numrows = mysqli_num_rows($result_zonas);
?>

<div class = "bg-light border p-2">
    <div>
        <button class="btn btn-lg btn-success float-end me-4">Agregar</button>
    </div>

    <div>
        <h1 class = "text-center">Listado de Zonas</h1>
    </div>
</div>

    <div class = "bg-dark text-light mt-5 mx-3 p-3 rounded border ">
        <span class = "border-end border-light ps-3 pe-2">Cod</span>
        <span class = "ps-3">Estado<span>
    </div>

<div class = "shadow-sm">
<?php
    while ($numrows = mysqli_fetch_array($result_zonas)){
        ?>
        <div class = "mx-3 p-3 rounded border ">
            <span class = "display-6 border-end border-secondary px-3"><?php echo $numrows["cod_zona"]; ?></span>
            <span class = "display-6 px-3"><?php echo $numrows["estado"]; ?></span>
            <button class = "btn btn-lg btn-info mb-3 float-end">Acceder</button>
            <button class="btn btn-lg btn-danger float-end mx-2">Eliminar</button>
            <button class="btn btn-lg btn-warning float-end mx-2">Modificar</button>
            <button class="btn btn-lg btn-primary float-end mx-2">Planteles</button>
        </div>

    <?php
    }?>
</div>