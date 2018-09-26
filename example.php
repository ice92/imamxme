<?php 
require_once('function.php');
	if(isset($_POST['submit']))
	{
    $to = "me@imamxme.tech"; // this is your Email address
	$to2="ice.codename@gmail.com";
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];    
    $subject = "Form submission";
    // $subject2 = "Copy of your form submission";
    $message = $fullname . " wrote the following:" . "\n\n" . $_POST['message'];
    // $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    smtp_mail($to,$subject,$message,$fullname,$from);
	smtp_mail($to2,$subject,$message,$fullname,$from);
    // smtp_mail($from,$subject2,$message2); // sends a copy of the message to the sender	
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Thanks for your message. Will contact you shortly.");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=https://imamxme.tech"> 
