@extends('layouts.adm')

@section('title', 'Comments Controller')

@section('content')
    <h1>Comments PAGE</h1>

    <table class="table">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Comment</th>
            <th scope="col">Item</th>
            <th scope="col">Time created</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($comments as $com)
        <tr>

            <td>{{$com->user->name}}</td>
            <td>{{$com->text}}</td>
            <td>{{$com->item->name}}</td>
            <td>{{$com->created_at}}</td>
            <td>{{$com->user->role_id}}</td>
        </tr>

        @endforeach
        </tbody>
    </table>


@endsection
