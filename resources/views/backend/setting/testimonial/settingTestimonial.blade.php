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
                        <a href="/admin/setting/testimonial/create" class="btn btn-primary">Tạo mới</a>
                    </div>
                    <div class="col-md-7">
                    <h3 style="margin: 0;"><strong>Setting Testimonial</strong></h3>
                    <div class="vertical-menu">
                        @foreach ($testimonial as $item)
                        <div class="item-menu remove-testimonial">
                            <span>{{ $item->name }}</span>
                            <div class="category-fix">
                            <a class="btn-category btn-primary" href="/admin/setting/testimonial/edit/{{$item->id}}"><i class="fa fa-edit"></i></a>
                            <a onclick='return del_company("{{ $item->name }}")' data-testimonial-id="{{$item->id}}" class="btn-category btn-danger delete" ><i class="fas fa-times"></i></a>
                            </div>
                            <p>{{ $item->content }}</p>
                        </div>
                        @endforeach
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
            url: '/admin/setting/testimonial/del',
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                testimonial_id: $(this).data('testimonial-id'),
            },
            success: function() {
                _this.parents(".remove-testimonial").remove()
            }
        })
    })
    })
</script>
@endpush
