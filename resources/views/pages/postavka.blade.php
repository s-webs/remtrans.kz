@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', 'Поставка запчастей')

@section('content')

    <div class="page-heading container">
        <h1>Поставка запчастей</h1>
    </div>

    <div class="download-price container">
        <div class="download-price__wrapper">
            <div class="download-price__icon">
                <i class="fa-solid fa-file-arrow-down"></i>
            </div>
            <div class="download-price__btn">
                <a href="/storage/{{ $priceList->file }}" target="_blank"
                >Скачать перечень запчастей</a
                >
            </div>
        </div>
    </div>

    {!! $data->content !!}
@endsection
