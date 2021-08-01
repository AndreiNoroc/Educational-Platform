<!-- //? ==================== The reset modal starts here ==================== -->
<div id="resetModal" class="modal">
    <div class="modal-content container modal_look">

    <?php
    //! parte de php in interiorul html
    //* verificam mesajul primit de la server
    //* in functie de acesta afisam alt mesaj
    if(isset($_GET['newpwd'])) {
        $signupCheck = $_GET['newpwd'];
        if($signupCheck == "empty") {
            echo "<p style='text-align: center; color: red'>You did not fill in all fields!</p>";
        }
        if($signupCheck == "pwdnotsame") {
            echo "<p style='text-align: center; color: red'>The passwords don't match!</p>";
        }
        if($signupCheck == "passwordupdate") {
            echo "<p style='text-align: center; color: green'>The password has been changed!</p>";
        }
    }
    ?>

    <?php
    //! parte de php in interiorul html
    // $selector  = $_GET["selector"];
    // $validator  = $_GET["validator"];

    if(empty($selector) || empty($validator)) {
        echo "Could not validate your request!";
    } else {
    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
    ?>
    <!-- //? Titlul din interiorul modalului -->
        <p class="modal_subtitle">Create new password.</p>

        <hr>
        <form class="d-block modal_form" action="../../../forms/reset-password.inc.php" method="post">
            <!-- // TODO: Razvane comenteaza tu aici ca nu inteleg exact -->
            <input type="hidden" name="selector" value="<?php echo $selector;?>">
            <input type="hidden" name="validator" value="<?php echo $validator;?>">
            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input id="password" type="password" name="pwd" placeholder="New Password">
            </div>
            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input id="password" type="password" name="pwd-repeat" placeholder="Confirm Password">
            </div>
            <button type="submit" name="reset-password-submit" class="btn btn-outline-success">Send email</button>
        </form>
        <hr>

        <button class="close modal_close_button">&times;</button>
        <?php
        }
        }
        ?>
    </div>
</div>
<!-- //? ==================== The reset modal ends here ==================== -->
