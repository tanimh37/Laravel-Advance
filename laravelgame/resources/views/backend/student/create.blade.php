@extends('backend.app')
@section('content')
<form action="{{route(student.store)}}" class="parsley-examples" method="post">
    @csrf
    <div class="form-group">
        <label for="userName">Name<span class="text-danger">*</span></label>
        <input type="text" name="name" parsley-trigger="change" required
            placeholder="Enter user name" class="form-control" id="userName">
    </div>
    <div class="form-group">
        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
        <input type="email" name="email" parsley-trigger="change" required
            placeholder="Enter email" class="form-control" id="emailAddress">
    </div>
    <div class="form-group">
        <label for="phone">Phone<span class="text-danger">*</span></label>
        <input id="pass1" type="text" name="phone" placeholder="Phone" required
            class="form-control">
    </div>
    <div class="form-group">
        <label for="address">Address <span class="text-danger">*</span></label>
        <textarea name="address" id="" placeholder="Enter your Address"></textarea>
    </div>


    <div class="form-group text-right mb-0">
        <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
            Submit
        </button>
        <button type="reset" class="btn btn-light waves-effect">
            Cancel
        </button>
    </div>

</form>
@endsection
