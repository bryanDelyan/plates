<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

// Información de la base de datos
$host = 'sql529.main-hosting.eu';
$usuario = 'u785679053_plates';
$contrasena = 'Automarcol+2023*';
$base_de_datos = 'u785679053_plates';

// Conectar a la base de datos
$con = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}

// Recibir datos del formulario
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$phone = $_POST['inputPhone'];
$residence = $_POST['inputResidence'];
$mensagge = $_POST['inputMessage'];

// Preparar la consulta SQL para la inserción
$query = "INSERT INTO form (nombre, email, telefono, residencia, mensagge) VALUES ('$name', '$email', '$phone', '$residence', '$mensagge')";

// Ejecutar la consulta
if ($con->query($query) === TRUE) {
    echo "Datos insertados correctamente.";
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = true;
        $mail->Username = 'no-responder@automarcol.com';
        $mail->Password = 'hbkqrkntshuzgkcu';
        $mail->setFrom('no-responder@automarcol.com', 'Contact Form');
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        // include './plantilla_1.php';

        // Configuración del remitente y destinatario
        $mail->addAddress('serviplatexpress@gmail.com');
        // Contenido del correo
         include './mails/plantilla.php';
         
        $mail->isHTML(true);
        $mail->Subject = '✍️ Nuevo registro';
        $mail->Body = $mensaje;

        // Enviar el correo
        $mail->send();
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ', $mail->ErrorInfo;
    }
    
}else{
    echo 'error';
}

// Cerrar la conexión
$con->close();

?>