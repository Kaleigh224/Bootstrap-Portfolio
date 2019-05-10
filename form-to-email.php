<?php
    $error = false;
    $sent = false;

if(!isset($_POST['submit']))
{
  if(empty($_POST['name'])|| empty($_POST['email']) || empty($_POST['message'])) {
      $error = true;
  } else {
      $to = "kaleigh224@gmail.com";

      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $message = trim($_POST['message']);

      $subject = "Contact Form";

      $message = "Name: $name \r\n Email: $email \r\n Message: $message";
      $headers = "From:" . $name;
      $mailsent = mail($to, $subject, $message, $headers);

      if($mailsent) {
          $sent = true;
      }
  }
    // Must hit submit
    // echo "error; you need to submit the form!";
}
// $name = $_POST['name'];
// $email = $_POST['email'];
// $message = $_POST['message'];

// if(empty($name)||empty($email))
// {
    //     echo "Must enter name and email!";
    //     exit;
    // }
    
    // $email_from = 'Kaleigh224@gmail.com';
    // $email_subject = "New Form submission";
    // $email_body = "You have received a new message from the user $name.\n". 
    //     "email address: $email\n". 
    //     "Here is the message:\n $message". 
    
    // $to = "Kaleigh224@gmail.com";
    // $headers = "From: $email_from \r\n";
    
    // mail($to,$email_subject,$email_body,$headers);
?>