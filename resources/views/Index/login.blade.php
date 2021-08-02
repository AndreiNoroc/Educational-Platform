<!-- //* ==================== The login modal starts here ==================== -->
<div id="loginModal" class="modal">
    <div class="modal-content container modal_look">

        <!-- //? Titlul din interiorul modalului -->
        <p class="modal_title">Login</p>

        <?php
        if(!isset($_GET['login'])) {
            //  exit();
        } else {
            $signupCheck = $_GET['login'];
            if($signupCheck == 1) {
                echo "<p style='text-align: center;color: green;'> You have been logged in</p>";
            } else if($signupCheck == 2) {
                echo "<p style='text-align: center;color: red;'> Wrong email or password</p>";
            }
        }
        ?>

        <hr>
        <form class="d-block modal_form" action="{{ route('login.custom') }}" method="post">
            @csrf
            <div style="padding-bottom: 20px">
                <label for="username">Email:</label>
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                       autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>

            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Signin</button>
            </div>

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
