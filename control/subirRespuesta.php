<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$Id_pregunta = $params->Id_pregunta;
$Id_respuesta = $params->Id_respuesta;
$texto = $params->texto;
$img = $params->img;
$tipo = $params->tipo;

 
if($img==""){
    mysqli_query($con,"INSERT INTO respuesta (texto, tipo, img ,Id_pregunta)
    VALUES ( '$texto', '$tipo',null ,'$Id_pregunta')");
}else{
    mysqli_query($con,"INSERT INTO respuesta (texto, tipo, img ,Id_pregunta)
    VALUES ( '$texto', '$tipo','$img' ,'$Id_pregunta')");
}

    







class Result {}

$response = new Result();
$response->resultado = 'OK';


header('Content-Type: application/json');
echo json_encode($response);   
?>