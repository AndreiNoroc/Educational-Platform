<!-- //? ==================== The register modal starts here ==================== -->
<div id="registerModal" class="modal">
    <div class="modal-content container modal_look">

        <!-- //? Titlul din interiorul modalului -->
        <p class="modal_title">Register</p>

        <?php
        //! parte de php in interiorul html
        //* verificam mesajul primit de la server
        //* in functie de acesta afisam alt mesaj
        if(isset($_GET['signup'])) {
            $signupCheck = $_GET['signup'];
            if($signupCheck == "empty") {
                echo "<p style='text-align: center; color: red'>You did not fill in all fields!</p>";
            }

            if($signupCheck == "char") {
                echo "<p style='text-align: center; color: red'>You used invalid characters!</p>";
            }

            if($signupCheck == "email") {
                echo "<p style='text-align: center; color: red'>You used invalid email!</p>";
            }

            if($signupCheck == "success") {
                echo "<p style='text-align: center; color: green'>You have been signed up!</p>";
                echo "<p style='text-align: center; color: green'>Now go to Log in!</p>";
            }

            if($signupCheck == "usedEmail") {
                echo "<p style='text-align: center; color: red'>The email has already been used!</p>";
            }

            if($signupCheck == "usedUsername") {
                echo "<p style='text-align: center; color: red'>The username has already been used!</p>";
            }

            if($signupCheck == "passwordsDontMatch") {
                echo "<p style='text-align: center; color: red'>The passwords don't match!</p>";
            }
        }
        ?>

        <hr>
        <form class="d-block modal_form" action="../../../forms/signup.inc.php" method="post">
            <div style="padding-bottom: 20px">
                <label for="first-name">First-Name:</label>
                <?php
                //! parte de php in interiorul html
                //* conditie sa ramana valoarea scrisa dupa refresh
                if (isset($_GET['first'])) {
                    $first = $_GET['first'];
                    echo '<input id="first-name" type="text" name="first" placeholder="First_name" value="'.$first.'">';

                } else {
                    echo '<input id="first-name" type="text" name="first" placeholder="First_name">';
                }
                ?>
            </div>

            <div style="padding-bottom: 20px">
                <label for="last-name">Last-Name:</label>
                <?php
                //! parte de php in interiorul html
                //* conditie sa ramana valoarea scrisa dupa refresh
                if (isset($_GET['last'])) {
                    $last = $_GET['last'];
                    echo '<input id="last-name" type="text" name="last" placeholder="Last_name" value="'.$last.'">';

                } else {
                    echo '<input id="last-name" type="text" name="last" placeholder="Last_name">';
                }
                ?>
            </div>

            <div style="padding-bottom: 20px">
                <label for="username">Username:</label>
                <?php
                ///! parte de php in interiorul html
                //* conditie sa ramana valoarea scrisa dupa refresh
                if (isset($_GET['uid'])) {
                    $uid = $_GET['uid'];
                    echo '<input id="username" type="text" name="uid" placeholder="Username" value="'.$uid.'">';

                } else {
                    echo '<input id="username" type="text" name="uid" placeholder="Username">';
                }
                ?>
            </div>

            <div style="padding-bottom: 20px">
                <label for="email" style="margin-left: 35px;">Email:</label>
                <?php
                //! parte de php in interiorul html
                //* conditie sa ramana valoarea scrisa dupa refresh
                if (isset($_GET['email'])) {
                    $email = $_GET['email'];
                    echo '<input id="email" type="text" name="email" placeholder="Email" value="'.$email.'">';

                } else {
                    echo '<input id="email" type="text" name="email" placeholder="Email">';
                }
                ?>
            </div>

            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input id="password" type="password" name="pwd" placeholder="Password">
            </div>

            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input id="password" type="password" name="pwd2" placeholder="Confirm Password">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-success">Register</button>

            <br><br>
            <p class="change_link">
                Do you have an account?
                <a class="modal_text_link" id="exist_account"><i>Log in</i></a>
            </p>
        </form>
        <hr>
        <button class="close modal_close_button">&times;</button>
    </div>
</div>
<!-- //? ==================== The register modal ends here ==================== -->
