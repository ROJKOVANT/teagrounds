@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="{{ asset("css/home.css") }}">
</head>
<div class="d-f">
    <div class="navigation">
        <div class="navigation-f1">
            <li><a href="/" style="font-size:2.5vw;">Tea Grounds</a></li>
        </div>

        <div class="navigation-f2">
            <li><a href="/about">О нас</a></li>
            <li><a href="/shop">Магазин</a></li>
            <li><a href="/blog">Блог</a></li>
            <li><a href="">Конструктор</a></li>
        </div>

        <div class="navigation-f3">
            <li><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}</a>
            </li>
            <li><a href="">Заказы</a></li>
            <li><a href="">История заказов</a></li>
        </div>
            
        <div class="navigation-f4">
            <li><a href="">Помощь</a></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Выход') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </div>
    </div>
    <div class="container">
        <div class="point">
            <p>Профиль</p>
        </div>
        <div class="info">
            <div class="info-avatar">
                <div class="elips"></div>
                <p>Лиджиев Александр Олегович</p>
            </div>
        </div>
        
    </div>
</div>