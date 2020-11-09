@extends('layouts.admin')
  @section('title')
    <title>Add Role</title>
  @endsection

  @section('css')
  <link href="{{asset('admins/role/add/add.css')}}" rel="stylesheet" />
  @endsection

  @section('js')
    <script src="{{asset('admins/role/add/add.js')}}"></script>
  @endsection
  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Role', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
          <form action="{{route('roles.store') }}" method="POST" enctype="multipart/form-data" style="width:100%;">
            <div class="col-md-12">
                  @csrf
                    <div class="form-group">
                        <label>Role Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Role Name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label>Role Description</label>
                        <textarea type="text" name="display_name" rows="10" cols="30"
                        class="form-control"
                        placeholder="Role Description"
                        >{{old('display_name')}}</textarea>
                    </div>

            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-12">
                        <label >
                            <input type="checkbox" class="checkall">
                            Check All
                        </label>
                    </div>
                @foreach($permissionParents as $permissionParent)
                <div class="card border-success mb-3 col-md-12" >
                    <div class="card-header">
                        <label>
                            <input type="checkbox" value="" class="checkbox_wrapper">
                        </label>
                    {{$permissionParent->name}}
                    </div>
                    <div class="row">
                    
                    @foreach($permissionParent->permissionChildrens as $permissionChildren)

                        <div class="card-body text-success col-md-3 ">
                            <h5 class="card-title">
                            <label>
                                <input type="checkbox" name="permission_id[]"
                                class="checkbox_children"
                                value="{{ $permissionChildren->id}}">
                            </label>
                            {{$permissionChildren->name}}
                            </h5>

                        </div>
                    @endforeach
                    </div>

                </div>
                @endforeach
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
                </form>

          </div>
      </div>
    </div>
  </div>
  @endsection
