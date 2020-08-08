@extends('backend.master.master')
@section('title', "Quản trị Menu")
@section('user')
class="setting";
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
   <ol class="breadcrumb">
      <li>
         <a href="/admin">
            <svg class="glyph stroked home">
               <use xlink:href="#stroked-home"></use>
            </svg>
         </a>
      </li>
      <li class="active">Danh sách quản trị viên</li>
   </ol>
</div>
<!--/.row-->
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
<!--/.row-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="/admin/setting/menu/create" class="btn btn-primary">Tạo mới</a>
                    </div>
                    <div class="col-md-7">
                    <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                    <div class="vertical-menu">
                        @include('backend.setting.menu.row',  ['level' => 0])
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/.row-->
</div>
@endsection

@push('js')
<script>
    function del_company(compa){
			return confirm('Bạn có muốn xóa danh mục: '+compa+' ?')
		}
    $(document).ready(function() {
    $(".delete").on("click", function(e) {
        e.preventDefault()
        const _this = $(this)
        $.ajax({
            url: '/admin/setting/menu/del',
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                menu_id: $(this).data('menu-id'),
            },
            success: function() {
                _this.parents(".remove-menu").remove()
            }
        })
    })
    })
</script>
@endpush
