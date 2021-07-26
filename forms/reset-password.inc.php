<?php

///Daca a fost apasat butonul din resetModal de submit
if (isset($_POST["reset-password-submit"])) {
    //includem fisierul in care se deschide serverul

     //punem datele introduse de utilizator in variabile
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    //Verificam daca nu au ramas campuri goale si daca parolele sunt la fel 
    if(empty($password) || empty($passwordRepeat)) {
        header("Location: ../index.php?selector=$selector&validator=$validator&newpwd=empty");
        exit();

    } else if($password != $passwordRepeat) {
        header("Location: ../index.php?selector=$selector&validator=$validator&newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");
    
    require 'dbh.inc.php';

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?;";
    
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();

    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        

        if(!$row = mysqli_fetch_assoc($result)) {
            echo "You are need to resubmit your reset request!1";
            exit();

        } else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
            
            if($tokenCheck === false) {
                echo "You are need to resubmit your reset request!2";
                exit();
        
            } elseif ($tokenCheck === true) {

                $tokenEmail = $row["pwdResetEmail"];
                $sql = "SELECT * FROM users where user_email=?;";
                $stmt = mysqli_stmt_init($conn);
    
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error1!";
                    exit();
            
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if(!$row = mysqli_fetch_assoc($result)) {
                        echo "There was an error2!";
                        exit();

                    } else {
                        $sql = "UPDATE users SET user_pwd=? WHERE user_email=?;";
                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "There was an error3!";
                            exit();
                        
                        } else {
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
                            $stmt = mysqli_stmt_init($conn);
                        
                            if(!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error4!";
                                exit();
                            
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../index.php?selector=$selector&validator=$validator&newpwd=passwordupdate");
                                exit();
                            }
                        } 
                    }
                } 
            } 
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}