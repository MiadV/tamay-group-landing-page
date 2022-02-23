<?php

if ($_POST["name"]) {
    
    $to = "info@tamaygroup.com";
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $message = "This message is from website contact form."."\r\n". $name. "\r\n" .$_POST["message"];
    $from = $_POST["email"];
    $headers = "From: ".$from;

mail($to,$subject,$message,$headers);

    echo "OK";

} else {
    
    echo "Error Sending Message";
};


?>