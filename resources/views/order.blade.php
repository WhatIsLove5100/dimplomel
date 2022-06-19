<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
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
    <footer class="footer">
        <div class="container">
            <div class="footer__contacts">
                <small class="contacts__copyright">
                    &copy;&nbsp;2018&ndash;2021 Служба заказа такси &laquo;ВТакси&raquo;. 
                    Информационный сервис. Услуги оказываются перевозчиками.
                </small>
                <div class="contacts__list">
                    <ul class="list__link">
                        <li><a href="">О нас</a></li>
                        <li><a href="">Частые вопросы</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                </div>
                <div class="contacts__connection">
                    <div class="connection__ikon">
                        <a href=""><img src="img/instagram.svg" class="ikon" alt="logo instagram"></a>
                        <a href=""><img src="img/vk.svg" class="ikon" alt="logo vk"></a>
                        <a href=""><img src="img/facebook.svg" class="ikon" alt="logo facebook"></a>
                    </div>
                    <div class="connection__phone-number">
                        <a href="tel:8(928)555-55-55" class="phone-number">8(928)555-55-55</a>
                        <span class="phone-number__text">Бесплатно для звонков по РСО-Алания</span>
                    </div>
                </div>
                <div class="contacts__author">
                    <span class="author__name">Дизайн - Хестанова Элина</span>
                </div>
            </div>
        </div>
    </footer>
    <div class="custom-model-main">
        <div class="custom-model-inner">        
        <div class="close-btn">×</div>
            <div class="custom-model-wrap">
                <form action="/order" method="POST">
                    @csrf
                    <div class="pop-up-content-wrap">
                        <div class="pop-up__head">
                            <h2>Заказ такси</h2>
                        </div>
                        <div class="pop-up__input">
                            <input name="place" type="text" placeholder="Место отправления">
                        </div>
                        <div class="pop-up__input pop-up__input-half">
                            <input name="date" type="text" placeholder="Дата">
                        </div>
                        <div class="pop-up__input pop-up__input-half">
                            <input name="time" type="text" placeholder="Время">
                        </div>
                        <div class="pop-up__head-smal">
                            <h3>Контактная информация</h3>
                        </div>
                        <div class="pop-up__input">
                            <input name="full_name" type="text" placeholder="ФИО">
                        </div>
                        <div class="pop-up__input">
                            <input name="phone" type="text" placeholder="Номер телефона">
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
                        <div class="pop-up__btn"><button>Заказать</button></div>
                    </div>
                </form>
            </div>  
        </div>  
        <div class="bg-overlay"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./scripts/main.js"></script>
</body>
</html>