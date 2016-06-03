<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    $to = "ganji.sivaprakash@gmail.com";
    $subject = "New Message from $name ";
    
    mail($to, $subject, $message, "From: ".$email);
echo "Your message has be sent succefully";
header("Location: http://sivaprakash.me/");

?>