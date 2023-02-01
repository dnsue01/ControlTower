<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');

  $params = json_decode($json);

  require("conexion.php");
  $con=retornarConexion();

  $id_pregunta = $params;


  $leerBD=mysqli_query($con,"select * from respuesta where Id_pregunta = $id_pregunta");
  $Respuestas=[];  
  while ($respuesta=mysqli_fetch_array($leerBD))  
  {
    $Respuestas[]=$respuesta;
  }
  

  $UsuarioJson=json_encode($Respuestas);
  echo $UsuarioJson;
  header('Content-Type: application/json');
?>