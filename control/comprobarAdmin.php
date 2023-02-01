<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$id = $params;


$busquedaUsuario = "select * from admin";
$leerBdUsuario = $con->query($busquedaUsuario);


$admin = false;
if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $admin == false) {
        if($usuario[0]==$id){
            $admin = true;
        }
    }
}


 
class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = $admin;

header('Content-Type: application/json');
echo json_encode($response);

?>