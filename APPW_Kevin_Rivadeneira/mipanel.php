<?php
session_start();
$idioma = "es";

//var_dump($_POST);  // traigo de index

//Si no se logea se regresa al index
if(!isset($_SESSION["s_nombre"]) && !isset($_SESSION["s_clave"])){
    header("Location: index.php");
}

//Control del idioma
if(isset($_GET['lang'])){
    setcookie("lang", $_GET['lang'], time()+(60*60*24));    
    $idioma=$_GET['lang'];
    //Si ya tengo la cookie cargada previamente
}else if(isset($_COOKIE['lang'])){
        $idioma = $_COOKIE['lang'];
}

?>

<DOCTYPE html>
<html>
    <head></head>
        <body>
            <h1>PANEL PRINCIPAL</h1>
            <h2>Bienvenido Usuario: <?php  echo  $_SESSION["s_nombre"]; ?></h2>
            <hr>
            <a href="mipanel.php?lang=es"> ES(Español) </a> <a href="mipanel.php?lang=en"> EN(English)</a>
            <br>
            <br>
            <a href="cerrarsesion.php"> Cerrar sesión </a>
            <br>
            <br>
            
            <?php   
                $arch_nombre="";
                if($idioma=="en"){
                    echo "<h2>Product List</h2>";
                    $arch_nombre="categorias_en.txt";
                } else{
                    echo "<h2>Lista de Productos</h2>";
                    $arch_nombre="categorias_es.txt";
                }

                $archivo = fopen($arch_nombre,"r"); //Solo permiso de lectura
                while(!feof($archivo)){ //Mientras no se llegue al fin de archivo
                    $registros = fgets($archivo); //Cargar línea a una variable
                    echo $registros . "<br>"; //Imprimir línea más salto
                }
                fclose($archivo);
            ?>
    </body>
<html>