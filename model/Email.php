<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/12/2018
 * Time: 11:21 PM
 */

include "../PHPMailer/src/PHPMailer.php";
class Email
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth();
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'duleepalwis@gmail.com';
    $mail->Password = 'duleep2alwis';
    $mail->SetForm('no-reply@sanrooka.org');

    public __construct($subject,$msg,$receiver)
    {
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->AddAddress($receiver);

    }

    public function send()
    {
        $mail->Send();
    }

}