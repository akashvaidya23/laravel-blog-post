<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    @include('common.navbar')
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="/postLogin" method="post">
        @csrf
        <div class="title">
            <h4>Login Page</h4>
        </div>
        <br>
        <div class="main">
            <div>
                <label for="name">Email</label>
                <br>
                <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off">
            </div>
            <br>
            <div>
                <label for="name">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Enter your Password" autocomplete="off">
            </div>
        </div>
        <br>
        <div class="button">
            <button class="btn btn-dark">Login</button>
        </div>
    </form>
</body>
</html>