<?php
session_start();
//Registro los datos recibidos a la sesión
if(isset($_POST["nombre"])&& isset($_POST["clave"])){
    //Creo sesión con datos traídos con POST
    $_SESSION['s_nombre'] = $_POST["nombre"];
    $_SESSION['s_clave'] = $_POST["clave"];
    //Verifico caso positivo de guardar cookies
    if(isset($_POST["chkpreferencias"])){
            setcookie("ck_nombre", $_POST["nombre"], 0);
            setcookie("ck_clave", $_POST["clave"], 0);
            setcookie("ck_guardar", $_POST["chkpreferencias"], 0);
    //Verifico caso negativo de guardar cookies
    }else if(!isset($_POST["chkpreferencias"])){
            //Vaciamos el valor de la cookie
            setcookie("ck_nombre", "", 0);
            setcookie("ck_clave", "", 0);
            setcookie("ck_guardar","",0);
            setcookie("lang","",0);
        }
        //Si existe sesión
    header("Location:mipanel.php");
}else{
    //Si no existe sesión
    header("Location:index.php");
}

?>