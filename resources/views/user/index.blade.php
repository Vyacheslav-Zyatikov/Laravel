@extends('layouts.main')
@section('title') Форму заказа @endsection
@section('header')
    <h1 class="h2">Форму заказа на получение выгрузки данных.</h1>
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
        <form method="POST" action="{{ route('user.request.store') }}">
            @csrf
            @if(!empty($status) && $status == 'ok') <x-alert type="warning" message="Заявка отправлена."/> @endif

            <div class="form-group">
                <lable for="name">Имя заказчика</lable>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <lable for="nomber">Телефон</lable>
                <input type="telephone" class="form-control" id="telephone" name="telephone" required
                       value="{{ old('telephone') }}">
            </div>
            <div class="form-group">
                <lable for="email">Электронный адресс</lable>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"></in>
            </div>
            <div class="form-group">
                <lable for="description">Описание запроса</lable>
                <textarea class="form-control" id="description" name="description" lang="ru"
                          value="{{ old('description') }}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" value="sent" class="btn btn-success" style="float: right; margin: 10px 0">Отправить</button>
            </div>
        </form>
    </div>
@endsection
