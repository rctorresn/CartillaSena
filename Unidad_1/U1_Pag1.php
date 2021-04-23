<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad 1 - Pag 1</title>
    
   <link rel="stylesheet" href="../css/Styles_U1_Page2.css">
   <link rel="stylesheet" href="../css/C_ImagenesU1.css">
</head>

<body>
    <div class="container-total-1">
            <div class="container">
                <div class="header">
                    <ul>
                        <li><h4 class="h4">CATERING AND COOKING</h4></li>
                    </ul>
                </div>
                <div class="header"></div>
                <div class="header">
                    <ul>
                    <li><h4 class="h4-1">UNIT 1</h4></li>
                    </ul>
                </div>
                <div class="header">
                    <h4 class="h4">PAGE 1 to 19</h4>
                </div>
                <div class="subheader">
                    <img src="../Imagenes/ImagesUnit1/Banners/images_Catering.png" alt="">
                </div>
                <div class="menu-1">
                    <select class="h3-menu" name="unidades">
                        <option selected="true" disabled="disabled">UNITS</option>
                        <option value="unit1" onselect="irUnidad1();">UNIT 1</option>
                        <option value="unit2" onselect="irUnidad2();">UNIT 2</option>
                        <option value="unit3" onselect="irUnidad3();">UNIT 3</option>
                        <option value="unit4" onselect="irUnidad4();">UNIT 4</option>
                        <option value="unit5" onselect="irUnidad5();">UNIT 5</option>
                        <option value="unit6" onselect="irUnidad6();">UNIT 6</option>
                    </select>
                </div>
                
            </div> 

            <div class="container-6">

                <div class="Pag1-U1"></div>
            
                <div class="contenido-4">
                    <h3 class="h3-Titulos">Introduction</h3>
                    <div>
                        <p class="p">The main aim of this module is to give
                            appropriate vocabulary to become familiar
                            with the pertaining terms surrounding catering
                            and cuisine. Besides, learners will have
                            the opportunity to express habits, some ways
                            to give pieces of advice, vocabulary about
                            certain jobs and styles of service.</p>
                        </div>
                        <div class="contenido-2">
                            <input type="image" name="English" src="../botones/Interfaz/audio_but_reposo-2.png" alt="English" onclick="this.src='../botones/Interfaz/audio_but_press-1.png';" onmouseout="this.src='../botones/Interfaz/audio_but_reposo-2.png';" onclick="ocultar();">
                            <input type="image" name="Español" src="../botones/Interfaz/audio_but_press-3.png" alt="Español" onclick="this.src='../botones/Interfaz/audio_but_reposo-4.png';" onmouseout="this.src='../botones/Interfaz/audio_but_press-3.png';">
                        </div><br>
                            <div><audio class="audioPlayer" src="../Sonidos/Sonidos_U1/pagina 1 TITULO.mp3" preload="auto" controls></audio></div>
                            <br><br>
                        </div>
                        
            </div>

            <div class="container-4">

                <div class="footerlogos"> 
                    <img src="../Imagenes\ImagesUnit1\Banners\images_Logos.png" alt="">
                </div>

                <div> </div>

                <div class="footermenu">
                    
                    <a href="../php/log.php"><input type="image" name="" src="../botones/Interfaz/home_but.png" alt="home" class="img-logos" onmouseover="this.src='../botones/Interfaz/home_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/home_but.png';" onclick="this.src='../botones/Interfaz/home_but_press.png';"></a>
                    <input type="image" name="score" src="../botones/Interfaz/score_but.png" alt="" class="img-logos"  onmouseover="this.src='../botones/Interfaz/score_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/score_but.png';" onclick="this.src='../botones/Interfaz/score_but_press.png';">
                    <input type="image" name="screen" src="../botones/Interfaz/screen_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/screen_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/screen_but.png';" onclick="this.src='../botones/Interfaz/screen_but_press.png';">
                    <a href="../php/log.php"><input type="image" name="before" src="../botones/Interfaz/before_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/before_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/before_but.png';" onclick="this.src='../botones/Interfaz/before_but_press.png';">
                    <a href="U1_Pag2.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>
                </div>
            </div>
        </div>
 


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>