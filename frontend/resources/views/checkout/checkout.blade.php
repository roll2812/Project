@extends('layouts.master')
@section('tittle')
<title>Checkout Page</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <form action="{{ url('/checkout') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-sm-12 clearfix">
                    <div class="container">
                        <div class="breadcrumbs">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Shopping Cart</li>
                            </ol>
                        </div>
                        <div class="bill-to">
                            <p>Thông tin khách hàng</p>
                            <div class="form-group">
                            <div class="form-one">
                                <input class="edit-width @error('fullName') is-invalid @enderror form-control margin-bottom" type="text" name="fullName" value="{{ old('fullName') }}"
                                    placeholder="Full Name *">
                                    @error('fullName')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                <input class="edit-width @error('email') is-invalid @enderror form-control margin-bottom" type="text" name="email" value="{{ old('email') }}"
                                    placeholder="Email *">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input class="edit-width @error('address') is-invalid @enderror form-control margin-bottom" type="text" name="address" value="{{ old('address') }}"
                                    placeholder="Address *">
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input class="edit-width @error('phoneNumber') is-invalid @enderror form-control  margin-bottom  " type="text" name="phoneNumber" value="{{ old('phonenumber') }}"
                                    placeholder="Phone Number *">
                                    @error('phoneNumber')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <p style="color: red; font-size: 14px">(*) Thông tin quý khách phải nhập đầy đủ</p>
                            </div>
                        </div>
                            <div class="form-two">
                                <textarea class="margin-bottom" name="note" value="{{ old('message') }}"
                                    placeholder="Note" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <section id="cart_items">
                        <div class="container">
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="description">Name</td>
                                            <td class="price">Price</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="total">Total</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($cart))
                                            @foreach($cart as $item)
                                                <tr>
                                                    <td class="cart_product" style="margin: 0px">
                                                        <img width="100px" height="100px"
                                                            src="{{ config('app.base_url') . $item->options->image }}"
                                                            alt="" />
                                                    </td>
                                                    <td class="cart_description">
                                                        <h4><a href="">{{ $item->name }}</a></h4>

                                                        <p>Web ID: {{ $item->id }}</p>
                                                    </td>
                                                    <td class="cart_price">
                                                        <p>{{ number_format($item->price) }} VNĐ</p>
                                                    </td>
                                                    <td class="cart_quantity">
                                                        {{ $item->qty }}
                                                    </td>
                                                    <td class="cart_total">
                                                        <p class="cart_total_price">
                                                            {{ number_format($item->subtotal) }}
                                                            VNĐ</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="4">&nbsp;
                                                    <span>
                                                        <a class="btn btn-default update"
                                                            href="{{ url('/cart-show') }}">Back to Cart</a>
                                                    </span>

                                                </td>
                                                <td colspan="2">
                                                    <table class="table table-condensed total-result">
                                                        <tbody>
                                                            <tr>
                                                                <td>Total :</td>
                                                                <td><span>{{ $total }} VNĐ</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                                <td>
                                                                    <button type="submit"
                                                                        class="btn btn-default check_out" href="">Gửi
                                                                        đơn hàng</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>You have no items in the shopping cart</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">&nbsp;
                                                    <a class="btn btn-default update"
                                                        href="{{ url('/') }}">Mua hàng</a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!--/#cart_items-->
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
