<?php

require '../PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'itinventory001';          // SMTP username
$mail->Password = 'scosoft2015'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('email.address@gmail.com', 'Africell IT Inventory');
$mail->addAddress('it-helpdesk@africell.ug');   // Add a recipient

//$mail->addCC('johnkalungi1@gmail.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML

$mail->Subject = 'Item Re-assigned';
$mail->Body    = 'System Unit (Serial No:W3ER411,User: John) has been re-assigned to Hamza';
if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>