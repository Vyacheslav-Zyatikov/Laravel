@extends('layouts.main')
@section('title') Форма обратной связи @endsection
@section('header')
    <h1 class="h2">Форма обратной связи</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        </div>
    </div>
@endsection
@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="warning" :message="$error"></x-alert>
        @endforeach
    @endif
    <div>
        <form method="POST" action="{{ route('user.feedback.store') }}">
            @csrf
            @if(!empty($status) && $status == 'ok') <x-alert type="warning" message="Обратная связь отправлена."/> @endif

            <div class="form-group">
                <lable for="name">Имя пользователя</lable>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <lable for="feedbackText">Текст отзыва</lable>
                <textarea class="form-control" id="feedbackText" name="feedbackText" lang="ru"
                          value="{{ old('feedbackText') }}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" value="sent" class="btn btn-success" style="float: right; margin: 10px 0">Отправить</button>
            </div>
        </form>
    </div>
@endsection
