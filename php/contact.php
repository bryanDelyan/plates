<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

// Información de la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_de_datos = 'plates';

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

// Preparar la consulta SQL para la inserción
$query = "INSERT INTO form (nombre, email, telefono, residencia) VALUES ('$name', '$email', '$phone', '$residence')";

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
        $mail->setFrom('no-responder@automarcol.com', 'DEV MAILER');
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        // include './plantilla_1.php';

        // Configuración del remitente y destinatario
        $mail->addAddress('isistemas@automarcol.com');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo registro';
        $mail->Body = "Se ha registrado un nuevo usuario:<br><br>
                        Nombre: $name<br>
                        Email: $email<br>
                        Teléfono: $phone<br>
                        Residencia: $residence";

        // Enviar el correo
        $mail->send();
        echo 'Correo enviado correctamente';
    } catch (Exception $e) {
        echo 'Error al enviar el correo: ', $mail->ErrorInfo;
    }
    
} else {
    echo "Error al insertar datos: " . $con->error;
}

// Cerrar la conexión
$con->close();

?>