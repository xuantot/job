@extends('cms.master.master')
@section('title', "Order")

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
					<div class="row">
						
						<div class="col-xs-12 col-md-12 col-lg-12">
			
							<div class="panel panel-primary">
								
			
								<div class="panel-body">
									<a href="/company/cms/order/processed" class="btn btn-success">Bài đăng đã xử lý</a>
									<div class="bootstrap-table">
										<div class="table-responsive">
											
											<table class="table table-bordered" style="margin-top:20px;">
			
												<thead>
													<tr class="bg-primary">
														<th>ID</th>
														<th>Thông tin Job</th>
														<th>Mức lương</th>
														<th>Vị trí tuyển dụng</th>
														<th>Danh mục</th>
														
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
																	<p>Thời gian: Part-time</p>
										
																</div>
															</div>
														</td>
														<td>20000000VNĐ</td>
														<td>
															Leader
														</td>
														<td>Software &amp; Web</td>
														
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
																	<p>Thời gian: Part-time</p>
										
																</div>
															</div>
														</td>
														<td>20000000VNĐ</td>
														<td>
															Leader
														</td>
														<td>Software &amp; Web</td>
														
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
			</div>
		</div>
		<!--/.row-->


	</div>

@endsection
	