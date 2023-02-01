<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$Id_respuesta = $params->Id_respuesta;
$texto =  $params->texto;
mysqli_query($con,"UPDATE respuesta SET texto ='$texto' WHERE Id_respuesta ='$Id_respuesta'");




 
class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->texto = $texto;

header('Content-Type: application/json');
echo json_encode($response);

?>