<!-- //* ==================== The login modal starts here ==================== -->
<div id="loginModal" class="modal">
    <div class="modal-content container modal_look">

        <!-- //? Titlul din interiorul modalului -->
        <p class="modal_title">Login</p>

        <?php
        //! parte de php in interiorul html
        //* verificam mesajul primit de la server
        //* in functie de acesta afisam alt mesaj
        if(isset($_GET['login'])) {
            $signupCheck = $_GET['login'];
            if($signupCheck == "empty") {
                echo "<p style='text-align: center; color: red'>You did not fill in all fields!</p>";
            }
            if($signupCheck == "errorusername") {
                echo "<p style='text-align: center; color: red'>Wrong username!</p>";
            }
            if($signupCheck == "errorpassword") {
                echo "<p style='text-align: center; color: red'>Wrong password!</p>";
            }
            if($signupCheck == "success") {
                echo "<p style='text-align: center; color: green'>You have been logged in!</p>";
                $_SESSION["username"] = $_GET['username'];
            }
        }
        //? cu asta scoatem sesiunea pana la logout
        //! unset($_SESSION['username']);
        ?>

        <hr>
        <form class="d-block modal_form" action="../../../forms/login.inc.php" method="post">
            <div style="padding-bottom: 20px">
                <label for="username">Username:</label>
                <?php
                //! parte de php in interiorul html
                //* folosim php aici pentru a pastra username-ul in cazul in care s-a gresit doar parola
                if (isset($_GET['username'])) {
                    $username = $_GET['username'];
                    echo '<input id="username" type="text" name="username" placeholder="Username or email" value="'.$username.'">';
                } else {
                    echo '<input id="username" type="text" name="username" placeholder="Username or email">';
                }
                ?>
            </div>
            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-success">Login</button>

            <br><br>
            <a class="modal_text_link" id="forgotPass"><i>Forgot your password?</i></a>
            <br><br>

            <span id="change_link">
                        Do you not have an account?
                        <a class="modal_text_link" id="new_account"><i>New Account</i></a>
                    </span>
        </form>
        <hr>

        <button class="close modal_close_button">&times;</button>
    </div>
</div>
<!-- //* ==================== The login modal ends here ==================== -->
