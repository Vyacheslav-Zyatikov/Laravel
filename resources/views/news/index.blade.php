@extends('layouts.main')
@section('title') Список новостей @endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-light">Все новости</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($newsList as $news)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $news->image }}" alt="image">
                    <div class="card-body">
                        <div class="card-header">
                            <strong><a
                                    href="/news/{{ $news->id }}">{{ $news->title }}</a></strong>
                        </div>
                        <p class="card-text">{{ $news->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                            </div>
                            <small class="text-muted">{{ now('Europe/Moscow') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h1>Упс, что-то пошло не так!</h1>
        @endforelse
    </div>
@endsection
