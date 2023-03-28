@extends('admin.index')

@section('title', 'Преподователи')

@section('content')
<div>
    <a href="{{route('admin.teachers.createPage')}}" class="btn btn-success">Добавить преподователя</a>
    <div class="card-container">
        @forelse($teachers as $teacher)
            <div class="card">
                <img src="{{$teacher->image}}" class="card-img-top" alt="{{$teacher->name}}">
                <div class="card-text">
                    <p>{{$teacher->name}}{{$teacher->surname}}{{$teacher->patronymic}}</p>
                    <p>{{$teacher->position}}</p>
                    <a href="{{route('admin.teachers.updatePage', $teacher)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.teachers.delete', $teacher)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Преводователей нет
            </div>
        @endforelse
    </div>
</div>
@endsection
