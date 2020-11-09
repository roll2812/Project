@extends('layouts.admin')
  @section('title')
    <title>Setting Page</title>
  @endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/setting/index/index.css') }}">
@endsection

@section('js')
    <script src="{{asset('vendor/sweetAlert2/sweetalert2.js')}}"></script>
    <script src="{{ asset('admins/delete.js') }}"></script>
@endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Setting', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="btn-group float-right">
                @can('setting-create')
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    Add Setting
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('setting.create') . '?type=Text' }}">Text</a></li>
                    <li><a href="{{route('setting.create') . '?type=Textarea' }}">Text Area</a></li>
                </ul>
                @endcan
            </div>

            </div>
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Config key</th>
                    <th scope="col">Config value</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                @foreach($settings as $setting)
                  <tr>
                    <th scope="row">{{$setting->id}}</th>
                    <td>{{$setting->config_key}}</td>
                    <td>{{$setting->config_value}}</td>
                    <td>
                        @can('setting-edit')
                      <a href="{{ route('setting.edit', $setting->id) . '?type=' . $setting->type }}" class="btn btn-default">Edit</a>
                        @endcan
                        @can('setting-delete')
                      <a data-url="{{ route('setting.delete', $setting->id) }}" href="" class="btn btn-danger action_delete">Delete</a>
                        @endcan
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              </div>


        </div>
        <div class="col-md-12">
          {{$settings->links()}}
        </div>

      </div>
    </div>

  </div>

  @endsection
