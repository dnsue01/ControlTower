<?php
   
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT, GET, POST");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

   //ruta donde estan las fotos
    $ruta = "fotos/";

    
    $archivo_temp = $_FILES['file']['tmp_name'];
	//separo las palabras para comprobar la extensio
	$explode = (explode('.',$_FILES['file']['name']));
    //separo el archivo por la extension
    $extension = strtolower(end($explode));
    $extensionPerrmitida = array("png","jpg","raw","jpeg");

    if(in_array($extension,$extensionPerrmitida)){
        $esta = true;
	    $id = uniqid();
        $nombreCompleto =  $id . '.'.$extension;
        $file = $ruta . $id . '.'.$extension;
         move_uploaded_file($archivo_temp, $file);
    }else{
        $esta = false;
    }

 
    
class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = $esta;
if($esta){
$response->id = $id;
$response->extension = $extension;
$response->nombreCompleto = $nombreCompleto;
}

header('Content-Type: application/json');
echo json_encode($response);  
?>