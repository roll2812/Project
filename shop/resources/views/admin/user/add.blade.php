@extends('layouts.admin')
  @section('title')
    <title>Create a new user</title>
  @endsection

  @section('css')
  <link href="{{asset('admins/user/add.css')}}" rel="stylesheet" />
  <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" />
  @endsection

  @section('js')
  <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
  <script src="{{asset('admins/user/add.js')}}"></script>
  @endsection
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'User', 'key' => 'Create'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="User Name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"  placeholder="Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Choose Roles</label>
                        <select name="role_id[]" class="form-control select2_init " multiple>
                            <option value=""></option>                            
                            @foreach($roles as $role)                          
                            <option value="{{ $role->id }}">{{$role->name}}</option> 
                            @endforeach                                             
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
      </div>
    </div>
  </div>
  @endsection
