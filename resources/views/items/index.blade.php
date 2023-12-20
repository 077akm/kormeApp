@extends('layouts.app')

@section('title', 'INDEX PAGE')

@section('content')

    <div class="d-flex" style="margin-top: 55px">
        @isset($categories)
        @foreach($categories as $cat)
            <a class="list-group-item list-group-item-action" href="{{route('items.category', $cat->id)}}">
        <div class="card1 mb-3" style="max-width: 540px; margin-left: 40px">
            <div class="row g-0">
                <div class="col-md-4" >
                    <div class="circular--portrait"> <img src="{{asset('assets/images/category/'.$cat->id.'.jpg')}}" alt="{{ $cat->name }}" /> </div>


                </div>
                <div class="col-md-8">
                    <div class="card-body" style="padding-top: 0px;padding-left: 50px; margin-top: 55px">
                        <h5 class="card-title fw-bold">{{$cat->{'name_'.app()->getLocale()} }}</h5>
                    </div>
                </div>
            </div>
        </div>
            </a>
        @endforeach
        @endisset
    </div>

    <div id="loader"></div>
    <div id="container">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col">


        </div>
        <div class="col">
            @foreach($items as $item)
            <div class="window">

                <img class="foto" src="{{asset($item->image)}}">


                <div class="hover-zone">
                    <div class="top-bar">
                        <p>Profile ⌵</p>
                        <a href="{{route('items.show', $item->id)}}">{{ __('bet.view') }}</a>
                    </div>
                    <!-------------------->
                    <div class="bottom-bar">
                        <a>↗ {{$item->name}}</a>
                        <div class="radius-ico">
                            <img draggable="false" src="https://cdn3.iconfinder.com/data/icons/iconset-1-1/24/icon_set_outlinder-10-256.png">
                            <img draggable="false" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-more-256.png">
                            {{--@can('delete', $item)
                                <form action="{{route('items.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit">{{ __('bet.delete') }}</button>
                                </form>
                            @endcan--}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>

    <script>
        let page = 1;
        let fetching = false;
        const container = document.getElementById('container');
        const cols = Array.from(container.getElementsByClassName('col'));
        console.log(cols)

        const fetchImageData = async () => {
            try {
                fetching = true;
                document.getElementById('loader').style.display = 'block';
                const response = await fetch(`https://dog.ceo/api/breeds/image/random/30`);
                const data = await response.json();
                fetching = false;
                return data.message;
            } catch (error) {
                console.error("Error fetching data:", error);
                fetching = false;
                throw error;
            }
        };

        fetchImageData().then((images) => {
            if (images.length > 0) {
                images.forEach((image, index) => {
                    createCard(image, cols[index % cols.length]);

                    console.log(index % cols.length)
                });
            }
        }).catch((error) => {
            console.error("Error initial fetch:", error);
        });

        const createCard = (image, col) => {
            const card = document.createElement('div');
            card.classList.add('card');
            const img = document.createElement('img');
            img.src = image;
            img.alt = "Random Image";
            img.style.width = "100%";
            img.onerror = function () {
                this.parentElement.style.display = "none";
            };
            img.onload = function () {
                document.getElementById('loader').style.display = 'none';
            };
            card.appendChild(img);
            col.appendChild(card);
        };


        const handleScroll = () => {
            if (fetching) return;

            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const bodyHeight = document.documentElement.scrollHeight;

            if (bodyHeight - scrollTop - windowHeight < 800) {
                page++;
                fetchImageData().then((images) => {
                    if (images.length > 0) {
                        images.forEach((image, index) => {
                            createCard(image, cols[index % cols.length]);
                        });
                    }
                }).catch((error) => {
                    console.error("Error handling scroll:", error);
                });
            }
        };

        window.addEventListener('scroll', handleScroll);
    </script>







<style>
    .window{
        border-radius:20px;

        width:100%;

        overflow:hidden;
        position:relative;
        z-index:97;
    }
    .window .foto{
        width:100%;
        border-radius:20px;
        cursor:zoom-in;
    }
    .window .content{
        margin-left:10px;
        margin-top:-2px;
        font-size:13px;
        font-weight:bold;
    }
    .window .user{
        width:40px;
        border-radius:50%;
        margin-top:-10px;
        margin-left:10px;
        cursor:pointer;
    }
    .window .username{
        margin-top:-40px;
        display:block;
        margin-left:55px;
        font-size:14px;
        cursor:pointer;
    }
    .window .username:hover{
        text-decoration:underline;
    }

    /*HOVER ZONE*/
    .hover-zone{
        position:absolute;
        top:0px;
        width:100%;
        height:100%;
        border-radius:20px;
        cursor:zoom-in ;
        display:flex;
        align-content:space-between;
        align-items:baseline;
        justify-content:center;
        flex-wrap:wrap;
        background-color: rgba(000, 000, 0, 0.40);
        user-select:none;
    }
    .hover-zone .top-bar{
        display:flex;
        justify-content:space-between;
        align-items:center;
        padding:5px 10px;
        width:100%;
        border-radius:20px;
    }
    .hover-zone .top-bar p{
        color:white;
        font-size:20px;
        font-weight:bolder;
        cursor:pointer;
        display:inline-block;
    }
    .hover-zone .top-bar a{
        color:white;
        padding:15px 25px;
        font-weight:bolder;
        font-size:14px;
        border-radius:40px;
        cursor:pointer;
        background:red;
    }
    .hover-zone .top-bar a:hover{
        background:#b80202;
    }
    .hover-zone .bottom-bar{
        padding:10px 10px;
        width:100%;
        border-radius:20px;
        display:flex;
        justify-content:space-between;
        align-items:center;
    }
    .hover-zone .bottom-bar a{
        padding:5px 10px;
        background:#efefef;
        border-radius:40px;
        cursor:pointer;
        font-weight:bolder;
    }
    .hover-zone .bottom-bar a:hover{
        background:white;
    }
    .hover-zone .bottom-bar img{
        width:20px;
        border-radius:50%;
        background:#efefef;
        padding:6px;
        cursor:pointer;
        margin:0px 2px;
    }
    .hover-zone .bottom-bar img:hover{
        background:white;
    }
    .hover-zone{
        opacity:0;
    }
    .window:hover .hover-zone{
        opacity:1;
    }
    .card1:hover {
        box-shadow: 0 0 10px #0af9d7,
        0 0 1px #0af9d7,
        0 0 5px #0af9d7,
        0 0 20px #0af9d7,
        0 0 70px #0af9d7;
    }
    .circular--portrait {
        position: relative;
        width: 120px;
        height: 120px;
        overflow: hidden;
        border-radius: 50%;
        margin: 1em;
    }
    .circular--portrait img {
        width: 100%;
        height: auto;
    }
    .card1 {
        width: 300px;
        background-color: #ffffff;
        border-radius: 100px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card-title {
        margin-top: 0;
        margin-bottom: -20px;
        font-size: 20px;
        color: #333333;
    }

</style>




@endsection

