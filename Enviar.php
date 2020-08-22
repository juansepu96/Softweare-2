<?php

$datos=$_POST['valorBusqueda'];
$datos=json_decode($datos,true);
/*Envio de email y adjunto el PDF creado*/
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer();
try{
	//Server settings
   //Server settings
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Debugoutput = 'html';
   $mail->SMTPAuth = true;
   $mail->SMTPSecure = 'ssl';
   $mail->Host = 'c1650705.ferozo.com';
   $mail->Port = 465;
   $mail->isHTML();
   $mail->Username = 'reporter@softweare.com.ar';
   $mail->Password = 'Ah000240';
//Destinatarios
$mail->setFrom($datos[1], $datos[0]);
    $mail->addAddress('juan@softweare.com.ar');               // Name is optional
    $mail->Name = $datos[0];
    $mail->Subject = $datos[2];
    $mail->Body = $datos[3];
    $mail->Send();
    $rta= "OK";
}catch (Exception $e) {
    $rta= "NO";
}


?>