
<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$Id_test = $params;

 
$contarRespuestas = "SELECT COUNT(R.Id_respuesta) FROM respuesta R ,pregunta P WHERE P.id_test='$Id_test' and R.Id_pregunta = P.Id_pregunta;";
$leerRespuestas = $con->query($contarRespuestas);

$encontrado = false;
$Respuestas = [];
if ($leerRespuestas) {
    while (($usuario = $leerRespuestas->fetch_array(MYSQLI_NUM)) && $encontrado == false) {
        $Respuestas = $usuario;
    }
}

$Usuariojson=json_encode($Respuestas);
echo($Usuariojson);
header('Content-Type: application/json');



?>