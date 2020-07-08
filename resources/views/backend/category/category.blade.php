@extends('backend.master.master')
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
                                @if(session()->has('success'))
                                <div class="alert bg-success" role="alert">
                                    <svg class="glyph stroked checkmark">
                                        <use xlink:href="#stroked-checkmark"></use>
                                    </svg> {{ session()->get('success') }} <a href="#" class="pull-right"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                @endif
                            <form action="/admin/category" method="POST">
                                @csrf
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
                                        placeholder="Tên danh mục mới">
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                            </form>
                        </div>
                        <div class="col-md-7">
                            <h3 style="margin: 0;"><strong>Danh sách danh mục</strong></h3>
                            <div class="vertical-menu">
                                <div class="item-menu active">Danh mục </div>
                                @foreach ($category as $item)
                                <div class="item-menu remove-category"><span>{{$item->name}}</span>
                                    <div class="category-fix">
                                    <a class="btn-category btn-primary" href="/admin/category/edit/{{$item->id  }}"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger delete" data-category-id="{{$item->id}}" href="/a"><i class="fas fa-times"></i></i></a>

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

@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
<script>
    $(document).ready(function() {
    $(".delete").on("click", function(e) {
        e.preventDefault()
        const _this = $(this)
        $.ajax({
            url: '/admin/category/remove',
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                category_id: $(this).data('category-id'),
            },
            success: function() {
                _this.parents(".remove-category").remove()
            }
        })
    })
    })
    $(document).ready(function() {
        $("#_errors").on("click", function() {
            $('.close_errors').hide();
        });

    })
</script>
@endpush
