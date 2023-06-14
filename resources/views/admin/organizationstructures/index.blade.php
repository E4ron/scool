@extends('admin.index')

@section('title', 'Структура и органы управления образовательной организацией нет')


@section('content')
    <div class="admin-content">
        <a href="{{route('admin.organizationstructures.createPage')}}" class="btn btn-success">Создать</a>
        <div class="card-container">
            @forelse($organizationstructures as $organizationstructure)
            <div class="card-organizationstructures">
                <img src="{{$organizationstructure->image}}" class="" alt="{{$organizationstructure->title}}">
                <div class="card-text">
                    <p class="">{{$organizationstructure->title}}</p>
                    <p class="">{{$organizationstructure->branch_manager}}</p>
                    <p class="">{{$organizationstructure->address}}</p>
                    <p class="">{{$organizationstructure->email}}</p>
                    <p class="">{{$organizationstructure->phone}}</p>
                    <p class="">{{$organizationstructure->website}}</p>
                    <a href="{{route('admin.organizationstructures.updatePage', $organizationstructure)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.organizationstructures.delete', $organizationstructure)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Структура и органы управления образовательной организацией нет
            </div>
        @endforelse
        </div>
    </div>
@endsection
