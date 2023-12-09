<?php

$usuario = $_GET['user'];
$pass = $_GET['password'];

function login($usuario, $pass){
    if($usuario == "admin_gegn" && $pass == "es1821020544"){
        header("Location: ../ProjectoCine/admin-pages/GEGNadmin_home.html"); 
        exit();
    }elseif ($usuario == "mostrador_gegn" && $pass == "es1821020544") {
        header("Location: ../ProjectoCine/user-pages/GEGNuser_home.html");
        exit();
    }
    else{
        header("Location: ../ProjectoCine/GEGNwrngdata.html");
        return false;
    }
}

login($usuario, $pass);

?>