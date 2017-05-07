@extends('layouts.master')

@section('content')
<div class="row">
   @include('partials.errors')
    <div class="col-md-12">
        <h2>Login Form</h2>

        <form action="{{route('admin.create')}}" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>
          {{csrf_field()}}
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection