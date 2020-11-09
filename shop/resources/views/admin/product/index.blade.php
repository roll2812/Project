@extends('layouts.admin')
  @section('title')
    <title>Products</title>
  @endsection

  @section('css')
    <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
  @endsection

  @section('js')
  <script src="{{asset('vendor/sweetAlert2/sweetalert2.js')}}"></script>
  <script src="{{ asset('admins/delete.js') }}"></script>
  @endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Product', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @can('product-create')
              <a href="{{ route('product.create') }}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
              @endcan
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
             <!-- for each -->
             @foreach($products as $product)

                  <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price) }}</td>
                    <td>
                        <image class="products_image" src="{{ $product->feature_image_path }}" alt=""></image>
                    </td>
                    <td>{{ optional($product->category)->name }}</td>

                    <td>
                        @can('product-edit')
                      <a href="{{ route('product.edit', $product->id) }}" class="btn btn-default">Edit</a>
                      @endcan
                      @can('product-delete')
                      <a href="" data-url="{{ route('product.delete', $product->id) }}" class="btn btn-danger action_delete">Delete</a>
                      @endcan
                    </td>
                  </tr>
              @endforeach
              <!-- end foreach -->
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
          {{ $products->links() }}
        </div>

      </div>
    </div>

  </div>

  @endsection
