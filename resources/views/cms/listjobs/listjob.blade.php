@extends('cms.master.master')
@section('title', "List Job")
    
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

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<a href="/company/cms/job/add" class="btn btn-primary">Thêm Job</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin Job</th>
											<th>Mức lương</th>
											<th>Vị trí tuyển dụng</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
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
														<p>Danh mục: Software &amp; Web</p>
														<p>Địa điểm: California, USA</p>
														<p>Thời gian: Part-time</p>
							
													</div>
												</div>
											</td>
											<td>20000000VNĐ</td>
											<td>
												Leader
											</td>
											<td>Software &amp; Web</td>
											<td>
												<a href="/company/cms/job/edit" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
														<p>Danh mục: Software &amp; Web</p>
														<p>Địa điểm: California, USA</p>
														<p>Thời gian: Part-time</p>
							
													</div>
												</div>
											</td>
											<td>20000000VNĐ</td>
											<td>
												Leader
											</td>
											<td>Software &amp; Web</td>
											<td>
												<a href="/company/cms/job/edit" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="#" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>

									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
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

@endsection

			