@extends('layouts.adm')

@section('title', 'Users Page')

@section('content')
    <h1>ORDERS PAGE</h1>



    <table class="table table-light">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Item</th>
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Quantity</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        @for($i=1; $i<=count($itemsInCart); $i++)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$itemsInCart[$i-1]->user->name}}</td>
            <td>{{$itemsInCart[$i-1]->item->name}}</td>
            <td><img src="{{$itemsInCart[$i-1]->item->image}}" style="width: 90px; height: 90px"></td>
            <td>{{$itemsInCart[$i-1]->user->email}}</td>
            <td>{{$itemsInCart[$i-1]->quantity}}</td>
            <td>
                <form action="{{route('adm.cart.confirm', $itemsInCart[$i-1]->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-success" type="submit">Confirm Order</button>
                </form>
            </td>

        </tr>
        @endfor
        </tbody>
    </table>
@endsection
