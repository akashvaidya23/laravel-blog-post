<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    @php
        $user = Session::get('name');
    @endphp
    @include('common.navbar')
    <div>
        <div style="margin:5px;float:right">
            <a href="/createPost" class="btn btn-dark">Add New Post</a>
        </div>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="border:1px solid black">Sr.No</th>
                    <th style="border:1px solid black">Category</th>
                    <th style="border:1px solid black">Title</th>
                    <th style="border:1px solid black">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td style="border:1px solid black">{{ $posts->firstItem()+$loop->index }}</td>
                        <td style="border:1px solid black">
                            @if($post->category == 1)
                                Food Blog
                            @elseif($post->category == 2)
                                Travel Blog
                            @else
                                History Blog
                            @endif
                        </td>
                        <td style="border:1px solid black">{{$post->title}}</td>
                        <td style="border:1px solid black">
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach()
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</body>
</html>