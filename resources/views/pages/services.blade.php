@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', $data->title)

@section('content')

    <div class="page-heading container">
        <h1>{{ $data->title }}</h1>
    </div>

    <div class="page-services container">
        {!! $data->content !!}
        <div class="services-btn">
            <a href="#modal_feedback" rel="modal:open"> Оставить заявку </a>
        </div>
    </div>
@endsection
