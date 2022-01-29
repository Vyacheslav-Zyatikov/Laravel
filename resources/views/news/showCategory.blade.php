@extends('layouts.main')
@section('title') Новости в категории @endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-light">Новости в категории</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($category as $categoryItem)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                         xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail"
                         preserveaspectratio="xMidYMid slice" role="img" focusable="false"><title>
                            Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"></rect>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <div class="card-header">
                            <strong><a
                                    href="/news/{{ $categoryItem->id }}">{{ $categoryItem->title }}</a></strong>
                        </div>
                        <p class="card-text">{{ $categoryItem->description }}</p>
                        <p class="card-text">Категория: {{ $categoryItem->category_id }}</p>
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


