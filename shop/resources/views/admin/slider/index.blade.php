@extends('layouts.admin')
  @section('title')
    <title>Slider</title>
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
    @include('partials.content-header', ['name' => 'Slider', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                @can('slider-create')
              <a href="{{ route('slider.create')}}" class="btn-sm btn-success float-right m-2 font-weight-bold">Add</a>
              @endcan
            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                  <tr>
                    <th scope="row">{{$slider->id}}</th>
                    <td>{{$slider->name}}</td>
                    <td>{{$slider->description}}</td>
                    <td>
                        <img class="image-slider" src="{{$slider->image_path}}" alt="">
                    </td>
                    <td class="row">
                        @can('slider-edit')
                      <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-default">Edit</a>
                        @endcan
                        @can('slider-delete')
                      <a href="" data-url="{{ route('slider.delete', $slider->id) }}" class="btn btn-danger action_delete">Delete</a>
                        @endcan
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
        {{ $sliders->links() }}
        </div>

      </div>
    </div>

  </div>

  @endsection
