@extends('cms.login.master')
@section('content')


    <div class="row ">
        <div class="col-md-4 container" style="top: 50px;margin-bottom: 100px;">
            <div align ="center"><h3>Đăng ký</h3></div>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" >
                
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" >
                
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" >
                
                    </div>
                    <div class="form-group">
                        <div class="single_input">
                            <label>Tùy chọn</label>
                            <select class="wide" style="display: none;">
                                <option data-display="Category">Category</option>
                                <option value="1">Tuyển việc</option>
                                <option value="2">Tim việc</option>
                                
                              </select><div class="nice-select wide" tabindex="0"><span class="current">Tùy chọn</span><ul class="list"><li data-value="Category" data-display="Category" class="option selected focus">Tùy chọn</li><li data-value="1" class="option">Tuyển việc</li><li data-value="2" class="option">Tìm việc</li></ul></div>
                        </div>
                    </div>
                    

                    <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Đăng ký</button>
                    
                </form>
    
            </div>
    </div>

    @endsection

    