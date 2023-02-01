

<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexion.php");
  $con=retornarConexion();

  $leerBD=mysqli_query($con,"select * from test");
  $Tests=[];  
  while ($test=mysqli_fetch_array($leerBD))  
  {
    $Tests[]=$test;
  }
  
  $UsuarioJson=json_encode($Tests);
  echo $UsuarioJson;
  header('Content-Type: application/json');
?>