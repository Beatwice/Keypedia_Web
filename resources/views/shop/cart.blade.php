@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Cart</div>
                    <div class="card-body">    
                        <div class="lg-4 md-6 mb-5">
                            @foreach ($carts as $cart)
                            <div>
                                <img src="{{asset('storage/'.$cart->product->keyboard_image)}}" alt="keyboard" width="300" height="300">
                                <br>
                                <h3>{{$cart->product->keyboard_name}}</h3>
                                Subtotal: ${{$cart->product->keyboard_price * $cart->quantity}}
                                <form action="/update-quantity/{{$cart->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    Quantity : <input type="number" name="quantity" id="quantity" value="{{$cart->quantity}}">
                                    <button type="submit">Update</button>
                                </form>
                            </div>
                            @endforeach
                            <form action="/checkout" method="POST">
                                @csrf
                                <button>Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection