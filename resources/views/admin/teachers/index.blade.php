@extends('admin.index')

@section('title', 'Преподователи')

@section('content')
    <a href="{{route('admin.teachers.createPage')}}" class="btn btn-success">Добавить преподователя</a>

    <div class="d-flex flex-wrap">
        @forelse($teachers as $teacher)
            <div class="card me-2" style="width: 18rem;">
                <img src="{{$teacher->image}}" class="card-img-top" alt="{{$teacher->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$teacher->name}}{{$teacher->surname}}{{$teacher->patronymic}}</h5>
                    <p class="card-text">{{$teacher->position}}</p>
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
@endsection
