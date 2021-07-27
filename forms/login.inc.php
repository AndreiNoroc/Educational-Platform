<?php
//* partea care preia datele introduse de utilizator in sectiunea de login si le prelucreaza

//* verificam daca a fos apasat butonul de submit
if(isset($_POST['submit'])) {
    //* includem fisierul in care se deschide serverul
    include_once 'dbh.inc.php';

    //* punem datele introduse de utilizator in variabile
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //* verificam daca vreun camp a ramas gol
    if(empty($username) || empty($password)) {
        header("Location: ../index.php?login=empty&username=$username");
        exit();
    } else {
        //* verificam daca email-ul sau username-ul se gaseste in baza de date
        $sql = "SELECT * FROM users WHERE user_email='".$username."' OR user_uid='".$username."';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) <= 0) {
            header("Location: ../index.php?login=errorusername&username=$username");
            exit();
        } else {
            $row = mysqli_fetch_assoc($result);
            if($row['user_pwd'] != $password) {
                header("Location: ../index.php?login=errorpassword&username=$username");
                exit();
            } else {
                header("Location: ../index.php?login=success");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}