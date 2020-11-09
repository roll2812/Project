@extends('layouts.admin')
  @section('title')
    <title>Home Page</title>
  @endsection

  @section('js')
  <script src="{{asset('vendor/sweetAlert2/sweetalert2.js')}}"></script>
  <script src="{{ asset('admins/delete.js') }}"></script>
  @endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @can('category-create')
              <a href="{{route('categories.create')}}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
              @endcan
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        @can('category-edit')
                      <a href="{{route('categories.edit', $category->id)}}" class="btn btn-default">Edit</a>
                      @endcan
                      @can('category-delete')
                      <a href="" data-url="{{route('categories.delete', $category->id)}}" class="btn btn-danger action_delete">Delete</a>
                      @endcan
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
          {{$categories->links()}}
        </div>

      </div>
    </div>

  </div>

  @endsection
