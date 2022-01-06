@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="text-center">
            @if (Auth::user() && Auth::user()->role == 'admin')
            <h2><strong>Manage Category</strong></h2>
            <br>
            @else
                <h2><strong>Welcome to Keypedia</strong></h2>
                <h6>Best Keyboard and Keycaps Shop</h6>
                <br>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row list-product">
            @foreach ($categories as $c)
                <div class="col-lg-4 col-md-6 mb-1" style="text-align: center; ">
                    <div class="m-1 rounded shadow-lg p-3 mb-5">
                        <br>
                        <a href="/view-keyboard/{{$c->id}}"><img src="{{asset('storage/'.$c->category_image)}}" alt="Image" height="250" width="250"></a>
                        <div class="pb-2 pt-2">
                            <a href="/view-keyboard/{{$c->id}}" class="" style="text-decoration: none; font-size: 18px; color:black;"><p class="m-0">{{$c->category_name}}</p></a>
                        </div>
                        @if (Auth::user() && Auth::user()->role == 'admin')
                        <div class="d-flex" style="justify-content: space-evenly">
                            <a href="/update/category-keyboard/{{$c->id}}">
                                <button class="btn btn-primary">update</button>
                            </a>
                            <form method="POST" action="/delete/category-keyboard/{{$c->id}}">
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
    </div>
</div>
@endsection