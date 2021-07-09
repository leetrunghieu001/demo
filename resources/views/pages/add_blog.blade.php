<?php

use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add blog</title>
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
    <form action="{{URL::to('/save_blog')}}" method="post">
        @csrf
        <div>
            <label for="">Title: </label>
            <input type="text" name="title_blog" placeholder="title" required>
        </div>
        <div>
            <label for="">Content</label>
            <textarea name="content_blog" id="" cols="30" rows="10" placeholder="content" required></textarea>
        </div>
        <div>
            <button type="submit" name="add_blog">Add</button>
            <a href="{{URL::to('/blog')}}">Home</a>
        </div>
    </form>
</body>

</html>
