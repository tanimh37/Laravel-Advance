<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> {{$title;}} </h1>
<p>{{$contant}}</p>

<h3>Fruits</h3>
<ul>
    @foreach($fruits as $fruit)

    <li>
        {{$fruit}}
    </li>
    @endforeach
</ul>
</body>
</html>
