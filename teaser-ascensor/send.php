<?php
   
$form_type = 'Purchasers';

if ( isset( $_POST['client_type'] ) && $_POST['client_type'] == '9109' ) {

	$form_type = 'Brokers';

}

$header = "From: info@metropolislosangeles.com \r\n";
$header .= "BCC: mcaceres@bridgerconway.com,saronov@bridgerconway.com,dsantamaria@bridgerconway.com \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain;charset=GB2312 \r\n";

$message = "Message sent from the " . $form_type . " webform: \r\n";
$message .= "First Name: " . $_POST['firstname'] . " \r\n";
$message .= "Last Name: " . $_POST['lastname'] . " \r\n";

if ( isset( $_POST['address'] ) && !empty( $_POST['address'] ) )
	$message .= "Address: " . $_POST['address'] . " \r\n";

if ( isset( $_POST['email'] ) && !empty( $_POST['email'] ) )
	$message .= "Purchaser Email: " . $_POST['email'] . " \r\n";

// if ( isset( $data->country ) )
// 	$message .= "Brokerage Company: " . $data->company . " \r\n";

if ( isset( $_POST['homephone'] ) && !empty( $_POST['homephone'] ) )
	$message .= "Purchaser Phone: " . $_POST['homephone'] . " \r\n";

$message .= "Hear from: " . $_POST['hearfrom'] . " \r\n";

if ( isset( $_POST['realtor_name'] ) && !empty( $_POST['realtor_name'] ) )
	$message .= "Realtor Name: " . $_POST['realtor_name'] . " \r\n";

if ( isset( $_POST['brokerage_company'] ) && !empty( $_POST['brokerage_company'] ) )
	$message .= "Brokerage Company: " . $_POST['brokerage_company'] . " \r\n";

if ( isset( $_POST['realtor_email'] ) && !empty( $_POST['realtor_email'] ) )
	$message .= "Realtor Email: " . $_POST['realtor_email'] . " \r\n";

$to = "metropolislosangeles@elliman.com";

$subject = 'Contact from Metropolis Los Angeles Web Teaser';

$message = mb_convert_encoding($message, "GB2312","AUTO");

$response = new stdClass;
$response->ok = mail($to, $subject, $message, $header);

if ( $response->ok ) {

	header( 'Location: http://metropolislosangeles.com/thanks_chn.php' );
}

die;

?>