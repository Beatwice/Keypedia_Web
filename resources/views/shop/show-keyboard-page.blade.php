@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>{{$category_title->category_name}}</strong></h2>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <div>
            <form class="form-inline" method="GET" action="/search/{{$category_title->id}}">
                <input required class="form-control mr-sm-2" type="text" name="searchProduct" placeholder="search product">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
    @if (count($products) <= 0 )
        <div class="bg-warning">
            <h2 style="text-align: center; margin-top:2%">Not Available</h2>
        </div>
    @else
        <br>
        <div class="row list-product">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-1" style="text-align: center">
                    <div class="m-1 rounded shadow-lg p-3 mb-5">
                        <a href="/view-keyboard/detail/{{$product->id}}" style="text-decoration: none; color:black; font-size: 21px">
                            <div style="width: 250 !important;height: 250; !important" >
                                <img src="{{asset('storage/'.$product->keyboard_image)}}" alt="Image" height="250" width="250">
                            </div>
                            <p style="margin: 2px; font-size: 18px" >{{$product->keyboard_name}}</p>
                            <p style="margin: 2px; font-size: 16px">US$ {{$product->keyboard_price}}</p>
                        </a>
                        @if (Auth::user() && Auth::user()->role == 'admin')
                            <div class="d-flex" style="justify-content: space-evenly">
                                <a href="/update/keyboard/{{$product->id}}">
                                    <button class="btn btn-primary">update</button>
                                </a>
                                <form method="POST" action="/delete/keyboard/{{$product->id}}">
                                    @csrf
                                    @method('delete')
                                    <a type="submit"><button class="btn btn-danger">delete</button></a>
                                </form>
                            </div> 
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <div style="text-align: center">
        {{ $products->links() }}
    </div>
</div>
@endsection