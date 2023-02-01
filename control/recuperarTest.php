<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

$idTest = $params;

 
$busquedaTest = "select * from test WHERE Id_test='$idTest'";
$leerBdTest = $con->query($busquedaTest);

$encontrado = false;
$TestBd = [];
if ($leerBdTest) {
    while (($Test = $leerBdTest->fetch_array(MYSQLI_NUM)) && $encontrado == false) {
        $TestBd = $Test;
    }
}

$Testjson=json_encode($TestBd);
echo($Testjson);
header('Content-Type: application/json');



?>