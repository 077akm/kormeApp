
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('comments.update',$comment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titleInput">{{__('bet.yoinput')}}</label><br>
                        <input type="text" class="form-control" id="titleInput" name="text" value="{{$comment->text}}">
                        <div class="invalid-feedback"></div>
                        <button class="btn btn-outline-secondary" type="submit">{{__('bet.edit')}} </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
