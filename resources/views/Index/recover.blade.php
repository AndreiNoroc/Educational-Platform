<!-- //* ==================== The recover modal starts here ==================== -->
<div id="recoverModal" class="modal">
    <div class="modal-content container modal_look">

        <!-- //? Titlul din interiorul modalului -->
        <p class="modal_title">Recover</p>
        <p class="modal_subtitle">An email will be send to you with instructions on how reset your password.</p>

        <?php
        //! parte de php in interiorul html
        // TODO: sa se verifice si daca este campul gol, nu mai facem cu required(nu acum ca poate stricam ceva, cand o sa mai putem testa)
        //* verificam mesajul primit de la server
        //* in functie de acesta afisam alt mesaj
        if(isset($_GET['reset'])) {
            $resetCheck = $_GET['reset'];
            if($resetCheck == "success") {
                echo "<p style='text-align: center; color: green'>Check your email.</p>";
            }
            if($resetCheck == "notExist") {
                echo "<p style='text-align: center; color: red'>This email address does not exist.</p>";
            }
        }
        ?>

        <hr>
        <form class="d-block modal_form" action="../../../forms/reset-request.inc.php" method="post">
            <div style="padding-bottom: 20px">
                <label for="email">Email:</label>
                <input id="email" type="email" name="uEmail" placeholder="Email" required><!-- //! trebuie sters required-ul asta-->
            </div>
            <button type="submit" name="reset-request-submit" class="btn btn-outline-success">Send email</button>
        </form>
        <hr>

        <button class="close modal_close_button">&times;</button>
    </div>
</div>
<!-- //* ==================== The recover modal ends here ==================== -->
