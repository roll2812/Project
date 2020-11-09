@extends('layouts.admin')
  @section('title')
    <title>Users Page</title>
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
    @include('partials.content-header', ['name' => 'User', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @can('user-create')
              <a href="{{ route('users.create') }}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
              @endcan
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="row">
                      @can('user-edit')
                      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">Edit</a>
                      @endcan
                      @can('user-delete')
                      <a href="" data-url="{{ route('users.delete', $user->id) }}" class="btn btn-danger action_delete">Delete</a>
                        @endcan
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
        {{ $users->links() }}
        </div>

      </div>
    </div>

  </div>

  @endsection
