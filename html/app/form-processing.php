<?php
 
$form_type = 'Press';
$form_subject = 'Metropolis Contact Form Submission: PRESS';

$header = "From: info@metropolislosangeles.com \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain;charset=utf-8 \r\n";

$message = "Message sent from the " . $form_type . " webform: \r\n";
$message .= "First Name: " . $_POST['first_name'] . " \r\n";
$message .= "Last Name: " . $_POST['last_name'] . " \r\n";

if ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) )
	$message .= "Email: " . $_POST['email'] . " \r\n";

if ( isset( $_POST['publication'] ) && !empty( $_POST['publication'] ) )
	$message .= "publication: " . $_POST['publication'] . " \r\n";

// $to = "paulette.kam@bwr-pr.com";
$to2 = "ncornaggia@bridgerconway.com";

$subject = $form_subject;

$response = new stdClass;
$response->ok = mail($to2, $subject, $message, $header);

header("Location: http://dev.bridgerconwaydigital.com/metropolis/thanks.html");
die();
// echo json_encode($response);
// die();

?>