<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css">
    <title>Taxi</title>
</head>
    @include('header')
    <main>
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

        <section class="direction">
            <div class="container">
                <div class="direction__title">
                    <h1>Цены на популярные направления</h1>
                </div>
                <div class="direction__price">
                    @foreach ($directions as $dir)
                        <div class="price__card">
                        <p>{{ $dir->from }} — {{ $dir->to }}</p>
                        <p>560р</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="feedback">
            <div class="container">
                <div class="feedback__container">
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
            </div>
        </section>
        <section class="advantages">
            <div class="container">
                <div class="advantages__title">
                    <h1>Преимущества</h1>
                </div>
                <div class="advantages__enumeration">
                    <div class="enumeration">
                        <img src="public/img/1.svg" alt="1">
                        <p>Гарантия подачи машины</p>
                    </div>
                    <div class="enumeration">
                        <img src="public/img/2.svg" alt="1">
                        <p>Бесплатное ожидание даже в случае сильной задержки рейса</p>
                    </div>
                    <div class="enumeration">
                        <img src="public/img/3.svg" alt="1">
                        <p>Наличие детских удерживающих устройств</p>
                    </div>
                    <div class="enumeration">
                        <img src="public/img/4.svg" alt="1">
                        <p>Фиксированная цена во все дни, включая выходные и праздники</p>
                    </div>
                    <div class="enumeration">
                        <img src="public/img/5.svg" alt="1">
                        <p>Все поездки по системе «от двери до дверей» без доплат</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="standards">
            <div class="container">
                <div class="standards__title">
                    <h1>Стандарты</h1>
                </div>
                <div class="standards__paragraph">
                    <div class="paragraph">
                        <h1>Гарантируем подачу машины</h1>
                        <p>Гарантируем подачу машины. Если вы сделали заказ за 24 часа,
                        в любой ситуации мы гарантируем подачу машины! Даже в случае форс-мажора,
                        мы найдем замену в течении 10 минут. Как мы это делаем? В экстренных
                        ситуациях мы доплачиваем водителям, чтобы гарантированно найти машину
                        и выполнить наши обязательства. В нашей системе зарегистрировано свыше
                        6000 исполнителей, а это значит, что мы не испытываем дефицита в
                        водителях и мы гарантированно выполним Ваш заказ.</p>
                    </div>
                    <div class="paragraph">
                        <h1>Машина подается того класса, который заказывали</h1>
                        <p>Или класса выше. Вместительность известна заранее: сколько
                        человек может уехать, для скольких сумок и чемоданов стандартных
                        размеров есть место в багажнике. Заказывая через какое-нибудь
                        местное приложение такси от аэропорта, это не всегда можно
                        предсказать.</p>
                    </div>
                    <div class="paragraph">
                        <h1>Задерживается рейс?</h1>
                        <p>Работник нашей компании гарантированно вас дождется, и за это 
                        время Вам не придется доплачивать, что очень удобно для каждого 
                        клиента. При переносе вылета, диспетчер произведет замену автомобиля, 
                        поэтому Вы гарантированно не останетесь без транспорта.</p>
                    </div>
                    <div class="paragraph">
                        <h1>Все цены на сайте указаны за машину</h1>
                        <p>У нас на сайте все цены фиксированы и указаны за машину. 
                        Мы понимаем, что в Крыму распространена проблема подсадки в 
                        автомобиль других людей, без ведома клиента, однако, мы не 
                        оказываем таких услуг и при заказе у нас случайно такого не может 
                        произойти.</p>
                    </div>
                    <div class="paragraph">
                        <h1>Машина подается заранее</h1>
                        <p>Перевозчик знает номер рейса, которым вы прилетаете в аэропорт 
                        — такси уже ждет на стоянке, а водитель встречает вас так близко 
                        к зоне прилета, насколько позволяют правила. То же самое — для 
                        такси от вокзалов и из отелей: встречающий будет на месте, по 
                        указанному адресу — таково правило сервиса. Можно вызвать местное 
                        такси в аэропорт это будет дороже и придется ждать машину, искать 
                        водителя, и времени уйдет на пол часа больше, чем если Вы закажите 
                        у нас.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
</body>
</html>