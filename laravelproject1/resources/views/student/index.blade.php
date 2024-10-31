<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('msg') )
    <div class="alert"> {{session('msg')}}</div>
    @endif
<h1>Students Full Information</h1>

<ul>
    @foreach($mystudents as $student)

    <li>
        Name:{{$student->name}} <br>  Email:{{$student->email}} <br> Phone: {{$student->phone}} <hr>
    </li>
    @endforeach
</ul>
</body>
</html>
