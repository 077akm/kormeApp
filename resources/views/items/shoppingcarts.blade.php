@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')

    <div class="container d-flex mt-5" >
        <div class="card-body">
            <h4 class="fw-bold mb-4">{{__('bet.korzina')}}</h4>
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
                                            <span class="badge bg-danger" @if($con->id == $itemss->condition)>{{$con->{'cond_'.app()->getLocale()} }} @endif</span>
                                        @endforeach</p>
                                    <p class="card-text" style="margin-left: 10px"><small class="text-muted">{{__('bet.idtovar')}}: {{$itemss->id}}</small></p>
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
                        <div class="col" >
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


            @endforeach
            @if($kol==0)
                <div class="container" style="margin-left: 410px; margin-top:85px;margin-bottom: 85px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/> </svg>

                    <h1 class="mt-2">Pusto</h1>
                    <p>buny zhondeuge bolad</p>
                    <a class="btn btn-dark" href="{{url('/items')}}" >tauar al</a>
                </div>
            @endif
            {{--<button class="btn btn-danger ">{{__('bet.confirm')}}</button>--}}

            <button class="collapsible"><h4 class="fw-bold mt-3 mb-4">{{__('bet.dostavkatovar')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                    </svg>
                </h4></button>
            <div class="content">
                <div class="form-group">
                    <label for="cityInput">{{__('bet.city')}}</label>
                    <select class="form-control" name="city" id="cityInput">
                        {{--@foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->{'name_'.app()->getLocale()} }}</option>
                        @endforeach--}}
                        <option value="Almaty">Almaty</option>
                        <option value="Almaty">Almaty</option>
                        <option value="Almaty">Almaty</option>
                    </select><br>
                    <div class="col-md-6">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7214490598b34fb11ab147a7f223c19ca9f70d3235f065dabb4cd5856013c061&amp;width=900&amp;height=364&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>

            <button class="collapsible"><h4 class="fw-bold mt-3 mb-4">{{__('bet.pay')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                    </svg>
                </h4></button>
            <div class="content">
                <a class="btn btn-info" href="{{url('/items/payshow')}}">{{__('bet.tobebank')}}</a>
            </div>



        </div>


        <div class="card" style="height: 600px">

            <div class="card-header">
                <h5>{{__('bet.product')}}: {{$kol}} шт.</h5>
                <hr>
                <h5>{{__('bet.deliver')}}: </h5>
                <hr>
                <h5>{{__('bet.pay')}}: {{Auth::user()->balance}} ₸</h5>
            </div>

            <div class="card-body">

                <h4 class="fw-bold">{{__('bet.thetotal')}}</h4>
                <div class="d-flex mb-1">
                    <div class="col-md-8"><h6>{{__('bet.total')}}</h6></div>
                    <div><h6>{{$sum}} ₸</h6></div>
                </div>
                <div class="d-flex">
                    <div class="col-md-8"><h6>{{__('bet.discount')}}</h6></div>
                    <div><h6 style="color:#2ecc71">-{{$bonus}} ₸</h6></div>
                </div>
                <hr>
                <div class="d-flex mb-2">
                    <div class="col-md-7"><h6>{{__('bet.tobepay')}}</h6></div>
                    <div><h5 class="fw-bold">{{$sum-$bonus}} ₸</h5></div>
                </div>
                <form action="{{route('cart.buy',Auth::user()->id)}}" method="post">
                    @csrf
                <div class="form-group">
                    <textarea class="form-control" name="sms" type="text" style="height: 80px; width: 250px" placeholder="{{__('bet.commentsorder')}}" required></textarea>
                </div><br>
                    @if(Auth::user()->balance < $sum-$bonus)
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                         <div style="margin-left: 10px">
                             {{__('error.nobalance')}}
                        </div>
                    </div>
                    @endif
                <button type="submit" class="btn btn-success form-control"
                @if(Auth::user()->balance <= $sum-$bonus || $kol == 0) disabled @endif>
                    {{__('bet.orderconf')}}

                </button>
                </form>
            </div>
        </div>
    </div>


<script>
    let coll = document.getElementsByClassName('collapsible');
    for (let i=0;i<coll.length;i++){
        coll[i].addEventListener('click', function (){
            this.classList.toggle('active');
            let content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px'
            }
        })
    }
</script>
@endsection

