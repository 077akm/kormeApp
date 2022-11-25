@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')

    <div class="container d-flex">
        <div class="card-body">
            <h4 class="fw-bold mb-4">Товары в корзине</h4>
            @foreach($itemshop as $itemss)

                <div class="card mb-4" style="max-width: 940px;">
                    <div class="row g-0 d-flex">
                        <div class="col-md-3">
                            <img src="{{$itemss->image}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{$itemss->name}}</h5>
                                <div class="d-flex">
                                    <p class="card-text">@foreach($conditions as $con)
                                            <span class="badge bg-danger" @if($con->id == $itemss->condition)>{{$con->name}} @endif</span>
                                        @endforeach</p>
                                    <p class="card-text" style="margin-left: 10px"><small class="text-muted">Код товара: {{$itemss->id}}</small></p>
                                </div><br>

                                <div class="quant d-flex">
                                    <form action="{{route('items.unaddkol', $itemss->id)}}" method="post">
                                        @csrf
                                        <button class="btn btn-outline-secondary" type="submit">-</button>
                                    </form>
                                    <form action="{{route('items.addkol', $itemss->id)}}" method="post" class="d-flex">
                                        @csrf
                                        <input class="form-control" style="width: 60px" value="{{$itemss->pivot->quantity}}" type="number">
                                        <button class="btn btn-outline-secondary" type="submit">+</button>
                                    </form>

                                </div><br>
                                <div class="price">
                                    <h3 class="fw-bold">{{$itemss->price*$itemss->pivot->quantity}} ₸</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="padding-left: 36px">
                            <form action="{{route('items.uncarting',$itemss->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @isset($items)
                    <div class="container">
                        <h1>Pusto</h1>
                    </div>
                @endisset

            @endforeach

            <button class="btn btn-danger ">Подтвердить</button>

            <h4 class="fw-bold mt-3 mb-4">Способ доставки</h4>



        </div>


        <div class="card" style="height: 600px">

            <div class="card-header">
                <h5>Товары: {{$kol}} шт.</h5>
                <hr>
                <h5>Частное лицо: </h5>
                <hr>
                <h5>Доставка: </h5>
                <hr>
                <h5>Оплата: </h5>
            </div>

            <div class="card-body">

                <h4>Итого</h4>
                <div class="d-flex mb-1">
                    <div class="col-md-8"><h6>Сумма</h6></div>
                    <div><h6>{{$sum}} ₸</h6></div>
                </div>
                <div class="d-flex">
                    <div class="col-md-8"><h6>Итоговая скидка</h6></div>
                    <div><h6 style="color:#2ecc71">-{{$bonus}} ₸</h6></div>
                </div>
                <hr>
                <div class="d-flex mb-2">
                    <div class="col-md-7"><h6>К оплате</h6></div>
                    <div><h5 class="fw-bold">{{$sum-$bonus}} ₸</h5></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="sms" type="text" style="height: 80px; width: 250px" placeholder="Комментарий к заказу"></textarea>
                </div><br>
                <form action="{{route('cart.buy')}}" method="post">
                    @csrf
                <button type="submit" class="btn btn-success form-control">Заказ подтверждаю</button>
                </form>
            </div>
        </div>
    </div>



@endsection

