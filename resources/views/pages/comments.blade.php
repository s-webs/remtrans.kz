`@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', 'Отзывы')

@section('content')

    <div id="modal_review" class="modal add-review">
        <form id="review" class="add-review__form" action="/add-review" method="post">
            @csrf
            <input type="text" name="fullname" placeholder="ФИО"/>
            <input type="text" name="company" placeholder="Компания"/>
            <input type="text" name="position" placeholder="Должность"/>
            <input type="email" name="email" placeholder="Email"/>
            <textarea
                placeholder="Ваш отзыв"
                name="comment"
                cols="30"
                rows="10"
            ></textarea>
            <button type="submit">Отправить отзыв</button>
        </form>
    </div>

    <div class="page-heading container">
        <h1>Отзывы</h1>
    </div>

    <div class="page-reviews container">
        <div class="page-reviews__add">
            <a href="#modal_review" rel="modal:open" id="add_review"
            >Добавить новый отзыв</a
            >
        </div>

        <div class="page-reviews__items">

            @if($comments->isEmpty())
                <div style="text-align: center; padding-top: 30px; color: #4ba6c8">
                    <h1>Отзывы появятся в скором времени</h1>
                </div>
            @endif
            @foreach($comments as $item)
                <div class="page-reviews__item">
                    <div class="page-reviews__details">
                        <div class="page-reviews__photo ibg">
                            @if($item->image == null)
                                <img src="assets/images/default-avatar.png" alt="avatar"/>
                            @else
                                <img src="/storage/{{ $item->image }}" alt="{{ $item->fullname }}"/>
                            @endif
                        </div>
                        <div class="page-reviews__name">{{ $item->fullname }}</div>
                        <div class="page-reviews__position">
                            {{ $item->position }}
                        </div>
                    </div>
                    <div class="page-reviews__text">
                        {{ $item->comment }}
                    </div>
                </div>
            @endforeach
        </div>

        @endsection
        `
