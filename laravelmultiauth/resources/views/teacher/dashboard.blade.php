<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome to Dashboard </h1>

<form action="{{route('teacher.logout')}}" method="post">
    @csrf
</form>
</body>
</html>
