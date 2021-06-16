@extends('adfm::public.layout')
@section('meta-title', $product->title)

@section('content')
<section class="section section_page section_no-bottom-space">
    <div class="container">
        <div class="section__header">
            <h1 class="h1-header h1-header-page">{{$product->title}}</h1>
        </div>
        <div class="section__content">
            <div class="row">
                <div class="col-12 col-md-7 col-xl-6">
                    <div class="prod-p__image">
                        @if (count($product->files) > 0)
                            {!! ImageCache::get($product->files[0], ['w' => 630, 'h' => 414, 'fit' => 'crop']); !!}
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="prod-p__descr">
                        {!! $product->content !!}
                        <button class="button prod-p__button">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section_page section__catalog">
    <div class="container">
        <div class="section__header">
            <h2 class="h2-header">Другая продукция</h2>
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
@endsection