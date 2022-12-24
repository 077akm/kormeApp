@extends('layouts.app')

@section('title', 'No perm')

@section('content')


<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>:(</h1>
        </div>
        <h2>OOPS - Your Status Simple Bro </h2>
        <p>Go Call your ADMINCTRATOR!</p>
        <a href="{{url('/items')}}">home page</a>
    </div>
</div>



@endsection
