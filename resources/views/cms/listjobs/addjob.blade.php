@extends('cms.master.master')
@section('title', "Add Job")
    
@section('content')
    

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Job</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Thêm Job</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                         
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select name="category" class="form-control">
                                            <option value='1' selected>Design &amp; Creative</option>
                                            <option value='2'>Marketing</option>
                                            <option value='3'>Telemarketing</option>
                                            <option value='4'>Software &amp; Web</option>
                                            <option value='5'>Administration</option>
                                            <option value='6'>Teaching &amp; Education</option>
                                            <option value='7'>Engineering</option>
                                            <option value='8'>Garments / Textile</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mã Job</label>
                                        <input type="text" name="code" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên Job</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mức lương mong muốn</label>
                                        <input type="number" name="price" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Trình độ</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Vị trí tuyển dụng</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Thời gian làm việc</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa điểm</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input id="img" type="file" name="img" class="form-control hidden"
                                            onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="img/import-img.png">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Thông tin công ty</label>
                                        <textarea name="info" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                 </div>

                 
                    
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả công việc</label>
                                    <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <button class="btn btn-success" name="add-product" type="submit">Thêm Job</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
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
    
    