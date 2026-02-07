@extends('layout')

@section('title', 'Задача '.$task->title)

@section('content')
    <a href="{{route('tasks.index') }}" type="button" class="btn btn-secondary mb-3 mt-2">Вернуться к задачам</a>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$task->id}}</li>
            <li class="list-group-item">Заголовок: {{$task->title}}</li>
            <li class="list-group-item">Описание задачи: {{$task->description}}</li>
            <li class="list-group-item">Статус: {{$task->status}}</li>
            <li class="list-group-item">Дата создания: {{$task->created_at->format('d.m.y h:m:s')}}</li>
            <li class="list-group-item">Дата изменения: {{$task->updated_at->format('d.m.y h:m:s')}}</li>
        </ul>
    </div>

    <form method="POST" class="mt-3" action="{{ route('tasks.destroy', $task) }}">
        <a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-warning">Редактировать</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection
