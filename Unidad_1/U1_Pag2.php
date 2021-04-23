<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad 1 - Pag 2</title>
    
   <link rel="stylesheet" href="../css/Styles_U1_Page2.css">
   <link rel="stylesheet" href="../css/C_ImagenesU1.css">
</head>

<body>
<div class="wrapper">

<div class="container-total-1">

    <div class="container">
        <div class="header">
            <ul>
                <li><h4 class="h4">CATERING AND COOKING</h4></li>
            </ul>
        </div>
        <div></div>
        <div class="header">
            <ul>
                <li><h4 class="h4-1">UNIT 1</h4></li>
            </ul>
        </div>
        <div class="header">
            <h4 class="h4">PAGE 2 TO 19</h4>
        </div>
        <div class="subheader">
            <img src="../Imagenes/ImagesUnit1/Banners/images_Talk.png" alt="">
        </div>
        <div  class="menu-1">
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

        <div class="contenido-1">
            <!-- <h1><span class="naranja">1</span></h1> -->
            <h3 class="h3">1.Talk individually about the catering questions below and then discuss with a partner.</h3>
            
            <div class="contenido-2">
                <img src="../Imagenes/ImagesUnit1\pag4\images_10.png" alt="">
                <div class="contenido-2-2">
                <input type="image" name="English" src="../botones/Interfaz/audio_but_reposo-2.png" alt="English" onclick="this.src='../botones/Interfaz/audio_but_press-1.png';" onmouseout="this.src='../botones/Interfaz/audio_but_reposo-2.png';" onclick="ocultar();">
                            <input type="image" name="Español" src="../botones/Interfaz/audio_but_press-3.png" alt="Español" onclick="this.src='../botones/Interfaz/audio_but_reposo-4.png';" onmouseout="this.src='../botones/Interfaz/audio_but_press-3.png';">
                </div>
            </div>
                <div><audio src="../Sonidos/Sonidos_U1/pagina 3 INTRODUCCION ESPAÑOL.mp3" preload="auto" controls></audio></div>
        </div>
        
        <div class="preguntas">
            <ol>
                <li>What’s catering?</li>
                <li>Mention 5 important aspects
                    when catering and describe
                    why they are important.</li>
                <li>Do you need any skills for
                    catering? Describe them.</li>
                <li>Does it divide into sectors?
                    Talk about them.</li>
                <li>What do you know about
                    the best catering company?</li>

            </ol>
        </div>
        <div class="Pag2-U1" ></div>
                
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
            <a href="U1_Pag1.php"><input type="image" name="before" src="../botones/Interfaz/before_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/before_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/before_but.png';" onclick="this.src='../botones/Interfaz/before_but_press.png';">
            <a href="U1_Pag3.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>
        </div>
    </div>

</div> 
</div>  

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>