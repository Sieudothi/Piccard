
{{--sign in form--}}

<form action="login" method ="POST" class="form" id="signin_form">
    {!! csrf_field() !!}
    <h6>SIGN IN</h6>

    <label class="label" for="email"><b>Username</b></label>
    <input class="input" type="text" placeholder="Username" name="username" required><br>


    <label class="label" for="psw"><b>Password</b></label>
    <input class="input" type="password" placeholder="Enter Password" name="psw" required><br>


    <div class="form_checkbox">
        <input type="checkbox">
        <label >Keep me logged in</label>
    </div>

    <div class="form_button">
        <button type="submit" class="btn">Sign In</button>
        <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
    </div>
</form>