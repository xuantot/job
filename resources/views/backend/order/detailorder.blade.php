@extends('backend.master.master')
@section('title', " Detail Order")

@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Bài đăng / Chi tiết bài đăng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Chi tiết bài đăng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
											<div class="panel panel-blue">
												<div class="panel-heading dark-overlay">Thông tin khách hàng</div>
												<div class="panel-body">
													<strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> : Công ty TNHH HN</strong> <br>
													<strong><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : Số điện thoại: 0147258369</strong>
													<br>
													<strong><span class="glyphicon glyphicon-send" aria-hidden="true"></span> : Hà Nội</strong>
												</div>
											</div>
										</div>
									</div>


								</div>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin Job</th>
											<th>Mức lương</th>
											<th>Vị trí tuyển dụng</th>
											
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="img/1.svg" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p><strong>Mã Job : JB01</strong></p>
														<p>Tên sản phẩm : Creative Designer</p>
														
														<p>Địa điểm: California, USA</p>
													
							
													</div>
												</div>
											</td>
											<td>20000000VNĐ</td>
											<td>
												Leader
											</td>
											
										</tr>
										<tr>
											<td>1</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="img/2.svg" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p><strong>Mã Job : JB02</strong></p>
														<p>Tên sản phẩm : Creative Designer</p>
														
														<p>Địa điểm: California, USA</p>
														
							
													</div>
												</div>
											</td>
											<td>20000000VNĐ</td>
											<td>
												Leader
											</td>
											
										</tr>

									</tbody>
								</table>
								<div class="alert alert-primary" role="alert" align='right'>
									<a name="" id="" class="btn btn-success" href="/admin/order/processed" role="button">Xử lý</a>
								</div>
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