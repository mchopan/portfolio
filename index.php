
<?php

if (isset($_POST['submit'])) 
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "mchopan21@gmail.com";
        $subject = "Mail From Portfolio";
        $txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
        $headers = "From : " .$email;

        if ($email != NULL) {
            mail($to, $subject, $txt, $headers);
            header("Location: index.php?mailSend");
        };
    };

?>

