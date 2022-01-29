@extends('layouts.admin')
@section('title') Список новостей @endsection
@section('header')
    <h1 class="h2">Список новостей</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить
                новость</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#ID</th>
                <th>Заголовок</th>
                <th>Статус</th>
                <th>Автор</th>
                <th>Описание</th>
                <th>Опции</th>
            </tr>
            </thead>
            <tbody>
            @forelse($news as $newsItem)
                <tr>
                    <td>{{ $newsItem->id }}</td>
                    <td>{{ $newsItem->title }}</td>
                    <td>{{ $newsItem->status }}</td>
                    <td>{{ $newsItem->author }}</td>
                    <td>{{ $newsItem->description }}</td>
                    <td><a href="{{ route('admin.news.edit', ['news' => $newsItem->id]) }}">ред.</a>&nbsp
                        <a href="javascript:;" style="color:red">уд.</a></td>
                </tr>
            @empty
                <tr colspan="6"> <td> Записей нет </td> </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
