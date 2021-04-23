<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad 1 - Pag 17</title>
    
   <link rel="stylesheet" href="../css/Styles_U1_Page2.css">
   <link rel="stylesheet" href="../css/C_ImagenesU1.css">
</head>

<body>

<div class="container-total-1">
    <div class="container">
        <div class="header">
            <h4 class="h4">CATERING AND COOKING</h4>
        </div>
        <div class="header">
            <h4 class="h4">UNIT 1</h4>
        </div>
        <DIV></DIV>
        <div class="header">
            <h4 class="h4">PAGE 17 TO 19</h4>
        </div>
        <div class="subheader">
            <img src="../Imagenes\ImagesUnit1\Banners\images_Talk.png" alt="">
        </div>
        <div class="menu-1">
            <select class="h3-menu" name="unidades">
            <option selected="true" disabled="disabled">UNITS</option>
                <option value="unit1" onselect="irUnidad1();">Unit 1</option>
                <option value="unit2" onselect="irUnidad2();">Unit 2</option>
                <option value="unit3" onselect="irUnidad3();">Unit 3</option>
                <option value="unit4" onselect="irUnidad4();">Unit 4</option>
                <option value="unit5" onselect="irUnidad5();">Unit 5</option>
                <option value="unit6" onselect="irUnidad6();">Unit 6</option>
            </select>
        </div>
        
    </div> 

    <div class="container-2">

        <div class="contenido-2-2">
            <!-- <h1><span class="naranja">1</span></h1> -->
            <h3 class="h3">15. What do these types of service refer to?</h3> <br>
            
            <div class="contenido-2">
                <img src="../Imagenes\ImagesUnit1\pag23\images_12.png" class="imagen3" alt="">
                <div class="contenido-2-2">
                     <input type="image" name="English" src="../botones/Interfaz/audio_but_reposo-2.png" alt="English" onclick="this.src='../botones/Interfaz/audio_but_press-1.png';" onmouseout="this.src='../botones/Interfaz/audio_but_reposo-2.png';" onclick="ocultar();">
                     <input type="image" name="Español" src="../botones/Interfaz/audio_but_press-3.png" alt="Español" onclick="this.src='../botones/Interfaz/audio_but_reposo-4.png';" onmouseout="this.src='../botones/Interfaz/audio_but_press-3.png';">
                </div>
            </div>
                <div><audio src="../Sonidos/Sonidos_U1/pagina 20 para video AUDIO 4 LANGUAGUE TIPS 2.mp3" preload="auto" controls></audio></div>
        </div>
        
        <div class="preguntas">
            <ol>
                <li>Silver Service/Platter to Plate/
                    English Service</li>
                <li>Pre-Plated Service/American
                    Service</li>
                <li>Family Service/French Service</li>
                <li>Buffet Service</li>
                <li>Gueridon Service</li>
                <li>Russian Service</li>

            </ol>
         </div>
         <div class="imagen">
            <div class="Pag17-U1"></div>
        </div>
            
        
                
    </div>

    <div class="container-4">

        <div class="footerlogos"> 
            <img src="../Imagenes\ImagesUnit1\Banners\images_Logos.png" alt="">
        </div>
        <div></div>
        <div class="footermenu">
        <a href="../php\log.php"><input type="image" name="" src="../botones/Interfaz/home_but.png" alt="home" class="img-logos" onmouseover="this.src='../botones/Interfaz/home_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/home_but.png';" onclick="this.src='../botones/Interfaz/home_but_press.png';"></a>
            <input type="image" name="score" src="../botones/Interfaz/score_but.png" alt="" class="img-logos"  onmouseover="this.src='../botones/Interfaz/score_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/score_but.png';" onclick="this.src='../botones/Interfaz/score_but_press.png';">
            <input type="image" name="screen" src="../botones/Interfaz/screen_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/screen_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/screen_but.png';" onclick="this.src='../botones/Interfaz/screen_but_press.png';">
            <a href="U1_Pag16.php"><input type="image" name="before" src="../botones/Interfaz/before_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/before_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/before_but.png';" onclick="this.src='../botones/Interfaz/before_but_press.png';">
            <a href="U1_Pag18.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>
        </div>
    </div>

 
</div>  

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>