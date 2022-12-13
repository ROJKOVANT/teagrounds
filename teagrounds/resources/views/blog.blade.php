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
        <link rel="stylesheet" href="{{ asset("css/blog.css") }}">
        <title>Статьи</title>
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

        <section class="paragraph">
            <h3>Статьи</h3>
            <div class="container_btn">
                <div class="btn_top1">
                    <button class="btn_top1_more1">Все статьи</button>
                </div>
                <div class="btn_top2">
                    <button class="btn_top2_more2">Советы покупателям</button>
                </div>
                <div class="btn_top3">
                    <button class="btn_top3_more3">Важно знать</button>
                </div>
            </div>
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
            <div class="container2">
                <div class="item1_new">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <a href="">ВАЖНО ЗНАТЬ</a>
                    <p>Какой чай самый расслабляющий </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
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
            <div class="container3">
                <div class="item1_new">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <a href="">ВАЖНО ЗНАТЬ</a>
                    <p>Какой чай самый расслабляющий </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
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
            <div class="container4">
                <div class="item1_new">
                    <img src="{{ asset("img/block4img1.png") }}" alt="">
                    <a href="">ВАЖНО ЗНАТЬ</a>
                    <p>Какой чай самый расслабляющий </p>
                    <div class="btn_link">
                        <a href="/about">Подробнее</a>
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
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
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
            <p>Tea Grounds  ©  2022 Все права защищены</p>
        </div>
    </footer>
    </body>
</html>