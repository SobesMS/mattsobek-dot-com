<?php
    function IsInjected($str) {
        $injections = array(
            '(\n+)',
            '(\r+)',
            '(\t+)',
            '(%0A+)',
            '(%0D+)',
            '(%08+)',
            '(%09+)'
        );

        $inject = join('|', $injections);
        $inject = "/$inject/i";

        if(preg_match($inject, $str)) {
            return true;
        } else {
            return false;
        }
    }

    if(!empty($_POST['submit'])) {
        $email_to = "sobesms+msdc@gmail.com";
        $email_subject = "Form Submission From mattsobek.com";

        $fname = $_POST['fname2'];
        $lname = $_POST['lname2'];
        $email_from = $_POST['email2'];
        $message = $_POST['message2'];


        $email_content = "From: ".$fname." ".$lname."\nEmail: ".$email_from."\n\n".$message;
        $email_headers = "From: ".$email_from."\r\n";

        if(IsInjected($fname) | IsInjected($lname) | IsInjected($email_from) | IsInjected($message)) {
            echo "Invalid submission data. Please try again.";
            exit;
        }
        
        mail($email_to, $email_subject, $email_content, $email_headers);
    } else {
        echo "An error occurred.";
    }
?>