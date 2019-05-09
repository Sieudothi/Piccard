<!doctype html>
<html>
<head>
    @yield('head')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL:: to('css/main.css')}}">
    <link rel="stylesheet" href="{{URL:: to('css/home.css')}}">
    <meta name="viewport" content="width=device-width, initial=scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <script>
        // function signUp() {
        //     document.getElementById("form_container").style.display = "block";
        //     document.getElementById("signup_form").style.display = "flex";
        // }
        //
        // function signIn() {
        //     document.getElementById("form_container").style.display = "block";
        //     document.getElementById("signin_form").style.display = "flex";
        // }
        //
        // function closeForm() {
        //     document.getElementById("form_container").style.display = "none";
        //     document.getElementById("signup_form").style.display = "none";
        //     document.getElementById("signin_form").style.display = "none";
        // }


    </script>
</head>

<body>
    @yield('body')

        <header id="header">
            @yield('header')
        </header>

        <main id = "main">
            @yield('main')
        </main>

        <footer id = "footer">
            @yield('footer')
        </footer>

        @yield('form')

</body>
</html>