<?php

if($_POST["submit"]) {
    $recipient="info@theelitenetworks.com";
    $subject="Form to email message. Subject :-"+$_POST["subject"];
    $name=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>