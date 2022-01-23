@extends('layouts.admin')
@section('title') Добавить категорию @endsection
@section('header')
    <h1 class="h2">Добавить категорию</h1>
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
        <form method="POST" action="{{ route('admin.categories.store') }}">
            @csrf
            @if(!empty($status) && $status == 'ok') <x-alert type="warning" message="Категория добавлена."/> @endif
            <div class="form-group">
                <lable for="categoryName">Наименование категории</lable>
                <input type="text" class="form-control" id="categoryName" name="categoryName" required
                       value="{{ old('categoryName') }}">
            </div>
                <lable for="categoryDescription">Описание категории</lable>
                <textarea class="form-control" id="categoryDescription" name="categoryDescription" value="{{ old('categoryDescription') }}"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" value="sent" class="btn btn-success" style="float: right; margin: 10px 0">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
