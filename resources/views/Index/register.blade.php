<!-- //? ==================== The register modal starts here ==================== -->
<div id="registerModal" class="modal">
    <div class="modal-content container modal_look">

        <!-- //? Titlul din interiorul modalului -->
        <p class="modal_title">Register</p>

        <hr>
        <form class="d-block modal_form" action="{{ route('register.custom') }}" method="post">
            @csrf
            <div style="padding-bottom: 20px">
                <label for="name">Name:</label>
                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                       required autofocus>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div style="padding-bottom: 20px">
                <label for="email" style="margin-left: 35px;">Email:</label>
                <input type="text" placeholder="Email" id="email_address" class="form-control"
                       name="email" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div style="padding-bottom: 20px">
                <label for="password">Password:</label>
                <input type="password" placeholder="Password" id="password" class="form-control"
                       name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
            </div>

            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
            </div>

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
