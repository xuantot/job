@extends('backend.master.master')
@section('title', "Quản trị Menu")
@section('setting')
class="active";
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

<div class="row">
<div class="col-md-12">
   <div class="panel panel-default">
      <div class="panel-body">
         <div class="row">
            <div class="col-md-7">
               {{-- @if ($errors->any())
               @component('admin.layouts.components.alert')
               @slot('type', 'danger')
               @slot('stroke', 'cancel')
               {{ $errors->first() }}
               @endcomponent
               @endif --}}
               <form action="/admin/setting/testimonial/edit/{{$editTestimonial->id}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     {{-- <label for="">Danh mục cha:</label>
                     <select class="form-control" name="parent_id">
                        <option value="0" selected>----ROOT----</option>
                        @include('backend.setting.menu.option', ['level' => 0])
                     </select> --}}
                  </div>
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$editTestimonial->name}}">
                    <label for="">Content</label>
                    <input type="text" class="form-control" name="content" value="{{$editTestimonial->content}}">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Avatar</label>
                            <input id="img" type="file" name="avatar" class="form-control hidden"
                                onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100%" height="100%"
                                src="http://127.0.0.1:8000/dataCustomer/avatarTestimonial/{{$editTestimonial->avatar}}">
                        </div>
                    </div>
                 </div>
                 <button type="submit" class="btn btn-primary">Sửa Testimonial</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script>
    function changeImg(input){
           //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
           if(input.files && input.files[0]){
               var reader = new FileReader();
               //Sự kiện file đã được load vào website
               reader.onload = function(e){
                   //Thay đổi đường dẫn ảnh
                   $('#avatar').attr('src',e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
           }
       }
       $(document).ready(function() {
           $('#avatar').click(function(){
               $('#img').click();
           });
       });

</script>
@endpush
