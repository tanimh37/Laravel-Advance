<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ID:{{$post->id}}</h3>
    <h2>Post Title: {{$post->name}}</h2>

    <h1>Comment</h1>

    <ul>
        @foreach ($comments as $comment)
        <li>
            {{$comment->name}}
        </li>

        @endforeach
    </ul>

</body>

</html>
