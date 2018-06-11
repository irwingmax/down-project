<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$requestFrom = isset($_POST['email']) ? $_POST['email'] : '';
$requestUser = isset($_POST['name']) ? $_POST['name'] : '';
$requestMsg = isset($_POST['comments']) ? $_POST['comments'] : '';
try{
	// $mail->SMTPDebug = 2;
	// ail->SMTPAuth = true;                               // Enable SMTP authentication
 //    $mail->Username = 'user@example.com';                 // SMTP username
 //    $mail->Password = 'secret';                           // SMTP password
 //    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
 //    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($requestFrom, $requestUser);
    $mail->addAddress('irwing.1911@gmail.com', 'Irwing Max');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Menssagem do site ';
    $mail->Body    = $requestMsg;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
}catch (Exception $e){
	echo "Mensagem nao enviada pq", $mail->ErrorInfo;
}