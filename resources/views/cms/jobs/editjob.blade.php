@extends('cms.master.master')
@section('content')
<div class="col col-md-10" style="background-color: #F5F7FA">
    <div style="border: 1px solid #ddd;border-radius: 5px;padding-top: 50px;padding-left: 20px;padding-right: 20px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <p></p><h2 align="center" class="page-header">Sửa bài đăng</h2><p></p>
            </div>
        </div>
        @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('thongbao') }}</strong>
            </div>
        @endif
        <hr>

        <form action="" method="post">@csrf
            <div class="row">
                <div class="col-xs-6 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                        <form action="" method="post">@csrf
                            <div class="panel-body">
                                <div class="row" style="margin-bottom:40px">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    
                                                    <p>Công ty: CT1</p>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Danh mục</label>
                                                    <select name="category" class="form-control">
                                                        @foreach ($category as$item)
                                                        <option value="{{ $item->id }}" @if ($jobs->category->id == $item->id)
                                                            selected
                                                        @endif >{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-12">Mã Job</label>
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
                                                    <input type="number" name="salary" min="0" class="form-control" value="{{ $jobs->salary }}">
                                                    {{ShowErrors($errors, 'salary')}}
                                                </div>
                                                <div class="form-group">
                                                    <label>Kinh nghiệm</label>
                                                    <input type="text" name="experience" class="form-control"value="{{ $jobs->experience }}">
                                                    {{ShowErrors($errors, 'experience')}}
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Thời gian làm việc</label>
                                                    <input type="text" name="nature" class="form-control"value="{{ $jobs->nature }}">
                                                    {{ShowErrors($errors, 'nature')}}
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ảnh sản phẩm</label>
                                                    <input id="img" type="file" name="logo" class="form-control hidden" style="display: none!important;" onchange="changeImg(this)">
                                                        <img id="avatar" class="thumbnail" style="cursor: pointer;" width="100%" height="350px" src="img/{{ $jobs->logo }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Thông tin công ty</label>
                                                    <textarea id="editor" name="info_company" style="width: 100%;height: 100px;">{{ $jobs->info_company }}</textarea>
                                                    <script src={{ url('/ckeditor/ckeditor.js') }}></script>
                                                    <script>CKEDITOR.replace( 'info_company');</script>
                                                </div>
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
                                                <button class="btn btn-success" name="add-product" type="submit">Upadate Job</button>
                                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                            </div>
                                        </div>
                                    <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>    
        </form>
    </div>
</div>
@endsection
@section('script')
    @parent
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