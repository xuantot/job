@extends('backend.master.master')
@section('title', " Detail Order")
@section('order')
class="active";
@endsection

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
					<form method="post"> @csrf
						<div class="panel-body">
							<div class="bootstrap-table">
								<div class="table-responsive">
									<div class="form-group">
										<div class="row">
											<div class="col-md-6">
												<div class="panel panel-blue">
													<div class="panel-heading dark-overlay">Thông tin khách hàng</div>
													<div class="panel-body">
														<strong><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Công ty : {{ $customer->company->name }}</strong> <br>
														<strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Họ tên : {{ $customer->name }}</strong> <br>
														<strong><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Số điện thoại: {{ $customer->phone }}</strong>
														<br>
														<strong><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Địa chỉ : {{ $customer->company->address }}</strong>
													</div>
												</div>
											</div>
										</div>


									</div>
									@if (session('thongbao'))
										<div class="alert alert-success" role="alert">
											<strong>{{ session('thongbao') }}</strong>
										</div>
									@endif
									<table class="table table-bordered" style="margin-top:20px;">

										<thead>
											<tr class="bg-primary">
												<th>ID</th>
												<th>Thông tin Job</th>
												<th>Tên công ty</th>
												<th>Danh mục</th>
												<th>Mức lương</th>
												<th>Tùy chọn</th>
												
											</tr>
										</thead>
										<tbody>
											@foreach ($jobs as $key=> $row)
												
													<tr>
														<td><input name="id[{{ $row->id }}]" type="hidden" value="{{ $row->id }}" >{{ $key+1 }}</td>
														<td>
															<div class="row">
																<div class="col-md-3"><img src="img/{{ $row->logo }}"  width="100px" class="thumbnail"></div>
																<div class="col-md-9" style="padding-left: 30px">
																	<p><strong>Mã Job : {{ $row->job_code }}</strong></p>
																	<p>Tên sản phẩm : {{ $row->job_name }}</p>
																	
																	<p>Kinh nghiệm làm việc: {{ $row->experience }}</p>
																	
																	<p>Thời gian: {{ $row->nature }}</p>
																	<p>Địa điểm: {{ $row->company->address }}</p>
										
																</div>
															</div>
														</td>
														<td>
															{{ $row->company->name }}
														</td>
														<td>{{ $row->category->name }}</td>
														<td>{{ number_format($row->salary,0,'','.') }}VNĐ</td>
														
														
														<td>
															<a href="/admin/order/detail/update/{{ $row->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Duyệt</a>
															<a onclick='return del_job("{{ $row->job_name }}")' href="/admin/order/detail/delete/{{ $row->id }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hủy bỏ</a>
														</td>
													</tr>
												
											@endforeach


										</tbody>
									</table>
									<div class="alert alert-primary" role="alert" align='right'>
										<button onclick='return update_all()' type="submit" class="btn btn-success">Duyệt tất cả</button>
										<a href="/admin/order/processed" class="btn btn-danger">Quay lại</a>
									</div>
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
	<script>
		function del_job(compa){
			return confirm('Bạn có muốn bỏ qua job: '+compa+' ?')
		}

		function update_all(){
			return confirm('Bạn có muốn phê duyệt tất cả ?')
		}
	</script>
@endsection