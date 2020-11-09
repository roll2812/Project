@extends('layouts.admin')
@section('title')
<title>Orders</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
@endsection

@section('js')
<script src="{{ asset('vendor/sweetAlert2/sweetalert2.js') }}"></script>
<script src="{{ asset('admins/delete.js') }}"></script>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Orders', 'key' => 'List'])
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col">Email</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- for each -->
                            @foreach($customers as $customer)
                                <tr>
                                    <th scope="row">{{ $customer->id }}</th>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>
                                        @if($customer->bills()->first()->status == 1)
                                            Chưa xử lý
                                        @elseif($customer->bills()->first()->status == 2)
                                            Đang giao
                                        @else
                                            Đã giao
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{route('orders.edit', $customer->id)}}" class="btn btn-default">Detail</a>

                                    <a href="" data-url="{{ route('orders.delete', $customer->id)}}" class="btn btn-danger action_delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- end foreach -->
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="col-md-12">

            </div>

        </div>
    </div>

</div>

@endsection
