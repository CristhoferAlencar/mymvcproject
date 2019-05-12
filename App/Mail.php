<?php
namespace App;

use App\Config;
use PHPMailer\PHPMailer\PHPMailer;

class Mail{

    public static function send($to, $subject, $text, $html){
    
        // Passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        /**
         * SMTP parameters. 
         */
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = Config::MAIL_HOST;            // Specify main and backup SMTP
        $mail->SMTPAuth = true;                     // Enable SMTP authentication         
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also
        $mail->Username = Config::MAIL_USER;        // SMTP username
        $mail->Password = Config::MAIL_PASSWORD;    // SMTP password
        $mail->Port = Config::MAIL_PORT;            // TCP port to connect to
        
        /**
         * Disable some SSL checks.
         */
        $mail->SMTPOptions = array(
           'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
           )
        );
        
        /**
         * Recipients
         */
        $mail->setFrom(Config::MAIL_USER, Config::SITE_NAME);
        $mail->addAddress($to, $to);                // Add a recipient, Name is optional
        
        /**
         * Content
         */
        //$mail->isHTML(true);                      // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $html;
        $mail->AltBody = $text;
         
        /**
         * Finally send the mail. 
         */
        $mail->send();
    }
}