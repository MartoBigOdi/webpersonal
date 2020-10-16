<?php
/*
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'martin.vasconcelo@gmail.com';
$asunto = 'Mensaje de potencial cliente MV Marketing ';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

*/

if($_POST){ //SI EXISTEN DATOS POST
$destino = "martin.vasconcelo@gmail.com";
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$contenido = "Nombre: " . $name . "\nMail: " . $mail . "\nCelular de Contacto: " . $phone . "\nMensaje: " . $message;
 
$envio = mail($destino, "Email de un potencial cliente", $contenido);
if($envio){ //Si se logra hacer el envio
header("Location:#home");
exit();
}else{
echo "hubo problemas con el envio";
exit();
}
}else{
echo "no hay datos que procesar";
exit();
}



/*
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['telephone'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$asunto = $_POST['asunto'];
$message = $_POST['message'];
$formcontent=" De: $name \n Telefono: $phone \n Website: $website \n Prioridad: $priority \n Asunto: $asunto \n Mensaje: $message";
$recipient = "info@tudominio.com";
$subject = "Nuevo contacto de Sitio web";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Gracias" . " " . "<meta http-equiv='refresh' content='3;URL=http://www.efren-martinez.me' />
<link rel='stylesheet' type='text/css' href='style.css' />
<!-- incluimos nuestro mensaje de agradecimiento -->
<body>
<h2>Me comunicare con usted lo antes posible. ahora sera redireccionado a la pagina principal. Muchas Gracias.</h2>
</body>";
*/

?>