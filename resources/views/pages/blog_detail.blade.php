<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        a {
            text-decoration: none;
            border: 1px solid purple;
            border-radius: 5px;
            background-color: purple;
            color: white;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo '<div class="text-alert">' . $message . '</div>';
        Session::get('message', null);
    }
    ?>
    @foreach($edit_blog as $values)
    <form action="{{URL::to('/update_blog/'.$values->id)}}" method="post">
        @csrf
        <div>
            <label for="">Title: </label>
            <input type="text" name="blog_title" placeholder="title" required value="{{ $values->title}}">
        </div>
        <div>
            <label for="">Content</label>
            <textarea name="blog_content" id="" cols="30" rows="10" placeholder="content" required>{{ $values->content}}</textarea>
        </div>
        <div>
            <button type="submit" name="update_blog">Update</button>
            <a href="{{URL::to('/blog')}}">Home</a>
        </div>
    </form>
    <form action="{{URL::to('/delete_blog/'.$values->id)}}" method="get">
        <button type="submit" name="delete_blog">Delete</button>
    </form>

    @endforeach()
</body>

</html>
