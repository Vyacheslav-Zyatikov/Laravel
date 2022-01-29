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
    @foreach ($categories as $category)
        <div>
            <strong><a href="/category/{{ $category->id }}">{{ $category->title }}</a></strong>
        </div>
    @endforeach
@endsection



