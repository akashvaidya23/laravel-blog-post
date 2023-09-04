<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    @include('common.navbar')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/registerUser" method="post">
        @csrf
        <div class="title">
            <h4>Register Here</h4>
        </div>
        <br>
        <div class="main">
            <div>
                <label for="name">Name</label>
                <br>
                <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off" value="">
            </div>
            <br>
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
            <br>
            <div>
                <label for="confirm_password">Confirm Password</label>
                <br>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" autocomplete="off">
            </div>
        </div>
        <br>
        <div class="button">
            <button class="btn btn-dark">Register</button>
        </div>
    </form>
</body>
</html>