@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-10">
                    <a class="btn btn-outline-primary" href="{{route('items.index')}}">Go To Index</a>

                <form action="{{route('items.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nameInput">Product Name</label>
                            <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter Product Name">
                            @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="imageInput">Image URL</label>
                        <input type="text" class="form-control" id="imageInput" name="image" placeholder="Please Your URL">
                        @error('image')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="contentInput">Content</label>
                        <textarea class="form-control" id="contentInput" rows="3" name="content"></textarea>
                        @error('content')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="priceInput">Product Price</label>
                        <input type="number" class="form-control" id="nameInput" name="price" placeholder="Enter Product Price">
                        @error('price')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="conditionInput">Product Condition</label>
                        <select class="form-control" name="condition" id="conditionInput">
                            @foreach($conditions as $con)
                                <option value="{{$con->id}}">{{$con->name}}</option>
                            @endforeach
                        </select>
                        @error('condition')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="categoryInput">Categories</label>
                        <select class="form-control" name="category_id" id="categoryInput">
                            @foreach($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                         @endforeach
                        </select>

                        @error('category_id')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-outline-success" type="submit">Save Post</button>
                    </div>

                </form>
    </div>
    </div>
    </div>
@endsection

