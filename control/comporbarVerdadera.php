<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexion.php");
  $con=retornarConexion();
  $json = file_get_contents('php://input');
  $params = json_decode($json);

  $Id_pregunta = $params->Id_pregunta;

  $registros=mysqli_query($con,"SELECT COUNT(tipo) FROM respuesta WHERE Id_pregunta ='$Id_pregunta' and tipo ='1';");
    
  if ($reg=mysqli_fetch_array($registros))  
  {
    $vec[]=$reg;
  }
  
  $cad=json_encode($vec);
  echo $cad;
  header('Content-Type: application/json');
?>