@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Update Keyboard</div>
                
                <div class="card-body">    
                    <div class="" style="text-align: center">
                        <img class="" src="{{asset('storage/'.$product->keyboard_image)}}" alt="Image" height="300" width="300">
                    </div>
                    <br>
                    <form method="POST" action="/update/{{$product->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                                <select class="form-control" name="category_id" id="category">
                                    @foreach ($categories as $c)
                                        <option value="{{$c->id}}">{{$c->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keyboard_name" class="col-md-4 col-form-label text-md-right">Keyboard Name</label>

                            <div class="col-md-6">
                                <input id="keyboard_name" type="text" value="{{$product->keyboard_name}}" class="form-control @error('keyboard_name') is-invalid @enderror" name="keyboard_name" required>

                                @error('keyboard_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="keyboard_price" class="col-md-4 col-form-label text-md-right">Keyboard Price</label>

                            <div class="col-md-6">
                                <input id="keyboard_price" type="number" value="{{$product->keyboard_price}}" class="form-control @error('keyboard_price') is-invalid @enderror" name="keyboard_price" required>

                                @error('keyboard_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" value="{{$product->description}}" class="form-control @error('description') is-invalid @enderror"  name="description" required>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="keyboard_image" class="col-md-4 col-form-label text-md-right">Keyboard Image</label>
                            <div class="col-md-6">
                                <input class="form-control @error('keyboard_image') is-invalid @enderror" type="file" id="formFile" name="keyboard_image">
                                @error('keyboard_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
