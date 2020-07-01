@extends('backend.master.master')
@section('title', " Processed Order")

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Bài đăng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bài đăng đã xử lý</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="/admin/order" class="btn btn-warning"><span class="glyphicon glyphicon-gift"></span>Bài đăng chưa xử lý</a>
								<table class="table table-bordered" style="margin-top:20px;">				
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Công ty TNHH HN</td>
                                            <td>Lu@gmail.com</td>
                                            <td>0147258369</td>
                                            <td>Hà Nội</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Công ty TNHH HN</td>
                                            <td>Lu@gmail.com</td>
                                            <td>0147258369</td>
                                            <td>Hà Nội</td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
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
	