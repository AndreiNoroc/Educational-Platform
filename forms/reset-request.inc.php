<?php

///Daca a fost apasat butonul din recover de submit
if (isset($_POST['reset-request-submit'])) {
     //includem fisierul in care se deschide serverul
     include_once 'dbh.inc.php';

    ///Pentru a genera un link criptat
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    ///Url-ul care va fi trimis pe email pentru a fi accesat
    $url = "localhost/FinancialEducation?selector=" . $selector . "&validator=". bin2hex($token);
    bin2hex($token);

    //Pentru a genera un link care expira
    $expires = date("U") + 1800;

    $userEmail = $_POST["uEmail"];
    //verificam daca email-ul a mai fost folosit
    $sqlSelect = "SELECT user_email FROM users;";
    $result = mysqli_query($conn, $sqlSelect);
    $resultCheck = mysqli_num_rows($result);
    $checkIfEmailExist = false;
    if($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['user_email'] == $userEmail) {
                $checkIfEmailExist = true;
            }
        }
    }
 
    if ($checkIfEmailExist) {
        $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
        $stmt = mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!";
            exit();
        
        } else {
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!";
            exit();

        } else {
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $userEmail;
        $subject = "Reset you password..";

        $message = '<p>We recived a password reset request. The link to reset your password is bellow
            . If you did not make this request, you can ignore this email</p>';
        $message .= '<p>Here is your password reset link: <br>';
        $message .= '<a href="' . $url . '">' . $url . '</a></p>';
         
        $headers = "From: FinancialEducation <razvan_basaraba@yahoo.ro>\r\n";
        $headers .= "Reply-To: razvan_basraba@yahoo.ro\r\n";
        $headers .= "From: FinancialEducation <razvan_basaraba@yahoo.ro>\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);
        header("Location: ../index.php?reset=success");

    } else {
        header("Location: ../index.php?reset=notExist");
        exit();
    }

} else {
    header("Location: ../index.php");
    exit();
}