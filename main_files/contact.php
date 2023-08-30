<?php

 $to = 'winsfolio@gmail.com' . "\r\n";
  $subject = 'Contact Request from Balloo';
  $name = $_POST['name'];
  $email = $_POST['email']; 
  $phone = $_POST['phone']; 
  $comment = $_POST['comment']; 
 

  $message = "************************************************** \r\n" .
  	         "Message from you website!  \r\n" .
             "************************************************** \r\n" .	
    
  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
            "Phone: " . $phone . "\r\n" .
            "Phone: " . $phone . "\r\n" .
  	        "Message: " . $comment . "\r\n"; 

 // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
             
            // Additional headers 
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n"; 

	$mail = mail($to, $subject, $message, $headers); 

 ?>