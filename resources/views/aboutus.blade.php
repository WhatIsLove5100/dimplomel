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
    @include('footer')
</body>
</html>