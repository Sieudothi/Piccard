
{{--sign up form--}}

<form action="{{ route('user.store') }}" method="POST" class="form" id="signup_form">

    {!! csrf_field() !!}

    <h6>SIGN UP</h6>


    <label class="label" for= "name"><b>Username</b></label>
    <input class="input" type="text" placeholder="Username" name="username" value="{{ old('name') }}"><br>
    <div>{{ $errors->first('username') }}</div>


    <label class="label" for="email"><b>Email</b></label>
    <input class= "input" type="text" placeholder="Enter Email" name="email"
           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
           value="{{ old('email') }}"
           >
    <small id="emailHelp" >We'll never share your email with anyone else!</small>
    <div>{{$errors->first('email')}}</div>


    <label class = "label" for = "psw"><b>Password</b></label>
    <input class = "input" type ="password"  placeholder="Enter Password" name="password"
           pattern=  ".{1,}"
           title = "8 or more characters"
           value = "{{ old('password') }}"
           ><br>
    <div>{{$errors->first('password')}}</div>


    <label class="label" for="psw"><b>Confirm Password</b></label>
    <input class= "input" type="password" placeholder="Re-enter your password" name="password_confirm"
           value = "{{ old('password_confirm') }}"
           ><br>
    <div>{{$errors->first('password_confirm')}}</div>

    <div class="form_checkbox">
        <input type="checkbox">
        <label >Keep me logged in</label>
    </div>



    <div class="form_button">
        <button type="submit" >s Up</button>
        <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
    </div>




</form>















