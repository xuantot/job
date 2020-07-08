@extends('backend.master.master')
@section('title', "Update Company")

@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý Công ty</h1>
			</div>
		</div>
		<!--/.row-->


		{{-- <div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">

								<div class="form-group">
									<label for="">Tên Công ty</label>
									<input type="text" class="form-control" name="name" id="" placeholder="Tên Công ty mới" value="Marketing">
									<div class="alert bg-danger" role="alert">
										<svg class="glyph stroked cancel">
											<use xlink:href="#stroked-cancel"></use>
										</svg>Tên Công ty đã tồn tại!<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Sửa Công ty</button>
							</div>
							<div class="col-md-7">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> Đã thêm Công ty thành công! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<h3 style="margin: 0;"><strong>Danh sách Công ty</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Công ty </div>
									<div class="item-menu"><span>Design &amp; Creative</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Marketing</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Telemarketing</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Software &amp; Web</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Administration</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Teaching &amp; Education</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Engineering</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Garments &amp; Textile</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/admin/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
			<!--/.col-->


		</div> --}}
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading"><i class="fas fa-user"></i> Chi tiết công ty</div>
						<form method="post">@csrf
							<div class="panel-body">
								<div class="row justify-content-center" style="margin-bottom:40px">
		
									<div class="col-md-8 col-lg-8 col-lg-offset-2">
										<div class="form-group">
											<label>Mã số thuế</label>
											{{-- <input type="full" name="code" class="form-control" value="{{ $company->code }}">
											{{ ShowErrors($errors, 'code') }} --}}
											<p class="form-control">{{ $company->code }}</p>
										</div>
										<div class="form-group">
											<label>Tên công ty</label>
											<input type="full" name="name" class="form-control"value="{{ $company->name }}">
											{{ ShowErrors($errors, 'name') }}
										</div>
										<div class="form-group">
											<label>Địa chỉ</label>
											<input type="address" name="address" class="form-control"value="{{ $company->address }}">
											{{ ShowErrors($errors, 'address') }}
										</div>
										<div class="form-group">
											<label>Hotline</label>
											<input type="phone" name="hotline" class="form-control"value="{{ $company->hotline }}">
											{{ ShowErrors($errors, 'hotline') }}
										</div>
										
											<div class="form-group">
												<label>Thông tin công ty</label>
												<textarea id="edittor" name="info_company" style="width: 100%;height: 100px;">{{ $company->info_company }}</textarea>
												<script src={{ url('/ckeditor/ckeditor.js') }}></script>
												<script>CKEDITOR.replace( 'info_company');</script>
												{{ ShowErrors($errors, 'info_company') }}
											</div>
									
									
										
									</div>
									<div class="row">
										<div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
										
											<button class="btn btn-success"  type="submit">Update</button>
											<button class="btn btn-danger" type="reset">Huỷ bỏ</button>
										</div>
									</div>
								
		
								</div>
							
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
	
			</div>
		</div>
	</div>

@endsection

@section('scrip')
<script>
	$('#calendar').datepicker({});

	! function ($) {
		$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
			$(this).find('em:first').toggleClass("glyphicon-minus");
		});
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>
@endsection

