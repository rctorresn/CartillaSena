<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Unidad 1 - Pag 3</title>
    
   <link rel="stylesheet" href="../css/Styles_U1_Page2.css">
   <link rel="stylesheet" href="../css/C_ImagenesU1.css">
</head>

<body>
    <div class="container-total">
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
                <h4 class="h4">PAGE 3 TO 19</h4>
            </div>
            <div class="subheader">
                <img src="../Imagenes\ImagesUnit1\Banners\images_Read.png" alt="">
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

            <div class="Pag3-U1" class="contenido-1">
                <!-- <h1><span class="naranja">1</span></h1> -->
                
            </div>
            
            <div class="preguntas">
                <div>
                <!-- <h1><span class="naranja">2</span></h1> -->
                <h3 class="h3-1">2. Catering</h3>
                    
                </div>
                <div class="contenedor-texto">
                <p class="p1">Catering is the provision of food and beverage and has two basic sectors: commercial businesses, that focuses on making a profit, and non-commercial businesses (welfare), whose focus is to provide a nonprofit-making social service. You can find commercial catering in venues like hotels, restaurants, pubs, bars, cafes or fast food outlets, and where you can eat in or take away the food and beverages you pay for. Commercial catering is as well in the transport industry in railway stations, airports or motorway service stations and on ships and trains; in these places you eat in a buffet car through self-service, and on planes, where the waiter service is given by the cabin crew. Catering at private events, like social events, wedding receptions, or public events including rock concerts or football matches is also considered commercial. Welfare catering varies from providing food for workers in a factory or office block canteens, to catering in hospitals, schools or prisons, where people pay nothing or a very small amount of money for the service.</p>
                </div>    
            </div>
            <div class="Pag3-U1-2" class="imagen">
                
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
                <a href="U1_Pag2.php"><input type="image" name="before" src="../botones/Interfaz/before_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/before_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/before_but.png';" onclick="this.src='../botones/Interfaz/before_but_press.png';">
                <a href="U1_Pag4.php"><input type="image" name="next" src="../botones/Interfaz/next_but.png" alt="" class="img-logos" onmouseover="this.src='../botones/Interfaz/next_but_sobre.png';" onmouseout="this.src='../botones/Interfaz/next_but.png';" onclick="this.src='../botones/Interfaz/next_but_press.png';"></a>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>