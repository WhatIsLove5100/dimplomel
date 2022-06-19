<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Отзывы</title>
</head>
<body>
    @include('header')
    <section class="breadcrumb">
        <div class="breadcrumb__container">
            <ul class="breadcrumb__link">
                <li><a href="/">Главная</a></li>
                <li><a href="/feedback/">Отзывы</a></li>
            </ul>
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
    <section class="form">
        <div class="form__container">
            <div class="form__title">
                <h3>Оставить отзыв</h3>
            </div>
            <form action="/review" method="POST">
                @csrf
                <div class="form__input">
                    <input name="name" type="text" placeholder="Имя">
                </div>
                <div class="form__input">
                    <input name="surname" type="text" placeholder="Фамилия">
                </div>
                <div class="form__input">
                    <textarea name="text" id="" placeholder="Отзыв"></textarea>
                </div>
                <div class="form__rating">
                    <div class="rating__star">
                        <span class="star__active"></span>	
                        <span class="star__active"></span>    
                        <span class="star__active"></span>  
                        <span></span>    
                        <span></span>
                    </div>
                    <button class="form__btn">Отправить</button>
                </div>
            </form>
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
</body>
</html>