<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../sistema_notas/css/bootstrap.css">
    <title>Sistema de Notas</title>
</head>

<body>
    <header>

    <?php
            // carga el subMenu
            require_once(dirname(__FILE__).'/../admon/submenu.php');	
        ?>
    </header>
    <section>	
        <div class="container">
        <?php
            // carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
            require_once(dirname(__FILE__).'/../admon/routing.php');	
        ?>
        </div>
    </section>

    <footer>
	<?php 
		require_once(dirname(__FILE__).'/footer.php');
	?>
    </footer>
</body>
</html>