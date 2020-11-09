@extends('layouts.admin')
@section('title')
<title>Add Product</title>
@endsection

@section('css')
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />

@endsection



@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
  <!-- /.content-header -->
<div class="col-md-12">
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
</div>
  <!-- Main content -->
  <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            @csrf
            <div class="form-group">
              <label>Product Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="category-name" placeholder="Product Name" value="{{old('name')}}">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Price" value="{{old('price')}}">
              @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="feature_image_path" class="form-control-file">
            </div>
            <div class="form-group">
              <label>Image Detail</label>
              <input multiple="multiple" type="file" name="image_path[]" class="form-control-file">
            </div>


            <div class="form-group">
              <label>Choose Categories</label>
              <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id" value="{{old('category_id')}}">
                <option value="">Choose Categories</option>
                {!! $htmlOption !!}
              </select>
              @error('category_id')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label>Tags</label>
              <select name="tags[]" class="form-control-file tags_select_choose" multiple="multiple">

              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Content</label>
              <textarea class="form-control tinymce_editor_init @error('contents') is-invalid @enderror" name="contents" rows="10">
                {{old('contents')}}
              </textarea>
              @error('contents')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </form>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('js')
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="{{asset('admins/product/add/add.js')}}"></script>

@endsection
