@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Category</div>
                    <div class="card-body">  
                        <div>
                            <div class="" style="text-align: center">
                                <img class="" src="{{asset('storage/'.$category->category_image)}}" alt="Image" height="300" width="300">
                            </div>
                            <br>
                            <form method="POST" action="/update/category/{{$category->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                
                                <div class="form-group row">
                                    <label for="category_name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                                    
                                    <div class="col-md-6">
                                        <input id="category_name" type="text" value="{{$category->category_name}}" class="form-control @error('category_name') is-invalid @enderror" name="category_name" required>
                                        
                                        @error('category_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="category_image" class="col-md-4 col-form-label text-md-right">category Image</label>
                                    <div class="col-md-6">
                                        <input class="form-control @error('category_image') is-invalid @enderror" type="file" id="formFile" name="category_image">
                                        @error('category_image')
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
    </div>
</div>
@endsection
