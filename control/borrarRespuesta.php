

<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$id_pregunta = $params->Id_pregunta;
$Id_respuesta = $params->Id_respuesta;


mysqli_query($con,"DELETE FROM respuesta WHERE Id_pregunta= '$id_pregunta' and Id_respuesta ='$Id_respuesta'");


class Result {}

$response = new Result();
$response->resultado = $id_pregunta;


header('Content-Type: application/json');
echo json_encode($response);   
?>