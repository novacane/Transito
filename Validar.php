<?php

$user = $_POST["txtUser"];
$pass = $_POST["txtPass"];

include './Clases/Cl_Conexion.php';
include './dao/DaoUsuario.php';

$cone = new Cl_Conexion();
$dao = new DaoUsuario($cone);

$resp = $dao->validar($user, $pass);

if ($resp > 0) {
    echo 1;
} else {
    echo 0;
}


    