@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', 'Документы')

@section('content')
    <div class="page-heading container">
        <h1>Документы</h1>
    </div>

    <div class="documents container">
        @foreach($documents as $item)
            <div class="documents__item">
                <div class="documents__item--icon">
                    <i class="fa-solid fa-file"></i>
                    <div class="documents__item--size">{{ $item->getFileSize()}} кб</div>
                </div>
                <div class="documents__item--title">
                    {{ $item->title }}
                </div>
                <div class="documents__item--download">
                    <a href="/storage/{{ $item->file }}">Скачать</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
