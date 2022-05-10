<?php
function conectar(){
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "productos";

    $con=mysqli_connect($host,$user,$clave);
    
    mysqli_select_db($con,$bd);
    
    return $con;
}
?>
