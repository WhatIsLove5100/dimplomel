<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>О нас</title>
</head>
<body>
    @include('header')
    <section class="breadcrumb">
        <div class="breadcrumb__container">
            <ul class="breadcrumb__link">
                <li><a href="/">Главная</a></li>
                <li><a href="/aboutus/">О нас</a></li>
            </ul>
        </div>
    </section>
    <main>
        <section class="hero">
            <div class="hero__container">
                <div class="hero__text">
                    <h1 class="text__title">О нас</h1>
                    <p class="text__paragraph">
                        Мы работаем в большинстве городов России. Наша единственная цель состоит в том, чтобы наши клиенты, 
                        пользуясь услугами "ВТакси", получали максимум удовольствия и всегда чувствовали 
                        себя комфортно.   
                    </p>
                    <p class="text__paragraph">
                        Запланировать поездку заранее, чтобы автомобиль приехал в точно указанное время, возможно 
                        только с нами! Так Вы сэкономите свое время и потратите минимум усилий.
                    </p>
                    <p class="text__paragraph"> 
                        В каждом районе города имеется автомобиль, который прибудет за Вами с наименьшей подачей времени. 
                        Нам не страшны отдаленные села, поселки и районы города – мы приедем и заберем Вас вовремя!
                    </p>
                    <p class="text__paragraph">
                        Информационный сервис. Услуги оказываются перевозчиками.
                    </p>
                </div>
            </div>
        </section>
    </main>
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