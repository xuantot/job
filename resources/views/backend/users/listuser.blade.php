@extends('backend.master.master')

@section('title', "Danh sách quản trị viên")
@section('user')
class="active";
@endsection
	
@section('content')
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách quản trị viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách quản trị viên</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if(session('thongbao'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>{{ session('thongbao') }}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								@endif
								<a href="/admin/user/add" class="btn btn-primary">Thêm quản trị viên</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Full</th>
											<th>Address</th>
                                            <th>Phone</th>
                                            <th>Level</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($users_admin as $user)
										<tr>
											<td>{{ $user->id }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->address }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
												@if ($user->level==1)
													Admin
												@else
													User
												@endif
											</td>
											<td>
												<a href="/admin/user/edit/{{ $user->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a  onclick="return delete_user('{{ $user->name }}')" href="/admin/user/delete/{{$user->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                       
								@endforeach
									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										{{ $users_admin->links() }} 
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
@endsection
@section('script')
@parent
<script>
	function delete_user(name)
	{
		return confirm("Bạn muốn xóa thành viên:"+name+"?");
	}
</script>
	
@endsection

