@extends ('layout')
@section('content')
<div class="row">
    <b class="col-lg-12">


        <h1> Post list</h1>


@if(session('success'))

<div class="alert alert-success">{{session('success')}}</div>

@endif

        <a href="{{route('posts.create')}}" class="btn btn-success float-right">New Post</a>
        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Details</th>
                <th>Action</th>


            </tr>
            @php $i = 1 @endphp
            @foreach ($posts as $post )
                <tr>
                <td><b> {{$i++}} </b></td>
                    <td><b> {{$post->name}} </b></td>
                    <td><b> {{$post->detail}} </b></td>
                    <td><img src="/images/{{ $post->image }}" width="200px" height="150px" alt=""></td>

                    <td>Edit

                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>

            @endforeach
            </table>


    </div>
</div>
@endsection
