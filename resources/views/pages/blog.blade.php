<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <style>
        .new {
            text-decoration: none;
            border: 1px solid purple;
            border-radius: 5px;
            background-color: purple;
            color: white;
            padding: 5px 10px;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
 <a class="new" href="{{ URL::to('/')}}">Laravel</a>
    <a class="new" href="{{URL::to('/add_blog')}}">New blog</a>
    @foreach ($all_blog as $values)
    <a href="{{ URL::to('/edit_blog/'.$values->id)}}">
        <div style="width: 50%; background-color:violet; margin: auto">
            <h1>{{ $values->title}}</h1>
            <p>{{ $values->content}}</p>
        </div>
    </a>
    @endforeach
</body>

</html>
