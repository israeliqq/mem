<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title> 
</head>

<body>
<?php
//Recibir parametros del formulario mediante el metodo post


$Nombre  = $_POST['nombre'];
$Telefono= $_POST['telefono'];
$Email   = $_POST['correo'];
$Asunto  = $_POST['asunto'];
$Destino = 'contacto@mem.cl';


$Mensaje = 'TELEFONO: '.$Telefono.' || ';
$Mensaje .= 'ASUNTO: '.$Asunto.' || ';
$Mensaje .= 'EMAIL: '.$Email.' || ';
$Mensaje .= 'MENSAJE: '.$_POST['mensaje'];


$bool = mail(utf8_decode($destino),utf8_decode($Asunto),utf8_decode($Mensaje),utf8_decode($Correo));


$bool = mail("israeliqq@live.cl",$Asunto,$Mensaje,$headers);
if($bool){
    header('Location: exitomail.php');
}else{
    header('Location: failmail.php');
}



?>
</body>
</html>