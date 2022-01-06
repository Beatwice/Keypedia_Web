@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Keyboard</div>
                    <div class="card-body">    
                        <div class="lg-4 md-6 mb-5" style="display: flex;">
                            <div>
                                <img src="{{asset('storage/'.$product->keyboard_image)}}" alt="Image" height="300" width="300">
                            </div>
                            <div style="margin-left: 20px">
                                <p class="mb-4" style="font-size: 20px">{{$product->keyboard_name}}</p>
                                <p class="mb-4">US$ {{$product->keyboard_price}}</p>
                                <p class="mb-4">Description: {{$product->description}}</p>
                                <form action="/cart/store" method="POST">
                                    @csrf
                                    <label for="quantity">Quantity :</label>
                                    <input type="number" id="quantity" name="quantity" min="1" required>
                                    <br>
                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                    <div style="position: absolute; right:25px; bottom: 65px; ">
                                        <button type="submit" class="btn btn-primary">
                                            Add to Cart
                                        </button>
                                    </div>
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