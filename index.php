
<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "mchopan21@gmail.com";
    $subject = "Mail From Portfolio";
    $txt = "Name = " .$name ."\r\n Email = " .$email ."\r\n Message = " .$message;
    $header = "From : noreply@mchopan.github.io/portfolio" . "\r\n";

    if($email != NULL){
        mail($to,$subject,$txt,$header);
    }


?>

