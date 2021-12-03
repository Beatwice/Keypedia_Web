@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">
            <h2><strong>Welcome to Keypedia</strong></h2>
            <h6>Best Keyboard and Keycaps Shop</h6>
        </div>
    </div>
    <div class="row list-product">
        @foreach ($categories as $c)
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="/view-keyboard/{{$c->id}}"><p>{{$c->category_name}}</p></a>
                <a href="/view-keyboard/{{$c->id}}"><img src="{{asset($c->category_image)}}" alt="Image" height="300" width="300"></a>
            </div>
        @endforeach
    </div>
</div>
@endsection