<?php
    function SendEmail() {
        $email_to = "sobesms+msdc@gmail.com";
        $email_subject = "Form Submission From mattsobek.com";
                
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email_from = $_POST['email'];
        $message = $_POST['message'];
                
                
        $email_content = "From: ".$fname." ".$lname."\nEmail: ".$email_from."\n\n".$message;
        $email_headers = "From: ".$email_from."\r\n";

        mail($email_to, $email_subject, $email_content, $email_headers);
        return true;
    }
    // function IsInjected($str) {
    //     $injections = array(
    //         '(\n+)',
    //         '(\r+)',
    //         '(\t+)',
    //         '(%0A+)',
    //         '(%0D+)',
    //         '(%08+)',
    //         '(%09+)'
    //     );

    //     $inject = join('|', $injections);
    //     $inject = "/$inject/i";

    //     if(preg_match($inject, $str)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
?>