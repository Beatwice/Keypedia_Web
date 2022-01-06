@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Cart</div>
                    <div class="card-body">    
                        <div class="lg-4 md-6 mb-5">
                            @if (count($carts) <= 0 )
                            <div class="bg-warning">
                                <h2 style="text-align: center; margin-top:2%">Not Available</h2>
                            </div>
                            @else
                                @foreach ($carts as $cart)
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{asset('storage/'.$cart->product->keyboard_image)}}" alt="keyboard" width="300" height="300">

                                        </div>
                                    
                                        <div class="" style="margin-left: 20px; ">

                                            <h3 class="mb-3 mt-3">{{$cart->product->keyboard_name}}</h3>

                                            Subtotal: ${{$cart->product->keyboard_price * $cart->quantity}}
                                            <h1 class="mb-3"></h1>
                                            <form action="/update-quantity/{{$cart->id}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                Quantity: <input type="number" name="quantity" id="quantity" value="{{$cart->quantity}}">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            @endif
                            <form action="/checkout" method="POST">
                                @csrf
                                <button class="btn btn-primary" style="position: absolute; right: 20px;">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection