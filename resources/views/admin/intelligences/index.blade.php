@extends('admin.index')

@section('title', 'Основные сведения')

@section('content')
{{-- <div>
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
</div> --}}



<div class="m-2">
    <a href="{{route('admin.intelligences.createPage')}}" class="btn btn-success">Добавить сведения</a>
    {{-- <h1>Основные сведения</h1> --}}
    <div class="intelligences-container">
        @if($categories)
        @foreach($categories as $category)
        <div class="intelligences-card">
            <h2>{{$category->title}}</h5>
                <div class="intelligences">
                    @foreach($intelligences as $intelligence)
                    @if($category->id === $intelligence->categoryintelligences_id)
                    <div class="intelligences-text">
                        <div class="intelligences-text-flex">
                        <div class="intelligences-text-margin">
                            <h6 class="intelligences-text-name">{{$intelligence->name}}</h6>
                        </div>
                        <div class="intelligences-text-margin">
                            <p class="intelligences-text-text">{{$intelligence->text}}</p>
                        </div>
                        </div>
                        <div class="itelligences-button">
                        <a href="{{route('admin.intelligences.updatePage', $intelligence)}}" class="btn btn-primary">Редактировать</a>
                        <a href="{{route('admin.intelligences.delete', $intelligence)}}" class="btn btn-danger">Удалить</a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection
