<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$Id_test = $params;

 
$busquedaUsuario = "select nombre from test WHERE Id_test='$Id_test'";
$leerBdUsuario = $con->query($busquedaUsuario);

$encontrado = false;
$Usuario = [];
if ($leerBdUsuario) {
    while (($usuario = $leerBdUsuario->fetch_array(MYSQLI_NUM)) && $encontrado == false) {
        $Usuario = $usuario;
    }
}

$Usuariojson=json_encode($Usuario);
echo($Usuariojson);
header('Content-Type: application/json');



?>