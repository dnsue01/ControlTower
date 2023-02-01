<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();


$correo = $params->correo;
$nombre = $params->nombre;

$busquedaUsuario = "select * from usuario";
$leerBdUsuario = $con->query($busquedaUsuario);

$valido = false;


if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $valido == false) {
      
        if ($nombre == $usuario[1] || $correo == $usuario[2]) {
            $valido = true;
        }



    }
}


echo($valido);


?>