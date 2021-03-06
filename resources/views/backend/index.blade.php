@extends('backend.master.master')
@section('title', "Quản trị - Job")
@section('admin')
class="active";
@endsection


@section('content')
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Tổng quan</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tổng quan</h1>
		</div>
	</div>
	<!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-6">
			<div class="panel panel-blue panel-widget ">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-4 widget-left">
						<span class="glyphicon glyphicon-list-alt icon-50" aria-hidden="true"></span>
					</div>
					<div class="col-sm-9 col-lg-8 widget-right">
						<div class="text-muted">Tổng số bài đăng</div>
						<div class="large">{{ $jobs }}</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-6 col-lg-6">
			<div class="panel panel-teal panel-widget">
				<div class="row no-padding">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked male-user">
							<use xlink:href="#stroked-male-user"></use>
						</svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						
						<div class="text-muted">Tương tác</div>
						<div class="large">{{ $customer }}</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--/.row-->

	{{-- <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Biểu đồ doanh thu</div>
				<div class="panel-body">
					<div class="canvas-wrapper">
						<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--/.row-->

</div>
@endsection