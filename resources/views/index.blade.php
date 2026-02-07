@extends('layout')

@section('title', 'Задачи')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('tasks.create') }}">Создать задачу</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Описание задачи</th>
            <th scope="col">Статус</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->status }}</td>
            <td><a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-warning">Редактировать</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
