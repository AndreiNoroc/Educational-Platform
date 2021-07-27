<?php
//* partea care preia datele introduse de utilizator si le prelucreaza

//* verificam daca a fos apasat butonul de submit
if(isset($_POST['submit'])) {
    //* includem fisierul in care se deschide serverul
    include_once 'dbh.inc.php';

    //* punem datele introduse de utilizator in variabile
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

    //* verificam daca vreun camp a ramas gol
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($pwd2)) {
        header("Location: ../index.php?signup=empty&first=$first&last=$last&uid=$uid&email=$email");
        exit();
    } else {
        //* verificam daca numele si prenumele contin si alte caractere in afara de litere
        if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../index.php?signup=char&uid=$uid&email=$email");
            exit();
        } else {
            //* verificam daca email-ul are forma corecta
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?signup=email&first=$first&last=$last&uid=$uid");
                exit();
            } else {
                //* verificam daca email-ul a ma fost folosit
                $sqlSelect = "SELECT user_email FROM users;";
                $result = mysqli_query($conn, $sqlSelect);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['user_email'] == $email) {
                            header("Location: ../index.php?signup=usedEmail&first=$first&last=$last&uid=$uid");
                            exit();
                        }
                    }
                }
                //* verificam daca numele de utilizator a mai fost folosit
                $sqlSelect = "SELECT user_uid FROM users;";
                $result = mysqli_query($conn, $sqlSelect);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['user_uid'] == $uid) {
                            header("Location: ../index.php?signup=usedUsername&first=$first&last=$last&email=$email");
                            exit();
                        }
                    }
                }
                //* verificam daca parolele sunt la fel
                if($pwd != $pwd2) {
                    header("Location: ../index.php?signup=passwordsDontMatch&first=$first&last=$last&email=$email&uid=$uid");
                    exit();
                }
                //* daca se ajunge aici introducem datele in baza de date
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
                            VALUES (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "SQL ERROR";
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
                    mysqli_stmt_execute($stmt);
                }

                header("Location: ../index.php?signup=success");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}
