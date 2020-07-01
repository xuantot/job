@extends('cms.master.master')
@section('title', "Danh mục Job")

@section('content')
	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">

								{{-- <div class="form-group">
									<label for="">Danh sách danh mục:</label>
									<select class="form-control" name="" id="">
										<option>----ROOT----</option>
										<option>Design &amp; Creative</option>
										<option>Marketing</option>
										<option>Telemarketing</option>
										<option>Software &amp; Web</option>
										<option>Administration</option>
										<option>Teaching &amp; Education</option>
										<option>Engineering</option>
										<option>Garments / Textile</option>
									</select>
								</div> --}}
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name" id="" placeholder="Tên danh mục mới">

									<div class="alert bg-danger" role="alert">
										<svg class="glyph stroked cancel">
											<use xlink:href="#stroked-cancel"></use>
										</svg>Tên danh mục đã tồn tại!<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Thêm danh mục</button>
							</div>
							<div class="col-md-7">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> Đã thêm danh mục thành công! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<h3 style="margin: 0;"><strong>Danh sách danh mục</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									<div class="item-menu"><span>Design &amp; Creative</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Marketing</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Telemarketing</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Software &amp; Web</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Administration</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Teaching &amp; Education</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Engineering</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
											<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>

										</div>
									</div>
									<div class="item-menu"><span>Garments &amp; Textile</span>
										<div class="category-fix">
											<a class="btn-category btn-primary" href="/company/cms/category/edit"><i class="fa fa-edit"></i></a>
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


		</div>
		<!--/.row-->
	</div>
	
@endsection