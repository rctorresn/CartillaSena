<?php
	//
    session_start();
    if($ses=$_SESSION['username']){
        echo "Usuario: $ses ";

    }else{

        session_destroy();
        header("Location: ingreso.php");
        
    }
	
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UNIT 1 - Test 1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="estilos.css" >
        

        <script >
            //respuestas cuestionario No 1 - pagina 4 - archivo cuestionario1.txt
            var p1_res1="texto";
            var p2_res2="texto";
            var p3_res3="texto";
            var p4_res4="texto";
            var p5_res5="texto";
            var p6_res6="texto";
            var p7_res7="texto";
            var p8_res8="texto";
            var p9_res9="texto";
            var p10_res10="texto";
            var p11_res11="texto";
            var p12_res12="texto";
            
        </script>
    </head>
    <body>

        <div id="contenedor_principal">

        <a href="cerrarsesion.php">Cerrar sesion</a>
          

            <div id="contenedor_sec">
                <div id="contenedor_izq">
                    <div id="izq_sup">
                        titulo
                    </div>
                    <div id="izq_med">
                       <button>Review</button>
                       
                        
                    </div>
                    <div id="izq_foot">
                        intentos
                    </div>
                </div>

                <div id="contenedor_der">
                    Preguntas
                    <form action="revCuestionario.php" method="post"></form>
                    <table border="1">
                        <tr>
                            <td><input type=tez</td>
                            <td>TYPES OF VENUES</td>
                            <td>TYPES OF SERVICE</td>
                        </tr>
                        <tr>
                            <td rowspan="7">Commercial catering</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>


                        </tr>
                        <tr>
                            <td>2</td>


                        </tr>
                        <tr>
                            <td>2</td>


                        </tr>
                        <tr>
                            <td>2</td>


                        </tr>
                        <tr>
                            <td>2</td>


                        </tr>
                        <tr>
                            <td >Commercial catering</td>
                            <td><input type="text" name="pregunta3" id="pregunta3" placeholder="3"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pregunta1" id="pregunta1" placeholder="1"></td>
                            <td><input type="text" name="pregunta1" id="pregunta1" placeholder="4"></td>
                        </tr>

                        <tr>
                            
                            <td><input type="text" name="pregunta2" id="pregunta2" placeholder="2" ></td>
                            <td><input type="text" name="pregunta5" id="pregunta5" placeholder="5"></td>
                            <tr><td>1</td>
                            </tr>

                            </tr>
                        
                        </tr>
                        


                    </table>
                    
                    
              
                    </form>
                </div>

            </div>

            

        </div>
        <!--RevCuestionario envia los datos via POST-->
        
           
              
                 <tr><td><input type="text" name="pregunta1" id="pregunta1" placeholder="1"></td></tr>
                <tr><td><input type="text" name="pregunta2" id="pregunta2" placeholder="2" ></td></tr>
                 <!-- <tr><td><input type="submit" value="Revisar"></td></tr>  -->      
          
        
    </body>
</html>