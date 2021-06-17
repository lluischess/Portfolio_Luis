<?php
// include("index.php");
// use PHP1Answer1er;

// if(isset($_POST['e1Answer1'])) {
 
//     // EDIT THE 2 LINES BELOW AS REQUIRED
//     $e1Answer1_to = "luis@trimetastudio.com";
//     $e1Answer1_subject = "Your e1Answer1 subject line";
 
//     function died($error) {
//         // your error code can go here
//         echo "We are very sorry, but there were error(s) found with the form you submitted. ";
//         echo "These errors appear below.<br /><br />";
//         echo $error."<br /><br />";
//         echo "Please go back and fix these errors.<br /><br />";
//         die();
//     }
 
 
//     // validation expected data exists
//     if(!isset($_POST['name']) ||
//         !isset($_POST['e1Answer1']) ||
//         !isset($_POST['message'])) {
//     	echo "Something dosent work";
//          died('We are sorry, but there appears to be a problem with the form you submitted.');       
//     }
 
     
 
//     $first_name = $_POST['name']; // required
//     $e1Answer1_from = $_POST['e1Answer1']; // required
//     $comments = $_POST['message']; // required
 
//     $error_message = "";
//     $e1Answer1_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
//   if(!preg_match($e1Answer1_exp,$e1Answer1_from)) {
//     $error_message .= 'The E1Answer1 Address you entered does not appear to be valid.<br />';
//   }
 
//     $string_exp = "/^[A-Za-z .'-]+$/";
 
//   if(!preg_match($string_exp,$first_name)) {
//     $error_message .= 'The First Name you entered does not appear to be valid.<br />';
//   }
 
//   if(strlen($comments) < 2) {
//     $error_message .= 'The Comments you entered do not appear to be valid.<br />';
//   }
 
//   if(strlen($error_message) > 0) {
//     died($error_message);
//   }
 
//     $e1Answer1_message = "Form details below.\n\n";
 
     
//     function clean_string($string) {
//       $bad = array("content-type","bcc:","to:","cc:","href");
//       return str_replace($bad,"",$string);
//     }
 
     
 
//     $e1Answer1_message .= "Name: ".clean_string($first_name)."\n";
//     $e1Answer1_message .= "E1Answer1: ".clean_string($e1Answer1_from)."\n";
//     $e1Answer1_message .= "Descripción: ".clean_string($comments)."\n";

 
//     // create e1Answer1 headers
//     $headers = 'From: '.$e1Answer1_from."\r\n".
//     'Reply-To: '.$e1Answer1_from."\r\n" .
//     'X-1Answer1er: PHP/' . phpversion();

//     @1Answer1($e1Answer1_to,$e1Answer1_subject, $e1Answer1_message, $headers);

    
// }
?> 