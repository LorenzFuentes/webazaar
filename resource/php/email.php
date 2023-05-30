<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function email(){
    if (isset($_POST['email-send'])) {
        if (!empty($_POST['email'])) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'webazaar123@gmail.com';
            $mail->Password = 'igsklbaryobqdmaz';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('webazaar123@gmail.com');
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            $mail->Subject = "Auto Response";
            $mail->Body = "Hello, This is an auto generated response. We will respond to your concern/message as soon as possible";

            $mail->send();
        }else{
            echo "<h3>The message cannot be sent</h3>";
        };
    };
};
?>