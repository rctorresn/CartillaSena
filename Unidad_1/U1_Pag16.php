<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad 1 - Pag 16</title>
    
   <link rel="stylesheet" href="../css/Styles_U1_Page2.css">
</head>

<body>
    
<div class="container-total">
    <div class="container">
        <div class="header">
            <h4 class="h4">Catering and Cooking</h4>
        </div>
        <div class="header">
            <h4 class="h4">UNIT 1</h4>
        </div>
        <div class="header">
            <h4 class="h4">Page 16 to 19</h4>
        </div>
        <div class="subheader">
            <img src="../Imagenes\ImagesUnit1\Banners\images_Write.png" alt="">
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

        <div class="contenido-1">
            <!-- <h1><span class="naranja">1</span></h1> -->
            <h3 class="h3">14. Suggesting a plan
                to a costumer.</h3>
            <p class="p1">Read the description below and
                suggest a catering plan for the
                costumer, make a list of the things
                you can suggest to Rhyta and
                write a short text about your
                advice to Rhyta.</p>
            
            <div class="contenido-2">
                <img src="../Imagenes\ImagesUnit1\pag22\image_11.png" alt="">
                <div class="contenido-2-2">
                <input type="image" name="English" src="../botones/Interfaz/audio_but_reposo-2.png" alt="English" onclick="this.src='../botones/Interfaz/audio_but_press-1.png';" onmouseout="this.src='../botones/Interfaz/audio_but_reposo-2.png';" onclick="ocultar();">
                            <input type="image" name="Español" src="../botones/Interfaz/audio_but_press-3.png" alt="Español" onclick="this.src='../botones/Interfaz/audio_but_reposo-4.png';" onmouseout="this.src='../botones/Interfaz/audio_but_press-3.png';">
                </div>
            </div>
                <div><audio src="_sonidos\_audios\pagina 3 INTRODUCCION.mp3" preload="auto" controls></audio></div>
        </div>
                      
        <div class="preguntas">
            <div>
                <br>
                <h3 class="h3">The company’s event</h3>
            </div>
            <div class="contenedor-texto">
            <p class="p1">Rhyta is a Public relations officer in a company in town. The company where she works fabricates house furniture. The company is celebrating its 20th anniversary and Rhyta is in charge of planning the event. She is asking on your catering firm for the menus and plans you have in offer. The company has 60 employees and all of them accepted to join the event on Saturday. Rhyta says the company is not so strict with the food, but they want really good drinks for the celebration. Rhyta also affirms that the event has to be held in the company’s workplace. </p>
            </div>    
        </div>

        <div class="imagen">
            <div class="contenido-2-2">
                <img src="../Imagenes\ImagesUnit1\pag22\image_03.png" alt="imagen2" class="imagen3">
                <p  class="p4">You can mention: budget,
                    timeframe, shows and
                    spectacles, type of service,
                    materials, ingredients, etc…</p>
            </div>
            
        </div>
                
    </div>

    <div class="container-4">

        <div class="footerlogos"> 
            <img src="../Imagenes\ImagesUnit1\Banners\images_Logos.png" alt="">
        </div>

        <div class="footerzoom">
                <div class="h32">Text</div>
                <input type="image" name="zoom+" src="../botones\Interfaz\Zoom1.png">
                <input type="image" name="zoom+" src="../botones\Interfaz\Zoom2.png">
        </div>

        <div class="footermenu">
        <a href="../php\log.php"><input type="image" name="" src="../botones/Interfaz/home_but.png" alt="home" class="img-logos" onmouseover="this.src='../botones/Interfaz/home_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/home_but.png';" onclick="this.src='../botones/Interfaz/home_but_press.png';"></a>
            <input type="image" name="score" src="../botones/Interfaz/score_but.png" alt="" class="img-logos"  onmouseover="this.src='../botones/Interfaz/score_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/score_but.png';" onclick="this.src='../botones/Interfaz/score_but_press.png';">
            <input type="image" name="screen" src="../botones/Interfaz/screen_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/screen_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/screen_but.png';" onclick="this.src='../botones/Interfaz/screen_but_press.png';">
            <a href="U1_Pag15.php"><input type="image" name="before" src="../botones/Interfaz/before_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/before_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/before_but.png';" onclick="this.src='../botones/Interfaz/before_but_press.png';">
            <a href="U1_Pag17.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>
        </div>
    </div>

</div> 


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>