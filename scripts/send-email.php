<?php
if($_POST['submit']) {
    $email_to = "sobesms@gmail.com";
    $email_subject = "New Email From mattsobek.com";

    $fname = $_POST['fname2'];
    $lname = $_POST['lname2'];
    $email = $_POST['email2'];
    $message = $_POST['message2'];

    $email_content = "From: ".$fname." ".$lname."\nEmail: ".$email."\n\n".$message;
    mail($email_to, $email_subject, $email_content);
}