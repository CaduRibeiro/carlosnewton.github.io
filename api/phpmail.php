<?php

/* Allow access from staging Url */
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Access-Control-Allow-Methods: PUT, POST, GET, OPTIONS, DELETE");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Import PHP Mailer */ 
require 'phpmailer/src/Exception.php';      
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require_once 'config.php';
require_once 'functions.php';

/* Initialize data */
$data = array();

if ($_POST) {

    // Validation
    $name	 = isset($_POST["name"]) ? $_POST["name"] : "";
    $email   = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["message"]) ? nl2br($_POST["message"]) : "";
    $subject = isset($_POST["subject"]) ? nl2br($_POST["subject"]) : "";
    // $token   = isset($_POST["recap-enterprise"]) ? nl2br($_POST["recap-enterprise"]) : "";

    if (!$name) {
        $ret = setErro(1, E002, "name", $data);
        returnAjax($ret);
    }

    if (!$email) {
        $ret = setErro(1, E004, "email", $data);
        returnAjax($ret);
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $ret = setErro(1, E011, "email", $data);
            returnAjax($ret);
        }
    }
    if (!$message) {
        $ret = setErro(1, E005, "message", $data);
        returnAjax($ret);
    }

    if (!$subject) {
        $ret = setErro(1, E003, "message", $data);
        returnAjax($ret);
    }

    // Data sent by user
    $email_vars = array(
        'name'	    => $name,
        'email' 	=> $email,
        'message'   => $message
    );

    // Recaptcha Validation
	// $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret="
    //         . RECAPTCHA_SECRET_KEY . "&response=". $token . "&remoteip=". $_SERVER['REMOTE_ADDR']), true);
      
    // if ( $response['success'] == false )
    // {
    //     if (!$eng) $ret = setErro(1, E009, "form-home", $data);
    //     else $ret = setErro(1, E019, "form-home", $data);
    //     returnAjax($ret);
    // }
    // else
    // {

        // Send Email Admin
        $body = file_get_contents('template/admin.html');

        $bodyMessage = "<strong>Nombre</strong>: " . $name . " <br /> "
                    . "<strong>Correo electrónico</strong>: " . $email . " <br /> ";
        
        $bodyMessage .=  "<strong>Mensaje</strong>:<br /> " . $message . " <br /> ";

        if(isset($bodyMessage)){
            $body = str_replace('{'.strtoupper('message').'}', $bodyMessage, $body);
        }


        try{
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPAuth = true;
            $mail->CharSet = 'UTF-8';
            $mail->Host = SMTP_SERVER;
            $mail->Port = SMTP_PORT;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
            // $mail->SMTPDebug = 1;
            $mail->SMTPSecure = 'tls';
            $mail->SetFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $mail->Subject = SMTP_SUBJECT_ADMIN . " - " . date("d/m/Y H:i:s");
            $mail->MsgHTML($body);
            $mail->AddAddress($email, $name);
            // $mail->AddBCC(MAIL_TO_ADDRESS_BCC, MAIL_TO_NAME_BCC);

            if(!$mail->Send()) throw new Exception($mail->ErrorInfo);

            $ret = setErro(0, E012, "", $data);
            returnAjax($ret);

        }
        catch(Exception $e){
            // echo $e->getMessage()
            $ret = setErro(1, E013, "name", $data);
            returnAjax($ret);
        }

        /****************/
    // }
} else {

    
    $ret = setErro(1, E018, "name", $data);
    returnAjax($ret);

}

?>