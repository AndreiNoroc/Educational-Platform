<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "george.barbu@bioferma-cuza-voda.ro";
    $headers = "From: ".$mailFrom;
    $txt = "You have receiver an e-mail from ".$name.".\n\n".$message;

    $sign = "@";

    if(!empty($message) && !empty($subject) && !empty($name) && !empty($mailFrom)) {
        if(strpos($mailFrom, $sign)) {
            mail($mailTo, $subject, $txt, $headers);
            header("Location: ../services/forum.html");
        } else {
            header("Location: ../services/forum.html?NotRightFormat");
        }
    } else {
        header("Location: ../services/forum.html?ErrorCompleteAllFields");
    }
}

?>