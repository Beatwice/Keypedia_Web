@extends('layouts.app')

@section('content')

@php
    $total_price = 0;
@endphp

<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>Your Transaction History</strong></h2>
            {{$transaction->created_at}}
        </div>
    </div>
    <div class="list-product">
        @foreach ($details as $trd)
            <br>
            <div>
                <img src="{{asset('storage/'.$trd->product->keyboard_image)}} " alt="{{$trd->product->keyboard_name}}" width="300px" height="300px">
                
                {{$trd->product->keyboard_name}}
                {{$trd->product->keyboard_price * $trd->quantity}}
                {{$trd->quantity}}
                @php $total_price += ($trd->product->keyboard_price * $trd->quantity) @endphp
            </div>
            <br>
        @endforeach
        <div>Total Price : $ {{$total_price}}</div>
    </div>
</div>
@endsection