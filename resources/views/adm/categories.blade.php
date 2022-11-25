@extends('layouts.adm')

@section('title', 'Category PAGE')

@section('content')

    <div class="container-fluid">
        @foreach($categories as $cat)

            <a class="list-group-item list-group-item-action" style="padding-right: 60px;margin-top: 3px" href="{{route('items.category', $cat->id)}}"><li>{{$cat->name}}</li></a>

        @endforeach
    </div>




@endsection
