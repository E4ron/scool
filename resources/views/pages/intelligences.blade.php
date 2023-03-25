@extends('app')

@section('title', 'Основные сведения')

@section('content')

<div class="container text-center">
    <h1>Основные сведения</h1>
    <div class="intelligences-container">
        @if($categories)
        @foreach($categories as $category)
        <h5>{{$category->title}}</h5>
        <div class="intelligences-card">
            @foreach($intelligences as $intelligence)
            @if($category->id === $intelligence->categoryintelligences_id)
            <div class="intelligences-text">
                <p>{{$intelligence->name}}</p><p>{{$intelligence->text}}</p>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection
