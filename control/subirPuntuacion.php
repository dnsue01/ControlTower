<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$Id_test = $params->Id_test;
$proteccion = $params->proteccion;
$resultado = $params->resultado;



mysqli_query($con,"insert into estandarytest (Id_test, proteccion, puntuacion)
 VALUES ('$Id_test', '$proteccion', '$resultado')");




class Result {}

$response = new Result();
$response->resultado = 'OK';


header('Content-Type: application/json');
echo json_encode($response);   
?>