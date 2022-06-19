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
    @include('footer')
</body>
</html>