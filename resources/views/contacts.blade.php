<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Контакты</title>
</head>
<body>
    @include('header')
    <section class="breadcrumb">
        <div class="breadcrumb__container">
            <ul class="breadcrumb__link">
                <li><a href="/">Главная</a></li>
                <li><a href="/contacts/">Контакты</a></li>
            </ul>
        </div>
    </section>
    <section class="hero">
        <div class="container">
            <div class="hero__title">
                <h1>Контакты</h1>
            </div>
            <div class="hero__h2-title">
                <h2>Городские номера</h2>
            </div>
            <div class="hero__phone">
                <div class="phone">
                    <a href="tel:79726666666" class="footer-contacts-value">+7(972)-666-66-66</a>
                </div>
                <div class="phone">
                    <a href="tel:79727777777" class="footer-contacts-value">+7(972)-777-77-77</a>
                </div>
            </div>
            <div class="hero__h2-title">
                <h2>Офис</h2>
            </div>
            <div class="hero__contacts">
                <div class="contacts">
                    <h3>Адрес офиса</h3>
                    <p>362045, Северная Осетия, г. Владикавказ, ул. **********</p>
                </div>
                <div class="contacts">
                    <h3>Электронная почта</h3>
                    <p>8672666666@gmail.com</p>
                </div>
                <div class="contacts">
                    <h3>Режим работы офиса</h3>
                    <p>Пн. - вс.: с 8:00 до 18:00</p>
                </div>
                <div class="contacts">
                    <h3>Контактное лицо</h3>
                    <p>Хестанова Элина Алановна</p>
                </div>
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
</body>
</html>