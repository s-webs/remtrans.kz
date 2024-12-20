@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', 'О компании')

@section('content')
    <div class="page-heading container">
        <h1>О компании</h1>
    </div>

    {!! $data->content !!}

    <div class="about-map-heading container">
        <h2>Вагоноремонтные предприятия по Казахстану</h2>
    </div>

    <div class="about-map">
        <div class="about-map__map container">
            <div id="mapChart"></div>
        </div>
        <div class="about-map__points">
            <div class="point-wrapper" style="">
                <div class="kr-sidebar map-sidebar" style="display: block"></div>
                <div class="tor-sidebar map-sidebar" style="display: block"></div>
            </div>
        </div>
    </div>
    <script src="/assets/js/highcharts.js"></script>
    <script src="/assets/js/map.js"></script>
@endsection
