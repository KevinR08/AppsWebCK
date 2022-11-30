<?php
$ck_nombre="";
$ck_clave="";
$preferencias=false;
//Verifico sólo cuando ya se hayan creado cookies, caso contrario se vacían los campos
if(isset($_COOKIE["ck_nombre"])&& isset($_COOKIE["ck_clave"])&& isset($_COOKIE["ck_guardar"])){
    $ck_nombre= $_COOKIE["ck_nombre"];
    $ck_clave= $_COOKIE["ck_clave"];
    echo "Datos de cookie --> NOMBRE: ". $_COOKIE["ck_nombre"]."  CLAVE: ".$_COOKIE["ck_clave"].
    "  PREFERENCIAS: ".$_COOKIE["ck_guardar"]."  IDIOMA: ".$_COOKIE["lang"]."<br>";
    $preferencias=true;
}
?>

<DOCTYPE html>
<html>
    <html>
        <head> 

        </head>
            <title>DEBER 1: KEVIN RIVADENEIRA </title>
        <body>  
            <h1> LOGIN </h1>
            <form method="POST" action="autenticacion.php">
                <fieldset>
                Usuario*: <br>
                <input type="text" name ="nombre" value="<?php echo $ck_nombre; ?>"/><br>
                Clave*: <br>
                <input type="password" name ="clave" value="<?php echo $ck_clave; ?>"/><br>
                <input type="checkbox" name = "chkpreferencias" <?php echo ($preferencias)?"checked":""; ?>> Recordar mis datos"<br>

                <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </body>
    </html>