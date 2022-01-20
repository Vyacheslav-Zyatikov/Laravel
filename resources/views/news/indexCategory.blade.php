@extends('layouts.main')
@section('title') Категории новостей @endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-light">Категории новостей</h1>
        </div>
    </div>
@endsection
@section('content')
    @foreach ($newsCategory as $newsItem)
        <div>
            <strong><a href="/news/{{ $newsItem['id_category'] }}">{{ $newsItem['title'] }}</a></strong>
        </div>
    @endforeach
@endsection



