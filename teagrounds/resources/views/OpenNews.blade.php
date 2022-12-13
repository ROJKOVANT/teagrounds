<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/OpenNews.css") }}">
    <title>Какой чай самый расслабляющий</title>
</head>

<body>
    <!--блок шапка-->
    <header>
        <ul class="navigation">
            <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/shop">Магазин</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="">Конструктор</a></li>
            <li class="login"><a href="/register">
                    @auth
                    {{ Auth::user()->name }}
                    @endauth

                    @guest
                    Войти
                    @endguest
                </a></li>
        </ul>
    </header>

    <!--блок Статья-->
    <section class="news">
        <div class="news_paragrph">
            <h3>Чай с шариками — пенистый чайный напиток, в который обычно добавлены «жемчужины»</h3>
        </div>
        <div class="news_info1">
            <img src="{{ asset("img/news1.png") }}" alt="">
            <p>
                Пенный чай вначале появился на Тайване в начале 1980-х годов. Считается,
                что начало положила Лин Сюхуэ́й в кафе «Чуншуйта́н» города Тайчжун,
                когда она добавила местный десерт, фэнъюа́нь , в холодный чай,
                на котором до того кафе специализировалось. По другим сведениям
                старейший известный пенный чай состоял из смеси горячего чёрного чая,
                маленьких шариков тапиоки, сгущённого молока и сиропа или мёда.
                Появившиеся впоследствии варианты обычно используют холодный чай,
                а также зелёный чай или чай с жасмином вместо чёрного.
                Большие шарики тапиоки быстро вытеснили маленькие.
                Появились добавки груши и сливы, затем других фруктов,
                пока в некоторых вариантах чай не был полностью заменён на фрукты.
            </p>
        </div>
        <div class="news_info2">
            <p>
                В конце XX века появились кафе, целиком посвящённые жемчужному чаю,
                подобно фруктовым барам 1990-х годов.
                Некоторые кафе закрывают стакан полусферическим куполом из пластика;
                другие запечатывают стакан целлофаном с помощью специальной машины.
                Для питья используются широкие соломинки, через которые могут пройти шарики.
            </p>
        </div>
    </section>

    <!--блок другие новости-->
    <section class="news_more">
        <h3>Вам также может понравиться</h3>
        <div class="container">
            <div class="item1_new">
                <img src="{{ asset("img/block4img1.png") }}" alt="">
                <a href="">ВАЖНО ЗНАТЬ</a>
                <p>Какой чай самый расслабляющий </p>
                <div class="btn_link">
                    <a href="/OpenNews">Подробнее</a>
                </div>
            </div>
            <div class="item2_new">
                <img src="{{ asset("img/block4img2.png") }}" alt="">
                <a href="">СОВЕТЫ ПОКУПАТЕЛЯМ</a>
                <p>Что такое шириковый чай “Bubble tea” </p>
                <div class="btn_link">
                    <a href="/about">Подробнее</a>
                </div>
            </div>
            <div class="item3_new">
                <img src="{{ asset("img/block4img3.png") }}" alt="">
                <a href="">СОВЕТЫ ПОКУПАТЕЛЯМ</a>
                <p>Какая рольза от зеленного чая</p>
                <div class="btn_link">
                    <a href="/about">Подробнее</a>
                </div>
            </div>
            <div class="item4_new">
                <img src="{{ asset("img/block4img1.png") }}" alt="">
                <a href="">ВАЖНО ЗНАТЬ</a>
                <p>Какой чай самый расслабляющий </p>
                <div class="btn_link">
                    <a href="/about">Подробнее</a>
                </div>
            </div>
        </div>
        <div class="btn">
            <a href="/blog">Еще больше новостей</a>
        </div>
    </section>

    <!--блок footer-->
    <footer>
        <ul class="navigation_footer">
            <li><a href="{{ url('/') }}" style="font-size:2.5vw;">Tea Grounds</a></li>
            <li><a href="{{ url('/about') }}">О нас</a></li>
            <li><a href="{{ url('/shop') }}">Магазин</a></li>
            <li><a href="{{ url('/blog') }}">Блог</a></li>
            <li><a href="">Конструктор</a></li>
        </ul>
        <a href="" style="font-size:1.2vw; color: rgba(255, 255, 255, 0.2);">Политика конфидециальности</a>
        <div class="cop">
            <p>Tea Grounds © 2022 Все права защищены</p>
        </div>
    </footer>
</body>

</html>