@extends('backend.master.master')
@section('title', "Quản trị Contact")
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
                @if (count($errors) > 0)
                    @component('backend.components.alret')
                    @slot('type', 'danger')
                    @slot('stroke', 'cancel')
                    {{ $errors->first() }}
                    @endcomponent
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                @foreach ($contact as $item)
               <form action="/admin/setting/contact/edit/{{$item->id}}" method="POST">
                  @csrf
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label for="">Addrss</label>
                    <input type="text" class="form-control" name="address" value="{{$item->address}}">
                    <label for="">Hotline</label>
                    <input type="text" class="form-control" name="hotline" value="{{$item->hotline}}">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$item->email}}">
                    <label for="">Link Google Map</label>
                    <input type="text" class="form-control" name="link_map" value="{{$item->link_map}}">                    
                 </div>
                 <button type="submit" class="btn btn-primary">Sửa Contact</button>
               </form>
                @endforeach
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
