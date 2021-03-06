<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo-taxi.svg" />
    <title>Заказ</title>
</head>
<body>
    @include('header')
    <section class="breadcrumb">
        <div class="breadcrumb__container">
            <ul class="breadcrumb__link">
                <li><a href="/">Главная</a></li>
                <li><a href="/order/">Заказ</a></li>
            </ul>
        </div>
    </section>
    <section class="tariff">
        <div class="tariff__container">
            <div class="tariff__cards">
                @foreach ($tariffs as $tariff)
                    <div class="card__content">
                        <div class="content__logo">
                            <img src="{{ $tariff['img'] }}" alt="">
                        </div>
                        <div class="content__h4">
                            <h4>{{ $tariff['name'] }}</h4>
                        </div>
                        <div class="content__cars">
                            <p>{{ $tariff['cars'] }}</p>
                        </div>
                        <div class="content__price">
                            <small>{{ $tariff['price'] }}</small>
                        </div>
                        <div class="content__btn">
                            <button>Заказать</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="hero">
        <div class="hero__title">
            <h1>Такси по Северной Осетии-Алании</h1>    
        </div>
        <div class="hero__container">
            <div class="hero__form">
                <form id="dir" name="dir" action="/direction" method="POST"> 
                    @csrf
                    <div class="form__row">
                        <div class="form__input">
                            <input type="text" name="from" placeholder="Откуда">
                        </div>
                        <div class="form__input">
                            <input type="text" name="to" placeholder="Куда">
                        </div>
                        <div class="form__btn">
                            <button>Найти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="container">
            <div class="feedback__title">
                <h1>Отзывы</h1>
            </div>
            <div class="feedback__card">
                @foreach ($reviews as $review)
                    <div class="card">
                        <div class="card__container">
                            <div class="card__rating">
                                @for ($i = 1; $i < 6; $i++)
                                    <span
                                        @if ($review->grade >= $i)
                                            class="rating__active"
                                        @endif
                                    >
                                    </span> 
                                @endfor
                            </div>
                            <div class="card__title">
                                <h3>ВТакси</h3>
                            </div>
                            <div class="card__text">
                                <p>{{ $review->text }}</p>
                            </div>
                        </div>
                        <div class="feedback__username">
                            <p>{{ $review->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('footer')
    <div class="custom-model-main">
        <div class="custom-model-inner">        
        <div class="close-btn">×</div>
            <div class="custom-model-wrap">
                <form id="order-form" action="/order" method="POST">
                    @csrf
                    <div class="pop-up-content-wrap">
                        <div class="pop-up__head">
                            <h2>Заказ такси</h2>
                        </div>
                        <div class="pop-up__input">
                            <input id="place" name="place" type="text" placeholder="Место отправления" minlength="3">
                        </div>
                        <div class="pop-up__input pop-up__input-half">
                            <input id="date" name="date" type="text" placeholder="Дата">
                        </div>
                        <div class="pop-up__input pop-up__input-half">
                            <input id="time" name="time" type="text" placeholder="Время">
                        </div>
                        <div class="pop-up__head-smal">
                            <h3>Контактная информация</h3>
                        </div>
                        <div class="pop-up__input">
                            <input id="full_name" name="full_name" type="text" placeholder="ФИО">
                        </div>
                        <div class="pop-up__input">
                            <input id="phone" name="phone" type="text" placeholder="Номер телефона">
                        </div>
                        <div class="pop-up__police">
                            <div class="pop-up__police-checkbox">
                                <input type="checkbox" id="police">
                                <label for="police"></label>
                            </div>
                            <div class="pop-up__police-text">
                                Я согласен с условиями
                                Политики конфиденциальности
                            </div>
                        </div>
                        <div class="pop-up__btn submit" type="submit"><button>Заказать</button></div>
                    </div>
                </form>
            </div>  
        </div>  
        <div class="bg-overlay"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="./scripts/main.js"></script>
</body>
</html>