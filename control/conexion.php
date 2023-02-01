<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","control");
  return $con;
}
?>