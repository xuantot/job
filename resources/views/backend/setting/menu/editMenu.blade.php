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
               <form action="/admin/setting/menu/edit/{{$createMenu->id}}" method="POST">
                  @csrf
                  <div class="form-group">
                     {{-- <label for="">Danh mục cha:</label>
                     <select class="form-control" name="parent_id">
                        <option value="0" selected>----ROOT----</option>
                        @include('backend.setting.menu.option', ['level' => 0])
                     </select> --}}
                  </div>
                  <div class="form-group">
                     <label for="">Tên Danh mục</label>
                     <input type="text" class="form-control" name="name" value="{{$createMenu->name}}">
                     <div class="form-group">
                        <label for="">Danh mục cha:</label>
                        <select class="form-control" name="parent_id">
                           <option value="0" selected>----ROOT----</option>
                           @include('backend.setting.menu.option', ['level' => 0])
                        </select>
                     </div>
                     <label for="">Link</label>
                     <input type="text" class="form-control" name="link" value="{{$createMenu->link}}">
                  </div>
                  <button type="submit" class="btn btn-primary">Sửa danh mục</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
