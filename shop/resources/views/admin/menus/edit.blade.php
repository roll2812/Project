@extends('layouts.admin')
  @section('title')
    <title>Home Page</title>
  @endsection

  @section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Menu', 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{route('menus.update', $menu->id)}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                  @csrf
                    <div class="form-group">
                        <label >Menu Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $menu->name }}">
                    </div>
                    
                    <div class="form-group">
                        <label >Choose Parent Menu</label>
                            <select class="form-control" name="parent_id" >
                                <option value="0">Choose Menus</option>
                                {!! $optionSelect !!} 
                            </select>
                    </div>
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