@extends('backend.master.master')
@section('title', "Sửa danh mục Job")

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
            <h1 class="page-header">Quản lý danh mục</h1>
        </div>
    </div>
    <!--/.row-->


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form action="/admin/category/{{$category->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-8">
                                <div class="form-group">
                                @if (count($errors) > 0)
                                    @component('backend.components.alret')
                                    @slot('type', 'danger')
                                    @slot('stroke', 'cancel')
                                    {{ $errors->first() }}
                                    @endcomponent
                                @endif
                                    <label for="">Tên Danh mục</label>
                                    <input type="text" class="form-control" name="name" id=""
                                        placeholder="Tên danh mục mới" value="{{$category->name}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Sửa danh mục</button>
                            </div>
                        </form>
                        {{-- <div class="col-md-7">
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
							</div> --}}
                    </div>
                </div>
            </div>



        </div>
        <!--/.col-->


    </div>
    <!--/.row-->
</div>

@endsection
@push('js')
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

    $(document).ready(function() {
        $("#_errors").on("click", function() {
            $('.close_errors').hide();
        });

    })
</script>
@endsection
