<?php
$email_to = "info@diegochiapa.com.ar";
$email_subject = "Contacto desde el sitio web";
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
$headers = 'From: ' . $email_to . "\r\n" . 'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
echo '<script type="text/javascript">
		    	alert("Gracias por su consulta, nos comunicaremos a la brevedad");
		    	window.location.href="index.html";
		      </script>';
