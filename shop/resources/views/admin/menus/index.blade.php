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
    @include('partials.content-header', ['name' => 'Menus', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('menus.create') }}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Menu</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                  <tr>
                    <th scope="row">{{$menu->id}}</th>
                    <td>{{$menu->name}}</td>
                    <td>
                      <a href="{{route('menus.edit', $menu->id)}}" class="btn btn-default">Edit</a>
                      @can('menu-edit')
                      <a href="" data-url="{{route('menus.delete', $menu->id)}}" class="btn btn-danger action_delete">Delete</a>
                      @endcan
                    </td>                    
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>
        
        
        </div>
        <div class="col-md-12">
          {{ $menus->links() }}
        </div>
        
      </div>
    </div>
   
  </div>
  
  @endsection