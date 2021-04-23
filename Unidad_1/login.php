<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caterin and Cooking - Inicio de sesion</title>

    <!--estilos CSS-->
    <link href="_css/styles.css" rel="stylesheet" media="screen">
    <link href="_css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>
    <div id="login">
        <div class="container">            
            <div id="login-row" class="row justify-content-center align-items-center">            
                <div id="login-column" class="col-md-6">
                    <center>


                      
                            <img id="img-index" src="_ImagenesPages/index.png" class="row justify-content-center align-items-center">
                       
                       <!-- <div id="img-content">
                            <img id="img-login" src="_ImagenesPages/index.png" class="img-fluid" alt="Header Image" >
                        </div>-->
                    </center>
                    <div id="login-box" class="col-md-12">                        
                        <form id="login-form" class="form" action="valida-user.php" method="post">
                            <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">  
                                <span id="error-user"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <span id="error-pass"></span>
                            </div>
                            <div class="form-group">
                                <button type="button" name="login" class="btn btn-info btn-md" id="btn-login">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
</body>
</html>