<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$nombre = $params->nombre;



$busquedaUsuario = "select * from usuario";
$leerBdUsuario = $con->query($busquedaUsuario);

$encontrado = false;
$proteccion = "";
if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $encontrado == false) {
      
        if ($nombre == $usuario[1]) {
            $encontrado = true;
            $id = $usuario[0];
            $proteccion = $usuario[4];
        }



    }
}




class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = "$proteccion";
$response->id = "$id";

header('Content-Type: application/json');
echo json_encode($response);   


?>