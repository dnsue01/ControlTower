<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$texto = $params->texto;
$Id_pregunta = $params->Id_pregunta;

$busquedaTExto = "select * from respuesta where Id_pregunta ='$Id_pregunta'";
$leerBdRespuesta = $con->query($busquedaTExto);


$exite = false;
if ($leerBdRespuesta) {
    while (($respuesta = $leerBdRespuesta->fetch_array(MYSQLI_NUM)) && $exite == false) {
        if($respuesta[1]==$texto){
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