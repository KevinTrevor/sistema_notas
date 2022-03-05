<?php

if (isset($_SESSION['User']) == 1)
{   
    require_once(dirname(__FILE__).'/../../controllers/EstudianteController.php');
    /*$controller= new EstudianteController();
    $result_noticia= $controller->BuscarUltimaNoticia();
    $numrows = mysqli_num_rows($result_noticia)*/
?>

<div class="contaniner"> <!-- 1 -->

 <div class="page-content"><!-- 3 --> 
    <form action= "?controller=Estudiante&action=IngresarEstudiante1" method = "POST"> <!-- 3 -->
       <div class="col-12"> <!-- 5 -->
       <br>
			    	<h4> Ingresar de Estudiante</h4>
       <br>
       <div class="alert alert-success">
            <div class ="row"> <!-- 6 -->
              <div class="col-6">

                       <label for="busqueda" align="center" size="40" > <b>Cedula: </b> </label>   
                       <textarea class="form-control" maxlength = "200" placeholder = "ingrese aquí el título del artículo en español" id="exampleFormControlTextarea1" name = "titular" rows="4" required></textarea> 

                       <label for="busqueda" align="center" size="40" > <b>Nombres: </b> </label>   
                       <textarea class="form-control" maxlength = "200" placeholder = "ingrese aquí el título del artículo en español" id="exampleFormControlTextarea1" name = "titular" rows="4" required></textarea> 
                    

                		<label for="busqueda" align="center" size="40"> <b>Apellidos: </b> </label>    
                        <textarea class="form-control" maxlength = "200" placeholder = "ingrese aquí el título del artículo en español" id="exampleFormControlTextarea1" name = "titular" rows="4" required></textarea> 

                        <label for="busqueda" align="center" size="40"> <b>Nombre de usuario: </b> </label>    
                        <textarea class="form-control" maxlength = "200" placeholder = "ingrese aquí el título del artículo en español" id="exampleFormControlTextarea1" name = "titular" rows="4" required></textarea> 

                        <label for="busqueda" align="center" size="40"> <b>Clave: </b> </label>    
                        <textarea class="form-control" maxlength = "200" placeholder = "ingrese aquí el título del artículo en español" id="exampleFormControlTextarea1" name = "titular" rows="4" required></textarea> 

                      <label for="busqueda" align="center" size="40"> <b>Fecha de Ingreso: </b> </label> 
                      <p> <input type="date" name="fecha" size="40" step="1" min="2020-01-01" max="2030-12-31" value="<?php echo date("Y-m-d");?>"> </p>

                </div>

          </div>
               
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button> 

       </div> <!-- 5 -->
       </div>
    </form>  <!-- 3 -->
 </div> <!-- 4 -->

<p> <br> </p>

</div> <!-- 1 -->


<?php 
}
else {
   require_once(dirname(__FILE__).'/insert_estudiante.php');
}

?>