<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/library/PHPMailer/PHPMailer/Exception.php';
require '../assets/library/PHPMailer/PHPMailer/PHPMailer.php';
require '../assets/library/PHPMailer/PHPMailer/SMTP.php';

    
    $nombre= $_POST["nombre"];
    $email= $_POST["email"];
    $asunto= $_POST["asunto"];
    $mensaje= $_POST["mensaje"];

    $cuerpo = "Nombre: ". $nombre . "<br>Email: " . $email . "<br>Mensaje: " . $mensaje;


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com;smtp.live.com;smtp.office365.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply.54123@gmail.com';                     // SMTP username
    $mail->Password   = 'madenew147';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, "MADECOR_SUR"); //Este variara dependiendo del que lo envia
    $mail->addAddress('sodita190@gmail.com');     // Add a recipient al correo del que recibira los emails dtorresmurga@gmail.com
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('20160520_214233.jpg');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   // echo 'Mensaje enviado correctamente';
    header("Location: ../views/contacto");
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}