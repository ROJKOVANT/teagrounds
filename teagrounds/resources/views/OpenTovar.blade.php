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
    <link rel="stylesheet" href="{{ asset("css/OpenTovar.css") }}">
    <title>Манговый сок чай</title>
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

    <section class="open_tovar">
        <h1>Манговый сок чай</h3>
            <div class="tovar_product">
                <div class="tovar_img">
                    <img src="{{ asset("img/mango.jpg") }}"" alt="">
                </div>
                <div class=" tovar_info">
                    <div class="cont1">
                        <h4>Манговый сок чай</h4>
                        <p>Чарующий аромат манго в сочетании с терпкостью насыщенного
                            Ассама создают великолепную чайную композицию.
                        </p>
                    </div>
                    <div class="cont2">
                        <h4>Состав</h4>
                        <p>Чарующий аромат манго в сочетании с терпкостью насыщенного
                            Ассама создают великолепную чайную композицию.
                        </p>
                    </div>
                    <div class="cont3">
                        <ul class="link1">
                            <h4>Страна / Регион</h4>
                            <p>Россия</p>
                        </ul>
                        <ul class="link1">
                            <h4>Вид </h4>
                            <p>Черный чай с добавками</p>
                        </ul>
                        <ul class="link1">
                            <h4>Вкус</h4>
                            <p>Цветочный, Ягодный</p>
                        </ul>
                    </div>
                </div>
                <div class=" price_info">
                    <div class="contprice1">
                        <p>260₽ / 50гр.</p>
                    </div>
                    <div class="btn_top1">
                        <button class="btn_top1_more1">Добавить</button>
                        <button class="btn_top1_more2">Купить</button>
                    </div>
                    <div class="delivery">
                        <img src="{{ asset("img/truck.png") }}"" alt="">
                        <p>Рассчитать доставку</p>
                    </div>
                    <div class=" info_price">
                        <p>Цена действительна только для интернет-магазина
                            и может отличаться от цен в розничных магазинах !</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="paragraph">
        <div class="container_btn">
            <div class="btn_contain1">
                <button class="btn_contain1_more1">Описание</button>
            </div>
            <div class="btn_contain2">
                <button class="btn_contain2_more2">Как готовить</button>
            </div>
            <div class="btn_top3">
                <button class="btn_contain3_more3">Как купить</button>
            </div>
            <div class="btn_top4">
                <button class="btn_contain4_more4">Оплата</button>
            </div>
            <div class="btn_top5">
                <button class="btn_contain5_more5">Отзывы</button>
            </div>
        </div>
        <h3>Описание</h3>
        <p>
            Чарующий аромат манго в сочетании с терпкостью насыщенного Ассама создают великолепную чайную композицию. Цветы апельсинового дерева оставляют приятное цитрусовое послевкусие, а папайя добавляет сладости свежему букету.
            Состав купажа: индийский черный чай Ассам, папайя, манго, цветы апельсинового и сандалового дерева, синий василек.
            Рекомендации по завариванию: 3 грамма на чашку 200 мл, 90-95 градусов 3 минуты после закипания, 3-5 минут дать на заваривание.
        </p>

        <!--блок footer-->
        <footer>
            <ul class=" navigation_footer">
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