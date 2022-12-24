@extends('layouts.adm')

@section('title', 'Category PAGE')

@section('content')

    <div class="container-fluid">
        <a class="btn btn-outline-dark mt-3" href="{{route('adm.categories.create')}}">Create CATEGORY</a>
        @foreach($categories as $cat)

            <div class="container d-flex">
                <a class="list-group-item list-group-item-action" style="padding-right: 60px;margin-top: 3px" href="{{route('items.category', $cat->id)}}"><li>{{$cat->name}}</li></a>
                <form action="{{route('adm.categories.destroy', $cat->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">DELETE</button>
                </form>
            </div>

        @endforeach

    </div>




@endsection
