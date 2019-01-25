<?php
$texto_mail=$_POST["comentario"];
$destinatario=$_POST["email"];
$asunto=$_POST["asunto"];
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Carlos <cmolinabastidas@gmail.com >\r\n";
$exito=mail($destinatario,$asunto,$texto_mail,$header);
if($exito){
    echo("Mensaje enviado");
}else "Ha habido un error";

?>