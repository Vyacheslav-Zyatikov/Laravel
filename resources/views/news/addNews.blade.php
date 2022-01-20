@extends('layouts.main')
@section('title') Добавте свою новость @endsection
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-10 col-md-10 mx-auto">
            <h1 class="font-weight-light">Добавте свою новость</h1>
        </div>
    </div>
@endsection
@section('content')
    <form action="POST">
        <lable for="newsTitle">Заголовок новости</lable>
        <br>
        <input type="text" id="newsTitle"><br>
        <lable for="newsDescription">Описание новости</lable>
        <br>
        <textarea id="newsDescription"></textarea><br>
        <lable for="newsBriefDesc">Краткое описание</lable>
        <br>
        <input type="text" id="newsBriefDesc"><br>
        <button type="submit">Отправить</button>
    </form>
@endsection
