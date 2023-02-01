  


<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');

  $params = json_decode($json);

  require("conexion.php");
  $con=retornarConexion();

  $id_test = $params;


  $leerBD=mysqli_query($con,"select * from pregunta where id_test = $id_test");
  $PReguntas=[];  
  while ($pregunta=mysqli_fetch_array($leerBD))  
  {
    $PReguntas[]=$pregunta;
  }
  
  $UsuarioJson=json_encode($PReguntas);
  echo $UsuarioJson;
  header('Content-Type: application/json');
?>