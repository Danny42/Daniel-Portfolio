
<?php

			
//GRAB THE DATA
$honeypot = $_POST['firstname'];
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$User_IP = getUserIP();



$message = $_POST['message'];



		

$formcontent="From: $name  \n Email: $email \n Number: $number  \n Message: $message \n IP: $User_IP";
$to = "itzzblurry420@gmail.com";

$subject = "Daniels Portfolio Contact Form";
$mailheader = "From: $email \r\n";



//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		echo "Error!!!"; //you may add code here to echo an error etc.
	}else{
//CREATE THE MAIL 
mail($to,  $subject, $formcontent, $mailheader)
	or die("Error!");
	echo "Your message has been submitted. Thank You!" . " -" ;}
	
header( "refresh:3;url=index.html" );
	

/**
 * Get USER IP Address
 */
function getUserIP()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
?>