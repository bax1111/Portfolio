<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email_address'];
    $phone = $_POST['phone'];
    $message = $_POST['comments'];

    $mailTo = "info@willyanicette.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: contact.php?mailsend");

}
