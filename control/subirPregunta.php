<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$id_pregunta = $params->id_pregunta;
$texto = $params->texto;
$Img = $params->Img;
$ayuda = $params->ayuda;
$id_test = $params->id_test;
 

if($ayuda==""){
    mysqli_query($con,"insert into  pregunta (texto, Img, ayuda, id_test) 
    VALUES ( '$texto', '$Img', NULL, '$id_test')");
}else{
    mysqli_query($con,"insert into  pregunta (texto, Img, ayuda, id_test) 
    VALUES ( '$texto', '$Img', '$ayuda', '$id_test')");
}






class Result {}

$response = new Result();
$response->resultado = 'OK';


header('Content-Type: application/json');
echo json_encode($response);   
?>