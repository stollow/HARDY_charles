<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl0.ovh.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contact@slickteam.fr';             // SMTP username
    $mail->Password = 'Slick2017contact';                 // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST["email"], 'Site Web Slickteam');
    $mail->addAddress('contact@slickteam.fr');               // Name is optional
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["obj"];
    $mail->Body=''. $_POST["messages"] .'<br>'. $_POST["firstName"].' '. $_POST["name"] .'<br>'. $_POST["tel"].'';
    $mail->AltBody =''. $_POST["messages"] .'<br>'. $_POST["firstName"].''. $_POST["name"] .'<br>'. $_POST["tel"].'';

    $mail->send();
    echo 'Message has been sent';
    header('Location: ../index.php');