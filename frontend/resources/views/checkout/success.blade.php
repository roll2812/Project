@extends('layouts.master')
@section('tittle')
<title>Checkout Page</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('home/success.css')}}">
@endsection
@section('content')
<body>
    <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark checkmark2">✓</i>
    </div>
      <h1 class="font-success">Success</h1>
<p class="edit">We received your purchase request;<br/> we'll be in touch shortly!<br>Click here to return <a href="{{route('home')}}">HOME</a></p>
    </div>
  </body>
@endsection
