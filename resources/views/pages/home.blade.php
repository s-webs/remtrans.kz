@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)

@section('title', 'Главная')

@section('content')
    <div class="services container">
        @foreach($serviceTail as $item)
            <div class="services__item">
                <div class="services__item-img ibg">
                    <img src="/storage/{{ $item->image }}" alt=""/>
                </div>
                <div class="services__item-title">{{ $item->title }}</div>
                <div class="services__item-link">
                    <a href="{{ $item->link }}">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="home-about container">
        <div class="heading">
            <h1>Rem Trans KZ</h1>
        </div>
        <div class="home-about__about">
            {!! $data->content !!}
        </div>
    </div>

    <div class="rating container">
        <div class="heading">
            <h1>Rem Trans KZ в цифрах</h1>
        </div>
        <div class="rating__items">
            @foreach($ratingTail as $item)
                <div class="rating__item ibg">
                    <img src="/storage/{{ $item->image }}" alt="{{ $item->title }}"/>
                    <div class="rating__item--filter"></div>
                    <div class="rating__item-title">{{ $item->title }}</div>
                    <div class="rating__item-value">{{ $item->value }}</div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="clients container">
        <div class="heading">
            <h1>Наши клиенты</h1>
        </div>
        <div class="clients__slider">
            <div class="swiper clientsSlider">
                <div class="swiper-wrapper clients__wrapper">
                    @foreach($clients as $client)
                        <div class="swiper-slide clients__slide">
                            <img src="/storage/{{ $client->image }}" alt="{{ $client->title }}"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination clients__pagination"></div>
            </div>
        </div>

        <div class="clients__mobile-slider">
            <div class="swiper clientsMobileSlider">
                <div class="swiper-wrapper clients__mobile-wrapper">
                    @foreach($clients as $client)
                        <div class="swiper-slide">
                            <img src="/storage/{{ $client->image }}" alt="{{ $client->title }}"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination clients__mobile-pagination"></div>
            </div>
        </div>
    </div>

    @if(!$comments->isEmpty())
        <div class="reviews container">
            <div class="heading reviews__heading">
                <h1>Отзывы</h1>
                <a href="reviews.html">Смотреть все отзывы</a>
            </div>
            <div class="swiper reviewsSlider reviews__slider">
                <div class="swiper-wrapper reviews__wrapper">

                    @foreach($comments as $item)
                        <div class="swiper-slide reviews__item">
                            <div class="reviews__header">
                                <div class="reviews__photo ibg" style="border-radius: 100%">
                                    @if($item->image == null)
                                        <img src="assets/images/default-avatar.png" alt="avatar"/>
                                    @else
                                        <img src="/storage/{{ $item->image }}" alt="{{ $item->fullname }}"/>
                                    @endif
                                </div>
                                <div class="reviews__details">
                                    <div class="reviews__name">{{ $item->fullname }}</div>
                                    <div class="reviews__position">
                                        {{ $item->position }}
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__text">
                                {{ $item->comment }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination clients__pagination"></div>
            </div>
        </div>
    @endif

    <div class="clients container">
        <div class="heading">
            <h1>Наши партнеры</h1>
        </div>
        <div class="clients__slider">
            <div class="swiper partnersSlider">
                <div class="swiper-wrapper clients__wrapper">
                    @foreach($partners as $partner)
                        <div class="swiper-slide clients__slide">
                            <img src="/storage/{{ $partner->image }}" alt="{{ $partner->title }}"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination clients__pagination"></div>
            </div>
        </div>
        <div class="clients__mobile-slider">
            <div class="swiper partnersMobileSlider">
                <div class="swiper-wrapper clients__mobile-wrapper">
                    @foreach($partners as $partner)
                        <div class="swiper-slide">
                            <img src="/storage/{{ $partner->image }}" alt="{{ $partner->title }}"/>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination clients__mobile-pagination"></div>
            </div>
        </div>
    </div>
@endsection
