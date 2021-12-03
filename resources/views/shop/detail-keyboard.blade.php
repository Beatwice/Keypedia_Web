@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Keyboard</div>
                    <div class="card-body">    
                        <div class="lg-4 md-6 mb-5">
                            <div>
                                <img src="{{asset('storage/'.$product->keyboard_image)}}" alt="Image" height="300" width="300">
                            </div>
                            <div>
                                <p>{{$product->keyboard_name}}</p>
                                <p>US$ {{$product->keyboard_price}}</p>
                                <p>{{$product->description}}</p>
                                <form action="/cart/store" method="POST">
                                    @csrf
                                    <label for="quantity">Quantity :</label>
                                    <input type="number" id="quantity" name="quantity" min="1" required>
                                    <br>
                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                    <button type="submit" class="btn btn-primary">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection