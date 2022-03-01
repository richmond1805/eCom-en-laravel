@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-12 col-sm-offset-4">
            <form action="register" method="POST" >
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="test" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>
    </div>
</div>
@endsection