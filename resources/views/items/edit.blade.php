@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')

    <div class="container">
        <a class="btn btn-outline-dark" href="{{route('items.index')}}">Go To Index Page</a><br>
        <form action="{{route('items.update', $item->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Product Name</label>
                    <input type="text" class="form-control" name="name" value="{{$item->name}}">
            </div>
            <div class="form-group">
                <label>Image URL</label>
                <input type="file" class="form-control" name="image" value="{{$item->image}}">
            </div>
            <div class="form-group">
                <label>Content </label>
                <textarea class="form-control" name="content" cols="30" rows="10">{{$item->content}}</textarea>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" class="form-control" name="price" value="{{$item->price}}">
            </div>
            <div class="form-group">
                <label>Condition</label>
                <select class="form-control" name="condition">
                    @foreach($conditions as $con)
                        <option @if($con->id == $item->condition) selected @endif value="{{$con->id}}">{{$con->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Category Product</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                        <option @if($cat->id == $item->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select><br><br>
            </div>

            <button class="btn btn-success form-control" type="submit">Update Post</button>
        </form>
    </div>

@endsection
