<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$id_pregunta = $params->Id_pregunta;
$texto = $params->texto;
$Img = $params->Img;
$ayuda = $params->ayuda;
$id_test = $params->id_test;



mysqli_query($con,"update pregunta SET Id_pregunta='$id_pregunta',texto='$texto',Img='$Img',ayuda='$ayuda',id_test='$id_test' WHERE id_test='$id_test' and Id_pregunta='$id_pregunta'");




class Result {}

$response = new Result();
$response->resultado = 'OK';


header('Content-Type: application/json');
echo json_encode($response);   
?>