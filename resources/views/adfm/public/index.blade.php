@extends('adfm::public.layout')
{{-- @section('meta-title', $page->title) --}}

@section('content')
    <section class="section section__slider">
        <div class="section__content section__wrap">
            <div class="slider"></div>
        </div>
    </section>
    <section class="section section__garant">
        <div class="container">
            <div class="bg-photo-item">
                <img src="../images/stock-photo-cherry-tomatoes-isolated-on-white-background-top-view-1033077385 2.png">
            </div>
            <div class="section__header">
                <h1 class="h1-header h1-header_simple">Гарантированное качество</h1>
            </div>
            <div class="section__content">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="garant">
                            <div class="garant__number">01</div>
                            <div class="garant__item">
                                <div class="garant__image">
                                    <img src="../images/del.svg">
                                </div>
                                <div class="garant__name">Доставка по области</div>
                                <div class="garant__decr">5 раз в неделю с понедельника по пятницу</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="garant">
                            <div class="garant__number">02</div>
                            <div class="garant__item">
                                <div class="garant__image">
                                    <img src="../images/san.svg">
                                </div>
                                <div class="garant__name">Санитарный контроль</div>
                                <div class="garant__decr">Продукция проходит ежедневный санитарный контроль</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="garant">
                            <div class="garant__number">03</div>
                            <div class="garant__item">
                                <div class="garant__image">
                                    <img src="../images/pig.svg">
                                </div>
                                <div class="garant__name">Заказ без предоплаты</div>
                                <div class="garant__decr">Оплата при получении картой или наличными</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section__products">
        <div class="container">
            <div class="section__header">
                <h1 class="h1-header">Наша продукция</h1>
            </div>
            <div class="section__content">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product">
                            <div class="product__info">
                                <a href="{{route('adfm.show.product', $product)}}">
                                <div class="product__name">{{$product->title}}</div>
                                <div class="product__price">{{$product->price}} руб.</div>
                                <a href="{{route('adfm.show.product', $product)}}"><button class="button product__button">Подробнее</button></a>
                                </a>
                            </div>
                            <div class="product__image">
                                <a href="{{route('adfm.show.product', $product)}}">
                                @if (count($product->files) > 0)
                                    {!! ImageCache::get($product->files[0], ['w' => 157, 'h' => 190, 'fit' => 'crop']); !!}
                                @endif
                                </a>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section section__instruction">
        <div class="container">
            <div class="section__header">
                <h1 class="h1-header h1-header_instr">Как оформить заказ</h1>
            </div>
            <div class="section__content">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="instr__item">
                            <div class="instr__number">Шаг 1</div>
                            <div class="instr__text">Указываете что хотите купить на сайте или по телефону</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="instr__item">
                            <div class="instr__number">Шаг 2</div>
                            <div class="instr__text">Мы уточняем заказ по телефону и адрес доставки</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="instr__item">
                            <div class="instr__number">Шаг 3</div>
                            <div class="instr__text">Вы встречаете доставку курьером в назначенное время</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="instr__item">
                            <div class="instr__number">Шаг 4</div>
                            <div class="instr__text">Проверяете заказ, оплачиваете доставку удобным способом</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection
