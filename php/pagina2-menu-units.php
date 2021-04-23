<?php
	 session_start();
     if($ses=$_SESSION['usuario']){
         echo "Usuario: $ses ";
 
     }else{
 
         session_destroy();
         header("Location: ingreso.php");
         
     }
	
?>
    

	


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caterin and Cooking - Menu Units</title>

    <!--estilos CSS-->
    
</head>
<body>
<h2>PAGINA 2 - MENU UNIDADES</h2>
<a href="pagina1.php">Home</a>
<a href="unit1.php">Siguiente</a>
<a href="cerrarsesion.php">Cerrar sesion</a>
</body>
</html>