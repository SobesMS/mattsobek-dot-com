<?php
    function SendEmail() {
        $site = [
            "email" => "sobesms+msdc@gmail.com",
            "subject" => "Form Submission From mattsobek.com"
        ];

        $user = [
            "fname" => $_POST['fname'],
            "lname" => $_POST['lname'],
            "email" => $_POST['email'],
            "message" => $_POST['message']
        ];
                
        $in_content = "From: ".$user["fname"]." ".$user["lname"]."\nEmail: ".$user["email"]."\n\nMessage:\n".$user["message"];
        $in_headers = "From: ".$user["email"]."\r\n";

        $out_subject = "Thank you from MattSobek.com";
        $out_content = "Your message has been received and is greatly appreciated. The contents of your email are as follows:\n\n \"".$user["message"]."\"\n\nI will respond to inquiries as soon as possible. Have a great day!\n\nRegards,\nMatt Sobek";

        mail($site["email"], $site["subject"], $in_content, $in_headers);
        mail($user["email"], $out_subject, $out_content, "From: noreply@mattsobek.com\r\n");
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