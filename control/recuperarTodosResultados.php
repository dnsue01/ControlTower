<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');

  $params = json_decode($json);

  require("conexion.php");
  $con=retornarConexion();

  $idTest = $params->idTest;
  $proteccion = $params->proteccion;

  $leerBD=mysqli_query($con,"select * from estandarytest where Id_test= '$idTest' and proteccion='$proteccion'");
  $RespuestasTotales=[];  
  while ($respuesta=mysqli_fetch_array($leerBD))  
  {
    $RespuestasTotales[]=$respuesta;
  }
  

  $UsuarioJson=json_encode($RespuestasTotales);
  echo $UsuarioJson;
  header('Content-Type: application/json');
?>