@extends('layouts.admin')
@section('title')
<title>Edit Product</title>
@endsection

@section('css')
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet" />

@endsection



@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header', ['name' => 'Product', 'key' => 'Edit'])
  <!-- /.content-header -->

  <!-- Main content -->
  <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label>Product Name</label>
              <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{$product->name}}">
            </div>
            <div class="form-group">
              <label>Price</label>
              <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="{{ $product->price }}">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="feature_image_path" class="form-control-file">
              <div class="col-md-4">
                <div class="row">
                    <img src="{{ $product->feature_image_path}}" alt="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Image Detail</label>
              <input multiple="multiple" type="file" name="image_path[]" class="form-control-file">
              <div class="col-md-12 margin_top">
                <div class="row">
                @foreach($product->images as $productImage)
                    <div class="col-md-3">
                        <img class="image_resize" src="{{$productImage->image_path}}" alt="">
                    </div>
                @endforeach
                </div>
              </div>
            </div>


            <div class="form-group">
              <label>Choose Categories</label>
              <select class="form-control select2_init" name="category_id">
                <option value="">Choose Categories</option>
                {!! $htmlOption !!}
              </select>
            </div>
            <div class="form-group">
              <label>Tags</label>
              <select name="tags[]" class="form-control-file tags_select_choose" multiple="multiple">
                    @foreach($product->tags as $tag)
                        <option value="{{$tag->name}}" selected>{{$tag->name}}</option>
                    @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Content</label>
              <textarea class="form-control tinymce_editor_init" name="contents" rows="10">{{ $product->content }}</textarea>
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
