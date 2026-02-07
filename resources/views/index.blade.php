@extends('layout')

@section('title', 'Задачи')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('tasks.create') }}">Создать задачу</a>

    <table class="table table-sm">
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
            <td><a href="{{route('tasks.show', $task) }}">{{ $task->title }}</a></td>
            <td><a href="{{route('tasks.show', $task) }}">{{ $task->description }}</a></td>
            <td>{{ $task->status }}</td>
            <td>
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    <a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-warning">Редактировать</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $tasks->links() }}
@endsection
