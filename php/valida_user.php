<?php

    $usuario=$_POST["username"];
    $password=$_POST["password"];

   $fp=fopen("usuarios.txt","r");
    //variante de lectura de archivo por pocisiones
    $loop=0;
    while(!feof($fp)){
    $loop++;

    $line = fgets($fp);
    $field[$loop] = explode('|',$line);
          
        
    $nomusu = $field[$loop][2];
    $nompass = $field[$loop][3];
    
       $fp++;
       if($usuario==$nomusu && $password==$nompass){
        
        session_start();
        $_SESSION['usuario']="$usuario";
        header("Location: pagina1.php");
    }else{
        echo "<h2>Usuario o password incorrectos</h2>";
        
    }
   
    }
    fclose($fp);
 
?>