@extends('layouts.admin')
  @section('title')
    <title>Permission Page</title>
  @endsection

  @section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Permission', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                  @csrf                  
                    <div class="form-group">
                        <label >Choose Permission</label>
                            <select class="form-control" name="parent_id" >
                                <option value="0">Choose Parent Menus</option>
                                <option value="0">Choose Parent Menus</option>
                                <option value="0">Choose Parent Menus</option>
                               
                            </select>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="" class="">
                                    <input type="checkbox" value="list">List
                                </label>
                            </div>
                            <div class="col-3">
                                <label for="">
                                    <input type="checkbox" value="add">Add
                                </label>
                            </div>
                            <div class="col-3">
                                <label for="">
                                    <input type="checkbox" value="edit">Edit 
                                </label>
                            </div>
                            <div class="col-3">
                                <label for="">
                                    <input type="checkbox" value="delete">Delete
                                </label>
                            </div>

                        </div>
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