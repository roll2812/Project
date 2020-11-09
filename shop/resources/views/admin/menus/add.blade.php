@extends('layouts.admin')
  @section('title')
    <title>Home Page</title>
  @endsection

  @section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Menu', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{route('menus.store')}}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="category-name">Menu Name</label>
                        <input type="text" name="name" class="form-control" id="category-name" placeholder="Menu Name">
                    </div>
                    <div class="form-group">
                        <label >Choose Menu</label>
                            <select class="form-control" name="parent_id" >
                                <option value="0">Choose Parent Menus</option>
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