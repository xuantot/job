@extends('cms.master.master')
@section('title',"Company")
@section('company')
active
@endsection
@section('content')
<div class="col-md-10">
    <div style="border: 1px solid #ddd;border-radius: 5px;padding-top: 50px;padding-left: 20px;padding-right: 20px;padding-bottom: 50px;">

        <div class="row">
            <div class="col-lg-12">
                <p><h1 align="center" class="page-header">Danh sách công ty</h1></p>
            </div>
           
        </div>
    

        <div class="row"style="width:100%;" >
            <div class=" col-md-12 ">
                <form action="/company/cms/company" method="get">
                    <div class="catagory_area" style="padding-top: 20px;padding-bottom: 20px;">
                        <div class="container">
                            <div class="row cat_search">
                                <div class="col-lg-9 col-md-4">
                                    <div class="single_input">
                                        <input name="name" type="text" placeholder="Search keyword">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-12">
                                    <div class="job_btn">
                                        <button type="submit" class="boxed-btn3">Find Company</button>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </form>
                <div class="panel panel-primary">

                    
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <div class="table-responsive">
                                    {{--  <div class="alert bg-success" role="alert">
                                        
                                    </div>  --}}
                                    <a href="/company/cms/company/add" class="btn btn-primary">Thêm công ty</a>
                                    @if (session('thongbao'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>{{ session('thongbao') }}</strong>
                                        </div>
                                    @endif
                                    
                                        <table class="table table-bordered" style="margin-top:20px;">
            
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    
                                                    <th>Address</th>
                                                    <th>Hotline</th>
                                                    <th>Info</th>
                                                    <th width='17%'>Tùy chọn</th>
                                                </tr>
                                            </thead>
                                            <tbody>                               
                                            @foreach ($company as $row)
                                                
                                            <form   method="post">@csrf
                                                    <tr>
                                                        
                                                    
                                                    
                                                        <td><input name="id" type="hidden" value='{{ $row->id }}'>{{ $row->id }}</td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->address }}</td>
                                                        <td>{{ $row->hotline }}</td>
                                                        <td>{{ $row->info_company }}</td>
                                                    
                                                        <td>
                                                            
                                                        <button onclick='return update("{{ $row->name }}")' type="submit" class="btn btn-warning"> Chọn</button>
                                                            {{--  <a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>  --}}
                                                        </td>
                                                    </tr>
                                                </form>
                                            @endforeach
                                        
                                            </tbody>
                                        </table>
                                    
                                    <div  style="align:right">
                                        <ul class="pagination"  style="align:right">
                                            {{ $company->links() }}
                                        </ul>
                                        <br>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
        
                        </div>
                
                </div>
                <!--/.row-->

            </div>
            </div>
        </div>
    </div>
</div>
<script>
    function update(company){
        return confirm('Bạn có muốn chọn công ty: '+company+' ?')
    }
</script>
@endsection