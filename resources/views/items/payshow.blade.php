<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="    ">
        <a class="btn btn-success" href="{{url('/items/profile')}}" style="margin-right: 1240px;margin-bottom: 90px">{{__('bet.back')}}</a>
    </div>

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="{{asset('assets/images/chip.png')}}" alt="">
                <img src="{{asset('assets/images/visa.png')}}" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>{{__('bet.vlpay')}}</span>
                    <div class="card-holder-name">{{__('bet.flname')}}</div>
                </div>
                <div class="box">
                    <span>{{__('bet.expires')}}</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        /
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="{{asset('assets/images/visa.png')}}" alt="">
            </div>
        </div>

    </div>

    <form action="{{route('items.addmon', Auth::user()->id)}}" method="post">
        @csrf
        <div class="inputBox">
            <span>{{__('bet.paynum')}}</span>
            <input type="text" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span>{{__('bet.vlpay')}}</span>
            <input type="text" maxlength="19" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>{{__('bet.expiration')}} mm</span>
                <select name="" id="" class="month-input">
                    <option value="month" selected disabled>{{__('error.month')}}</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>{{__('bet.expiration')}} yy</span>
                <select name="" id="" class="year-input">
                    <option value="year" selected disabled>{{__('error.year')}}</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="3" class="cvv-input">
            </div>

        </div>
        <div class="inputBox">
            <span>{{__('bet.balance')}}</span>
            <input type="number" name="balance" class="card-holder-input">
        </div>
        <input type="submit" value="{{__('bet.confirm')}}" class="submit-btn">
    </form>

</div>






<script>

    document.querySelector('.card-number-input').oninput = () =>{
        document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
    }

    document.querySelector('.card-holder-input').oninput = () =>{
        document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
    }

    document.querySelector('.month-input').oninput = () =>{
        document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
    }

    document.querySelector('.year-input').oninput = () =>{
        document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
    }

    document.querySelector('.cvv-input').onmouseenter = () =>{
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
    }

    document.querySelector('.cvv-input').onmouseleave = () =>{
        document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
        document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
    }

    document.querySelector('.cvv-input').oninput = () =>{
        document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
    }

</script>







</body>
</html>
