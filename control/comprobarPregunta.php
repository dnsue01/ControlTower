<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$texto = $params;


$busquedaUsuario = "select * from pregunta";
$leerBdUsuario = $con->query($busquedaUsuario);


$exite = false;
if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $exite == false) {
        if($usuario[1]==$texto){
            $exite = true;
        }
    }
}


 
class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje =$exite;

header('Content-Type: application/json');
echo json_encode($response);

?>