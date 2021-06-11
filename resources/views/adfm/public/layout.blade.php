<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('meta-title')@show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__main-section">
            <div class="container header__main-section-cotainer">
                <div class="logo header__logo">
                    <a href="/">
                        <div class="logo__image">
                            <img src='{{asset('images/logo.png')}}' alt="Логотип">
                        </div>
                        <div class="logo__text">Абаканский <br> Консервный Цех</div>
                    </a>
                </div>
                <div class="contacts header__contacts">
                    <div class="contacts__address">г. Абакан ул. Павших Коммунаров 50</div>
                    <div class="contacts__phone">Телефон доставки : <a class="contacts__phone contacts__phone-a" href="tel:+79083001020">+7 908 300 10 20</a></div>
                    <button class="button contacts__button feedback-button">Обратный звонок</button>
                </div>
            </div>
        </div>
        <div class="header__menu-section">
            <div class="container">
                <nav class="header__main-menu main-menu">
                    @php($links = \App\Models\Adfm\Menu::getData('main'))
                    <ul class="menu horizontal-list menu__list">
                        @foreach($links[0] as $el)
                        <li class="list__item"><a href="{{$el->link}}">{{$el->title}}</a></li>
                        @endforeach
                    </ul>
                </nav>
                <div class="header__burger-button burger-button">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="logo logo-bg">
            <img src="{{asset('images/logo-bg.png')}}" alt="Логотип">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="footer__menu">
                        <ul class="menu vertical-list menu__list">
                            @foreach($links[0] as $el)
                            <li class="list__item"><a href="{{$el->link}}">{{$el->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                    <div class="contacts footer__contacts">
                        <div class="contacts__item contacts__phone-c">
                            <div class="icon footer__contacts-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="contact-info contact-info__phone">
                                Звоните прямо сейчас<br>
                                <a class="contacts__phone contacts__phone-a" href="tel:+79083001020">+7 908 300 10 20</a><br>
                                с 09:00 до 19:00 без выходных
                            </div>
                        </div>
                        <div class="contacts__item contacts__address">
                            <div class="icon footer__contacts-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info contact-info__address">
                                655 150 г. Абакан<br>
                                ул. Павших Коммунаров 50 (заезд на территорию бывшей кондитерской фабрики повернуть на лево и до упора)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-5">
                    <div class="footer__info">
                        © Абаканский Консервный Цех 2021. Все права защищены<br>
                        <br>
                        Индивидуальный предприниматель Сиорпас Алексей Сергеевич ИНН 190116813862 ОГРНИП 320190100013260 Филиал «Новосибирский» АО «Альфа-Банк» БИК 045004774 № счета 40802810423540000335
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
