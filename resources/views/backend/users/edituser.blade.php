@extends('backend.master.master')

@section('title', "Sửa quản trị viên")
	
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa quản trị viên</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <form method="POST">
            @csrf
            <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên: {{ $user->email }}</div>
                        @if (session('thongbao'))
                            <div class="alert alert-success" role="alert">
                                <strong>{!! session('thongbao') !!}</strong>
                            </div>
                        @endif
                        <div class="panel-body">
                            <div class="row justify-content-center" style="margin-bottom:40px">

                                <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                        {!! ShowErrors($errors,'email') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>password</label>
                                        <input type="text" name="password" class="form-control" ">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="full" name="name" class="form-control" value="{{ $user->name }}">
                                        {!! ShowErrors($errors,'name') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="address" name="address" class="form-control" value="{{ $user->address }}">
                                        {!! ShowErrors($errors,'address') !!}
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}">
                                        {!! ShowErrors($errors,'phone') !!}
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="level" class="form-control" value="">
                                            <option @if ($user->level==1) selected @endif value="1">admin</option>
                                            <option @if ($user->level==2) selected @endif value="2">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                    
                                        <button class="btn btn-success"  type="submit">Sửa quản trị viên</button>
                                        {{--  <button </button>  --}}
                                            <a  href="/admin/user" class="btn btn-danger"   type="reset">Huỷ bỏ</a>
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

    