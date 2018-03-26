<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING));
  $subject = trim(filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING));
  $msg = trim(filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING));

  // Error #1: If fields are empty
  if ($name == "" || $email == "" || $subject == "" || $msg == "") {
    $error_message = "Please fill out ALL the required fields: Name, Email, Subject, Message.";
    echo $error_message;
  }

  // Error #2: Email Header Injection Exploit
  if (!isset($error_message)) {
    foreach ($_POST as $value) {
      if (stripos($value, "Content-Type:") !== false) {
        $error_message = "There was a problem with the information you entered.";
        echo $error_message;
      }
    }
  }

  // Error #3: If hidden field is NOT empty (BOTS!)
  if (!isset($error_message) && $_POST["robot"] != "") {
    $error_message = "Bad form input.";
    echo $error_message;
  }

  // Code for PHPMailer to send email
  require_once(ROOT_PATH . "inc/phpmailer/PHPMailerAutoload.php");
  require_once(ROOT_PATH . "inc/creds.php");
  $mail = new PHPMailer;
  $mail->CharSet = "UTF-8";
  $mail->Encoding = "base64";
  $mail->isSMTP();
  $mail->SMTPDebug = 2;
  $mail->Debugoutput = "html";
  $mail->Host = "box804.bluehost.com"; // Set Bluehost as the SMTP server
  $mail->Port = 465; // Set SMTP port for Bluehost server
  $mail->SMTPSecure = "ssl"; // Set prefix to server
  $mail->SMTPAuth = true; // Enable SMTP authentication
  $mail->Username = $username; // SMTP username
  $mail->Password = $password;

  // Validate email address
  if (!isset($error_message) && !$mail->ValidateAddress($email)) {
    $error_message = "Invalid email address";
    echo $error_message;
  }

  // If NO errors, then send message
  if (!isset($error_message)) {
    $email_body = "";
    $email_body .= "<p>Name: " . $name . "</p>\n";
    $email_body .= "<p>Email: " . $email . "</p>\n";
    $email_body .= "<p>Subject: " . $subject . "</p>\n";
    $email_body .= "<p>Message: " . $msg . "</p>\n";

    $mail->setFrom("contact@tiffanydu.com");
    $mail->addAddress("tiffany@tiffanydu.com");
    $mail->addReplyTo($email, $name);
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "TiffanyDu.com -- Message from " . $name;
    $mail->Body = $email_body;

    // Show thank you message if message is sent
    if ($mail->send()) {
      $thanks = "Message sent successfully! Thank you for your message, I will get back to you shortly.";
      echo $thanks;
    } else {
      // Show error message if message if NOT sent
      $error_message = "Message could not be sent.\n";
      $error_message .= "Mailer Error: " . $mail->ErrorInfo;
      echo $error_message;
    }
  }
}
?>