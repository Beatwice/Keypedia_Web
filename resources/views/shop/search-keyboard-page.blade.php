@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>{{$categories->category_name}}</strong></h2>
        </div>
    </div>
    <form class="" method="GET" action="/search/{{$categories->id}}">
        <input type="text" name="searchProduct" placeholder="search product">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <div class="row list-product">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="/view-keyboard/detail/{{$product->id}}">
                    <img src="{{asset('storage/'.$product->keyboard_image)}}" alt="Image" height="300" width="300">
                    <p>{{$product->keyboard_name}}</p>
                    <p>US$ {{$product->keyboard_price}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection