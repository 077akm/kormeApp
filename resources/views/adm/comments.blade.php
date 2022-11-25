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
            <th scope="col">Delete</th>
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
            <td>
                <form action="{{route('comments.destroy', $com)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button><br>
                </form>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>


@endsection
