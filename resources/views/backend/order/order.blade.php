@extends('backend.master.master')
@section('title', "Order")
@section('order')
class="active";
@endsection
@section('content')
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Bài đăng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bài đăng chưa xử lý</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">

								<a href="/admin/order/processed" class="btn btn-success">Bài đăng đã xử lý</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên khách hàng</th>
											<th>Công ty</th>
											<th>Sđt</th>
											<th>Địa chỉ</th>
											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($customer as $row)
											
										
											<tr>
												<td>1</td>
												<td>Quang Thanh</td>
												<td>Công ty TNHH HN</td>
												<td>0147258369</td>
												<td>Hà Nội</td>
												<td>
													<a href="/admin/order/detail" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Xử lý</a>

												</td>
											</tr>
										@endforeach
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
	