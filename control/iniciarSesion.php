<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$nombre = $params->nombre;
$contrasenna = md5("Control!*".$params->contrasenna);



$busquedaUsuario = "select * from usuario";
$leerBdUsuario = $con->query($busquedaUsuario);

$encontrado = false;

if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $encontrado == false) {
        if ($nombre == $usuario[1]) {

            if($contrasenna==$usuario[3]){
                $encontrado=true;
            }
        }



    }
}


echo($encontrado);


?>