@extends('layouts/master')

@section('seo_description', $data->seo_description)
@section('seo_tags', $data->seo_tags)
@section('pageTitle', 'Контакты')

@section('content')
    <div class="page-heading container">
        <h1>Контакты</h1>
    </div>
    {!! $data->content !!}
@endsection
