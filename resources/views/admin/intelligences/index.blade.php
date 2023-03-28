@extends('admin.index')

@section('title', 'Основные сведения')

@section('content')
<div>
    <a href="{{route('admin.intelligences.createPage')}}" class="btn btn-success">Создать сведения</a>
    <div class="card-container">
        @forelse($intelligences as $intelligence)
            <div class="card" >
                <div class="card-text">
                    <p>{{$intelligence->name}}</p>
                    <p>{{$intelligence->text}}</p>
                    <a href="{{route('admin.intelligences.updatePage', $intelligence)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.intelligences.delete', $intelligence)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Сведений нет
            </div>
        @endforelse

    </div>
</div>
@endsection
