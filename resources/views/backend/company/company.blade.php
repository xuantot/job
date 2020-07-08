@extends('backend.master.master')
@section('title', "Danh sách Công ty")

@section('content')
	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Công ty</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý Công ty</h1>
			</div>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<form action="" method="post">@csrf
								<div class="col-md-7">
									<div class="form-group">
										<label for="">Mã số thuế</label>
										<input type="text" class="form-control" name="code" id="" placeholder="Mã số thuế">
										{{ ShowErrors($errors, 'code') }}
									</div>
									<div class="form-group">
										<label for="">Tên Công ty</label>
										<input type="text" class="form-control" name="name" id="" placeholder="Tên công ty mới">
										{{ ShowErrors($errors, 'name') }}
									</div>
									<div class="form-group">
										<label for="">Địa điểm</label>
										<input type="text" class="form-control" name="address" id="" placeholder="Địa chỉ công ty">
										{{ ShowErrors($errors, 'address') }}
									</div>
									<div class="form-group">
										<label for="">Hotline</label>
										<input type="text" class="form-control" name="hotline" id="" placeholder="Hotline">
										{{ ShowErrors($errors, 'hotline') }}
									</div>
									
									<div class="form-group">
										<label>Thông tin công ty</label>
										<textarea id="editor" name="info_company" style="width: 100%;height: 100px;"></textarea>
										<script src={{ url('/ckeditor/ckeditor.js') }}></script>
										<script>CKEDITOR.replace( 'info_company');</script>
									</div>

									<button type="submit" class="btn btn-primary">Thêm Công ty</button>
								</div>
							</form>
							<div class="col-md-5">
								@if (session('thongbao'))
									<div class="alert alert-success" role="alert">
										<strong>{{ session('thongbao') }}</strong>
									</div>
								@endif
								<h3 style="margin: 0;"><strong>Danh sách Công ty</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Công ty </div>
									@foreach ($companies as $row)
										
									
										<div class="item-menu"><span>{{ $row->name }}</span>
											<div class="category-fix">
												<a class="btn-category btn-primary" href="/admin/company/edit/{{ $row->id }}"><i class="fa fa-edit"></i></a>
												<a onclick='return del_company("{{ $row->name }}")' class="btn-category btn-danger" href="/admin/company/delete/{{ $row->id }}"><i class="fas fa-times"></i></i></a>

											</div>
										</div>
									@endforeach

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
	<script>
		function del_company(compa){
			return confirm('Bạn có muốn xóa danh mục: '+compa)
		}
	</script>
@endsection