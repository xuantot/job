@extends('backend.master.master')

@section('title', "Danh sách ứng viên")
@section('user_candidate')
class="active";
@endsection
	
@section('content')
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="/admin"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách ứng viên</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách ứng viên</h1>
			</div>
		</div>
		@if(session('thongbao'))
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>{{ session('thongbao') }}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								@endif
		<!--/.row-->

	

		<div class="row">

			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Name</th>
											<th>Address</th>
                                            <th>Phone</th>
                                        
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($customer as $cus)
										<tr>
										
										 <td>{{ $cus->id }}</td>
											<td>{{ $cus->email }}</td>
											<td>{{ $cus->name}}</td>
											<td>{{ $cus->address }}</td>
                                            <td>{{ $cus->phone }}</td>
											<td>
												
												<a  onclick="return delete_userCandidate('{{ $cus->id }}')" href="/admin/user/candidate/delete/{{$cus->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>	
										
											
                                        </tr>
									@endforeach
								
									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										{{$customer->links()}}
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
	function delete_userCandidate(name)
	{
		return confirm("Bạn muốn xóa ứng viên:"+name+"?");
	}
</script>
	
@endsection