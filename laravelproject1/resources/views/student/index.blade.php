<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    @if(session('msg') )
    <div class="alert alert-success"> {{session('msg')}}</div>
    @endif
    <h1>Students Full Information</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>



        @foreach($mystudents as $student)


        <tr>

            <td> {{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td> {{$student->email}}</td>
            <td> {{$student->phone}}</td>

            <td><a href="{{route('student.edit', $student->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route('student.destroy',$student->id)}}" method="POST">


                    @csrf
                    <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                </form>
            </td>

        </tr>

        @endforeach
    </table>

    

</body>

</html>
