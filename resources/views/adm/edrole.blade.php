@extends('layouts.adm')

@section('title', 'Edit Role Users')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{route('adm.users.update', $user->id)}}" method="POST">
                    @csrf
                    @method("PUT")

                    <p class="card-text">User: {{$user->name}}</p>
                    <small>Email: {{$user->email}}</small>
                    <div class="form-group">
                        <label for="roleInput">Role</label>
                        <select class="form-control" name="role_id">
                            @foreach($roles as $role)
                                <option @if($role->id == $user->role_id) selected @endif value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
