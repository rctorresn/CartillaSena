


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Styles_U1_Page2.css" rel="stylesheet" media="screen">
    
    <title>Caterin and Cooking - pagina 1</title>

    <!--estilos CSS-->
    
</head>
<body>
    <div class="container-total-1">
        <div class="container-index">
                <div class="container-index-2">
                    <div class="usuario">
                        <h4 class="h4-1">
                            <?php
                                session_start();
                                if($ses=$_SESSION['usuario']){
                                    echo "Usuario: $ses ";

                                }else{

                                    session_destroy();
                                    header("Location: ingreso.php");
                                    
                                }
                            ?>
                        </h4>
                        
                    </div>
                

                        <div class="csesion">
                            <a href="cerrarsesion.php">Cerrar sesion</a>
                        </div>
                    </div>
        </div>  

        <div class="container-2-4">
        <div></div>
        <div class="container-2">
            <div></div>
            <div class="preguntas">
            <img src="../Imagenes/ImagesUnit1/Banners\index2.png" class="imagen5" alt="">
            </div>
        </div>
        </div>       
                    
                    
        <div class="container-3">
            <div class="footer-menu-2">
                <!-- <input type="submit" name="siguiente" value="siguiente" class="botones" href="pagina2-menu-units.php"> -->
                <input type="image" name="home" src="../botones/Interfaz/home_but.png" alt="home" class="img-logos" onmouseover="this.src='../botones/Interfaz/home_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/home_but.png';" onclick="this.src='../botones/Interfaz/home_but_press.png';">
                <a href="log.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>       
            </div>
        </div>
                
    </div>   
</body>
</html>
