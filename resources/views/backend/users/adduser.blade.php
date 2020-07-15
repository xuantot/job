@extends('backend.master.master')

@section('title', "Thêm quản trị viên")
@section('user')
class="active";
@endsection
	
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm quản trị viên</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <form method="POST">
            @csrf
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Thêm quản trị viên</div>
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">

                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                             
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" type="email" value="{{ old('email') }}" class="form-control">
                                  {!! ShowErrors($errors,'email')  !!}
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="text" name="password" class="form-control" value="{{ old('password') }}">
                                    {!! ShowErrors($errors,'password')  !!}
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="full" name="name" class="form-control" value="{{ old('name') }}">
                                    {!! ShowErrors($errors,'name')  !!}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" name="address" class="form-control" value="{{ old('address') }}">
                                    {!! ShowErrors($errors,'address')  !!}
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="phone" name="phone" class="form-control" value="{{ old('phone') }}">
                                    {!! ShowErrors($errors,'phone')  !!}
                                </div>
                              
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control">
                                        <option value="1">admin</option>
                                        <option selected value="2">user</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                  
                                    <button class="btn btn-success"  type="submit">Thêm quản trị viên</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                           

                        </div>
                    
                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    
    
    </form>
    </div>

        <!--/.row-->
    </div>

    @endsection

    