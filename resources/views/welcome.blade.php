<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            .main{
                display:flex;
                flex-flow:row;
                text-align:center;
                justify-content:center;
                margin-top:auto;
                margin-bottom:auto;
                /* float:right; */
            }
            a{
                text-decoration:none;
                cursor:pointer;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="main">
            <a href="/login">Login</a>
            <a style="margin-left:10px" href="/register">Sign Up</a>
        </div>
    </body>
</html>
