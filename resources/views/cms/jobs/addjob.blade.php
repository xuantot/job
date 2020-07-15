@extends('cms.master.master')
@section('content')
<div class="col col-md-10" style="background-color: #F5F7FA">
    <div style="border: 1px solid #ddd;border-radius: 5px;padding-top: 50px;padding-left: 20px;padding-right: 20px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <p></p><h1 align="center" class="page-header">Add sản phẩm</h1><p></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                                    <div class="col-md-8">
                                        <!-- <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="category" class="form-control">
                                                <option value='1' selected>Nam</option>
                                                <option value='3'>---|Áo khoác nam</option>
                                                <option value='2'>Nữ</option>
                                                <option value='4'>---|Áo khoác nữ</option>
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="single_input">

                                                <label>Danh mục</label>
                                                <select class="wide" style="display: none;">
                                                    <option data-display="Category">Category</option>
                                                    <option value="1">Category 1</option>
                                                    <option value="2">Category 2</option>
                                                    <option value="4">Category 3</option>
                                                </select><div class="nice-select wide" tabindex="0"><span class="current">Category</span><ul class="list"><li data-value="Category" data-display="Category" class="option selected focus">Category</li><li data-value="1" class="option">Category 1</li><li data-value="2" class="option">Category 2</li><li data-value="4" class="option">Category 3</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mã sản phẩm</label>
                                            <input type="text" name="code" class="form-control" value="SP01">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control" value="Sản phẩm 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input type="number" name="price" class="form-control" value="150000">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Ảnh sản phẩm</label>
                                            <input id="img" type="file" name="img" class="form-control hidden" style="display: none!important;" onchange="changeImg(this)">
                                                <img id="avatar" class="thumbnail" style="cursor: pointer;" width="100%" height="350px" src="img/import-img.png">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thông tin</label>
                                            <textarea name="info" style="width: 100%;height: 100px;"></textarea>
                                        </div>
                                    </div>
                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Miêu tả</label>
                                        <textarea id="editor" name="describe" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                    <p>
                                    <button class="btn btn-success" name="add-product" type="submit">Sửa sản phẩm</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                    </p>
                                <coccocgrammar></coccocgrammar></div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>    
    </div>
</div>
@endsection