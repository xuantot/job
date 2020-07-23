@extends('backend.master.master')
@section('title', "List Job")
	
@section('job')
class="active";
@endsection
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách Jobs</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách Jobs</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					@if (session('thongbao'))
						<div class="alert alert-success" role="alert">
							<strong>{{ session('thongbao') }}</strong>
						</div>
					@endif
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="/admin/job/add" class="btn btn-primary">Thêm Job</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin Job</th>
											<th>Tên công ty</th>
											<th>Mức lương</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($jobs as $row)
											<tr>
												<td>{{ $row->id }}</td>
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
												<td>{{ number_format($row->salary,0,'','.') }}VNĐ</td>
												
												<td>{{ $row->category->name }}</td>
												<td>
													<a href="/admin/job/edit/{{ $row->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
													<a onclick='return del_company("{{ $row->job_name }}")' href="/admin/job/delete/{{ $row->id }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
												</td>
											</tr>
										@endforeach

									</tbody>
								</table>
								<div align='right'>
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
	<script>
		function del_company(compa){
			return confirm('Bạn có muốn xóa job: '+compa+' ?')
		}
	</script>

@endsection

			