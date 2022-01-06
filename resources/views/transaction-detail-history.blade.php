@extends('layouts.app')

@section('content')

@php
    $total_price = 0;
@endphp

<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>Your Transaction History</strong></h2>
             <h4> {{$transaction->created_at}}</h4>
        </div>
    </div>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name Keyboard</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($details as $trd)
            <tr>
                <th scope="row"><img src="{{asset('storage/'.$trd->product->keyboard_image)}} " alt="{{$trd->product->keyboard_name}}" width="200px" height="200px"></th>
                <td>{{$trd->product->keyboard_name}}</td>
                <td>{{$trd->quantity}}</td>
                <td>{{$trd->product->keyboard_price}}</td>
                <td> {{$trd->product->keyboard_price * $trd->quantity}}</td>
            </tr>
            @php $total_price += ($trd->product->keyboard_price * $trd->quantity) @endphp
            @endforeach
        </tbody>
    </div>
    <div><h5> <strong>  Grand Total : $ {{$total_price}} </strong> </h5></div>
</div>
@endsection