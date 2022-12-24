@extends('layouts.adm')

@section('title', 'Edit Role Users')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-body">
                <form action="{{route('adm.users.update', $user->id)}}" method="POST">
                    @csrf
                    @method("PUT")


                        <label class="display-5">User: {{$user->name}}</label><br>

                    <label class="display-5">Email: {{$user->email}}</label>
                    <div class="form-group">
                        <label for="roleInput">Role</label>
                        <select class="form-control" name="role_id">
                            @foreach($roles as $role)
                                <option @if($role->id == $user->role_id) selected @endif value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <button class="form-control btn-success" type="submit">Update</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
