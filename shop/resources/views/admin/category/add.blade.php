@extends('layouts.admin')
  @section('title')
    <title>Home Page</title>
  @endsection

  @section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Category', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{route('categories.store')}}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="category-name">Category Name</label>
                        <input type="text" name="name" class="form-control" id="category-name" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                        <label >Choose Categories</label>
                            <select class="form-control" name="parent_id" >
                                <option value="0">Choose Categories</option>
                                {!! $htmlOption !!} 
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