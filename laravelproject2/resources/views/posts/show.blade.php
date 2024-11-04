@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12">

<h2>Id:{{$post->id}}</h2> <br>
<h2>Name:{{$post->name}}</h2> <br>
<h2>Detail:{{$post->detail}}</h2><br>
Image: <img src="/images/{{$post->image}}" alt="">

    </div>
</div>

@endsection
