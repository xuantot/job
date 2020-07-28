@extends('backend.master.master')
@section('title', " Processed Order")
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
				<li class="active">Bài đăng</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bài đăng đã bỏ qua </div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="/admin/order" class="btn btn-warning"><span class="glyphicon glyphicon-gift"></span>Bài đăng chưa xử lý</a>
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
                                        @foreach ($customer as $key => $row)
											<tr>
												<td>{{ $key+1 }}</td>
												<td>{{ $row->name }}</td>
												<td>{{ $row->company->name }}</td>
												<td>{{ $row->phone }}</td>
												<td>{{ $row->company->address }}</td>
												<td>
													<a href="/admin/order/detail/removed/{{ $row->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Xử lý</a>

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
	