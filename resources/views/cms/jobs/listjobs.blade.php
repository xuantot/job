@extends('cms.master.master')
@section('title',"List jobs")
    
@section('list_jobs')
    active
@endsection
@section('content')
    

<div class="col-md-10" style="background-color: #F5F7FA">
    <div style="border: 1px solid #ddd;border-radius: 5px;padding-top: 50px;padding-left: 20px;padding-right: 20px;padding-bottom: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <p ><h1 align="center" class="page-header">List Jobs</h1></p>
            </div>
        </div>
        <!--/.row-->
        <div class="row col-md-10"><ul>
            <li  style="display: inline" class="btn btn-info "><a href="/company/cms/job">Danh sách</a></li>
            <li  style="display: inline" class="btn btn-info "><a href="/company/cms/job/queue">Bài đăng chờ phê duyệt</a></li>
        </ul></div>
        @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('thongbao') }}</strong>
            </div>
        @endif
        <hr>
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">

                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="/company/cms/job/add" class="btn btn-primary">Thêm Job</a>
                                <table class="table table-bordered" style="margin-top:20px;">

                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Thông tin Job</th>
                                            <th>Tên công ty</th>
                                            <th>Mức lương</th>
                                            
                                            <th>Tùy chọn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach ($jobs as $key=> $row)
                                            
                                        
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-3"><img src="../backend/img/{{ $row->logo }}"  width="100px" class="thumbnail"></div>
                                                        <div class="col-md-9" style="padding-left: 30px">
                                                            <p><strong>Mã Job : {{ $row->job_code }}</strong></p>
                                                            <p>Tên sản phẩm: {{ $row->job_name }}</p>
                                                            <p>Danh mục: {{ $row->category->name }}</p>
                                                            <p>Kinh nghiệm làm việc: {{ $row->experience }}</p>
                                                            
                                                            <p>Thời gian: {{ $row->nature }}</p>
                                                            <p>Địa điểm: {{ $row->company->address }}</p>
                                
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $row->company->name }}
                                                </td>
                                                <td>{{ number_format($row->salary,0,'','.') }}VNĐ</td>
                                                
                                                
                                                <td>
                                                    <a href="/company/cms/job/edit/{{ $row->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                    <a onclick='return del_job("{{ $row->job_name }}")'  href="/company/cms/job/delete/{{ $row->id }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                </td>
                                            </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                                <div align='center'>
                                    <ul class="pagination">
                                        {{ $jobs->links() }}
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <!--/.row-->


            </div>
            <!--end main-->
        </div>
    </div>
</div>
<script>
    function del_job(job){
        return confirm('Bạn có muốn xóa job: '+job+' ?')
    }
</script>
@endsection