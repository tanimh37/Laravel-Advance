<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Student Edit Form</h2>
<form action="{{route('student.update',$student->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$student->name}}"> <br>
    <input type="text" name="email" value="{{$student->email}}"> <br>
    <input type="text" name="phone" value="{{$student->phone}}"> <br>
<input type="submit" name="submit" value="Update">

</form>
</body>
</html>
