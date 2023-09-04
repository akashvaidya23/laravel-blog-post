<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Posts</title>
    <link rel="stylesheet" href="/css/posts.css">
    
</head>
<body>
    @include('common.navbar')
    <form action="/storePost" method="post">
        @csrf
        <div class="title">
            <h4>Add Posts Here</h4>
        </div>
        <br>
        <div class="main">
            <div>
                <label for="name">Title</label>
                <br>
                <input type="text" name="title" id="title" placeholder="Enter your title" autocomplete="off" value="">
            </div>
            <br>
            <div>
                <label for="name">Email</label>
                <br>
                <select id="category" name="category">
                    <option selected>Select category</option>
                    <option value="1">Food Blog</option>
                    <option value="2">Travel Blog</option>
                    <option value="3">History Blog</option>
                </select>
            </div>
            <br>
            <div>
                <label for="confirm_password">Confirm Password</label>
                <br>
                <textarea name="description" id="description" cols="40" rows="5"></textarea>
            </div>
        </div>
        <br>
        <div class="button">
            <button class="btn btn-dark">Register</button>
        </div>
    </form>
</body>
</html>