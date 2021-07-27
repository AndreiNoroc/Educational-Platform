<?php
//* partea din spate de la contact-us

if (isset($_POST['submit'])) {
    //* luam datele introduse de utilizator
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    //* adaugam 3 variabile in care se formeaza mesajul
    $mailTo = "george.barbu@bioferma-cuza-voda.ro";
    $headers = "From: ".$mailFrom;
    $txt = "You have receiver an e-mail from ".$name.".\n\n".$message;

    $sign = "@";

    //* conditie ca toate campurile sa fie completate
    if(!empty($message) && !empty($subject) && !empty($name) && !empty($mailFrom)) {
        if(strpos($mailFrom, $sign)) {
            //* functie care trimite mail-ul
            mail($mailTo, $subject, $txt, $headers);
            header("Location: ../index.html");
        } else {
            header("Location: ../index.html?NotRightFormat");
        }
    } else {
        header("Location: ../index.html?ErrorCompleteAllFields");
    }
}