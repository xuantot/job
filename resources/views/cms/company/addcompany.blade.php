@extends('cms.master.master')
@section('title',"Company")
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm công ty mới</h1>
        </div>
        
    </div>
    <!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                {{--  <div class="panel-heading"><i class="fas fa-user"></i> Thêm quản trị viên</div>  --}}
                <div class="panel-body">
                    <div class="row justify-content-center" style="margin-bottom:40px">

                        <div class="col-md-8 col-lg-8 col-lg-offset-2">
                         
                            <form  method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Mã số công ty</label>
                                    <input type="code" name="code" class="form-control">
                                    @if($errors->has('code'))
                                    <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('code')}}</strong>
                                    </div>
                                    @endif
                                </div>
                            <div class="form-group">
                                <label>Tên công ty</label>
                                <input type="full" name="name" class="form-control">
                                @if($errors->has('name'))
                                <div class="alert alert-danger" role="alert">
                                <strong>{{$errors->first('name')}}</strong>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="address" name="address" class="form-control">
                                @if($errors->has('address'))
                                    <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('address')}}</strong>
                                    </div>
                                @endif
                            </div>
                           
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="phone" name="hotline" class="form-control">
                                @if($errors->has('hotline'))
                                    <div class="alert alert-danger" role="alert">
                                    <strong>{{$errors->first('hotline')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Thông tin</label>
                                <textarea style="width: 100%" name="info_company" id="" cols="30" rows="5"></textarea>
                                {{--  <input type="address" name="info_company" class="form-control">  --}}
                            </div>
                        
                            <div class="form-group" style="text-align:center">
                           
                                <button class="btn btn-success"  type="submit">Thêm công ty</button>
                                <a href="/company/cms/company" class="btn btn-danger" type="reset">Huỷ bỏ</a>
                            </div>
                        </form>
                        </div>
                      
                       
                        

                    </div>
                
                    <div class="clearfix"></div>
                </div>
            </div>

    </div>
</div>

    <!--/.row-->
</div>
@endsection