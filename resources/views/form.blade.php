@extends('layout')

@section('title', isset($task) ? 'Изменить задачу '.$task->title : 'Создать задачу')

@section('content')
    <a href="{{route('tasks.index') }}" type="button" class="btn btn-secondary mt-2">Вернуться к задачам</a>
    <form method="POST"
          @if(isset($task))
              action="{{ route('tasks.update', $task) }}"
          @else
              action="{{ route('tasks.store') }}"
        @endif
          class="mt-4">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4 ">
            <label for="exampleFormControlInput1" class="form-label fs-5">Заголовок:</label>
            <input
                value="{{ isset($task) ? $task->title : null }}"
                type="text" class="form-control" id="exampleFormControlInput1" name="title"
                   placeholder="Заполните поле">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label fs-5">Описание задачи:</label>
            <textarea
                name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ isset($task) ? $task->description : null }}</textarea>
        </div>
    <div class="row mt-4">
        <div class="col">
            <button type="submit" class="btn btn-success">Создать</button>
        </div>
    </div>
    </form>
@endsection
