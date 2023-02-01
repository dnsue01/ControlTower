<?php 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con=retornarConexion();

//encriptar la contraseña
$encrip = md5("Control!*".$params->contrasenna);

//parametros parseados
$nombre= $params->nombre;
$correo = $params->correo;
$Proteccion = uniqid();


//consulta
mysqli_query($con,"insert into usuario(Nombre,Correo, Contrasenna, Proteccion) values
                ('$nombre','$correo','$encrip','$Proteccion')");


 //recoger el id del usuario
 $consulta = "select Id_usuario from usuario where nombre ='$nombre'";
 $idUsuario = $con->query($consulta);
if ($idUsuario) {
    while (($id = $idUsuario->fetch_array(MYSQLI_NUM)) ) {
        $ID=$id[0];
   
    }
}


//insertar en la estandar
mysqli_query($con,"insert into estandar(id_estandar) values ('$ID')");


class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = 'datos grabados';

header('Content-Type: application/json');
echo json_encode($response);   
?>