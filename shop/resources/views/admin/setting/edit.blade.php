@extends('layouts.admin')
  @section('title')
    <title>Setting Page</title>
  @endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Setting', 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('setting.update', $setting->id)}}" method="POST">
                @method('PUT')
                  @csrf
                    <div class="form-group">
                        <label>Config key</label>
                        <input type="text" name="config_key" class="form-control @error('config_key') is-invalid @enderror"" placeholder="Input Config Key" value="{{$setting->config_key}}">
                        @error('config_key')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @if(request()->type === 'Text')
                    <div class="form-group">
                        <label>Config value</label>
                        <input type="text" name="config_value" class="form-control @error('config_value') is-invalid @enderror"" placeholder="Input Config Value" value="{{$setting->config_value}}">
                        @error('config_value')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @elseif(request()->type === 'Textarea')

                    <div class="form-group">
                        <label>Config value</label>
                        <textarea  name="config_value" rows="5" class="form-control @error('config_value') is-invalid @enderror" >
                        {{$setting->config_value}}
                        </textarea>
                        @error('config_value')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>
      </div>
    </div>
  </div>
  @endsection
