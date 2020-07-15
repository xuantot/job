@extends('cms.login.master')
@section('content')
    

<div class="row ">
    <div class="col-md-4 container" style="top: 50px;margin-bottom: 100px;">
        <div align ="center"><h3>Đăng nhập</h3></div>
            <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <p>
                <button type="submit" class="btn btn-primary">Login</button></p>
            </form>

        </div>
</div>
@endsection
