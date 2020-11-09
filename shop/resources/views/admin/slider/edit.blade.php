@extends('layouts.admin')
  @section('title')
    <title>Add Slider</title>
  @endsection

  @section('css')
  <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />
  @endsection
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Slider', 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{route('slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                  @csrf
                    <div class="form-group">
                        <label>Slider Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Slider Name" value="{{$slider->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror                   
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" cols="30" rows="5"
                        class="form-control @error('description') is-invalid @enderror"
                        placeholder="Description"
                        >{{$slider->description}}</textarea>
                    </div>                       
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Image</label>
                        <input
                        type="file"
                        name="image_path"
                        class="form-control @error('image_path') is-invalid @enderror "
                        value="{{old('image_path')}}"
                        >
                        <div class="col md-3">
                            <div class="row">
                                <img class="image-slider" src="{{$slider->image_path}}" alt="">
                            </div>
                        </div>
                    </div>
                    @error('image_path')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
