@extends('layouts.admin')
  @section('title')
    <title>Role</title>
  @endsection

  @section('css')
    <link rel="stylesheet" href="{{asset('admins/slider/index.css')}}">
  @endsection

  @section('js')
  <script src="{{asset('vendor/sweetAlert2/sweetalert2.js')}}"></script>
  <script src="{{ asset('admins/delete.js') }}"></script>
  @endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Role', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @can('role-create')
              <a href="{{ route('roles.create') }}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
              @endcan
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role Name</th>
                    <th scope="col">Role Description</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                  <tr>
                    <th scope="row">{{$role->id}}</th>
                    <td>{{$role->name}}</td>
                    <td>{{$role->display_name}}</td>
                    <td class="row">
                      @can('role-edit')
                      <a href="{{route('roles.edit', $role->id) }}" class="btn btn-default">Edit</a>
                        @endcan
                    @can('role-delete')
                    <a href="" data-url="{{ route('roles.delete', $role->id) }}" class="btn btn-danger action_delete">Delete</a>
                    @endcan
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
        {{ $roles->links() }}
        </div>

      </div>
    </div>

  </div>

  @endsection
