<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL::asset('img/SI_ARFF.png') }}">
    <title>SI ARFF</title>
    <link rel="stylesheet" href="{{ URL::asset('css/login-style.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/SI_ARFF.png" alt="">
        </div>
        <div class="title text-center mt-4 name">
            SI ARFF
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a>
        </div>
    </div>
</body>
</html>