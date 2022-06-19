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
    @include('footer')
</body>
</html>