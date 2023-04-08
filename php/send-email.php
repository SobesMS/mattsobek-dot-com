<?php
    function SendEmail() {
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
            exit();
        }

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
?>