@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')

    <div class="container">
        <a class="btn btn-outline-dark" href="{{route('items.index')}}">Go To Index Page</a><br>
        <form action="{{route('items.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>{{__('bet.producname')}}</label>
                    <input type="text" class="form-control" name="name" value="{{$item->name}}">
            </div>
            <div class="form-group">
                <label>{{__('bet.productimage')}}</label>
                <input type="file" class="form-control" name="image" value="{{$item->image}}">
            </div>
            <div class="form-group">
                <label>{{__('bet.content')}} </label>
                <textarea class="form-control" name="content" cols="30" rows="10">{{$item->content}}</textarea>
            </div>
            <div class="form-group">
                <label>{{__('bet.productprice')}}</label>
                <input type="number" class="form-control" name="price" value="{{$item->price}}">
            </div>
            <div class="form-group">
                <label>{{__('bet.condition')}}</label>
                <select class="form-control" name="condition">
                    @foreach($conditions as $con)
                        <option @if($con->id == $item->condition) selected @endif value="{{$con->id}}">{{$con->{'cond_'.app()->getLocale()} }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>{{__('bet.categoryproduct')}}</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $cat)
                        <option @if($cat->id == $item->category_id) selected @endif value="{{$cat->id}}">{{$cat->{'name_'.app()->getLocale()} }}</option>
                    @endforeach
                </select><br><br>
            </div>

            <button class="btn btn-success form-control" type="submit">{{__('bet.updatepost')}}</button>
        </form>
    </div>

@endsection
