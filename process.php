<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "sambishop3015@hotmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", "From:" . $name, "Email:" . $email, "Phone:" . $phone);
    
    header('Location: success.html');
  }