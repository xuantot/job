@extends('backend.master.master')
@section('title', "Edit Job")
@section('job')
class="active";
@endsection
    
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Job</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            @if (session('thongbao'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('thongbao') }}</strong>
                </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa Job</div>
                <form method="post" enctype="multipart/form-data">@csrf
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="category" class="form-control">
                                                @foreach ($category as$item)
                                                <option value="{{ $item->id }}" @if ($jobs->category->id == $item->id)
                                                    selected
                                                @endif >{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Công ty</label>
                                            <select name="company" class="form-control">
                                                @foreach ($company as $item)
                                                <option value="{{ $item->id }}" @if ($jobs->company->id == $item->id)
                                                    selected
                                                @endif >{{ $item->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Mã Job</label>
                                            <input type="text" name="job_code" class="form-control" value="{{ $jobs->job_code }}">
                                            {{ShowErrors($errors, 'job_code')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Job</label>
                                            <input type="text" name="job_name" class="form-control" value="{{ $jobs->job_name }}">
                                            {{ShowErrors($errors, 'job_name')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Mức lương mong muốn</label>
                                            <input type="number" name="salary" class="form-control" value="{{ $jobs->salary }}">
                                            {{ShowErrors($errors, 'salary')}}
                                        </div>
                                        <div class="form-group">
                                            <label>Kinh nghiệm</label>
                                            <input type="text" name="experience" class="form-control" value="{{ $jobs->experience }}">
                                            {{ShowErrors($errors, 'experience')}}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Thời gian làm việc</label>
                                            <input type="text" name="nature" class="form-control" value="{{ $jobs->nature }}">
                                            {{ShowErrors($errors, 'nature')}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <input id="img" type="file" name="logo" class="form-control hidden"
                                                onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="img/{{ $jobs->logo }}">
                                            {{ShowErrors($errors, 'logo')}}
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thông tin công ty</label>
                                            <textarea id="editor" name="info_company" style="width: 100%;height: 100px;">{{ $jobs->company->info_company }}</textarea>
                                            <script src={{ url('/ckeditor/ckeditor.js') }}></script>
                                            <script>CKEDITOR.replace( 'info_company');</script>
                                        </div>
                                    </div>

                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mô tả công việc</label>
                                        <textarea id="editor" name="info_job" style="width: 100%;height: 100px;">{{ $jobs->info_job }}</textarea>
                                        <script src={{ url('/ckeditor/ckeditor.js') }}></script>
                                            <script>CKEDITOR.replace( 'info_job');</script>
                                    </div>
                                    <button class="btn btn-success" name="add-product" type="submit">Sửa Job</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!--/.row-->
</div>
@endsection

@section('script')
<script>

    function changeImg(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function (e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        $('#avatar').click(function () {
            $('#img').click();
        });
    });

</script>
@endsection

