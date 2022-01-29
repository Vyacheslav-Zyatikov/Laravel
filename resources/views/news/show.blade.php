@extends('layouts.main')
@section('title') {{ $news->title }} @endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h1 class="font-weight-light">{{ $news->title }}</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="row row-cols row-cols-sm-1 row-cols-md-2 g-1 justify-content-center">
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
                    <p class="card-text">{{ $news->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ now('Europe/Moscow') }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



