@extends('app')

@section('title', 'Основные сведения')

@section('content')

<div class="container text-center">
    <h1>Основные сведения</h1>
    <div class="intelligences-container">
        @if($categories)
        @foreach($categories as $category)
        <div class="intelligences-card">
            <h2>{{$category->title}}</h5>
                <div class="intelligences">
                    @foreach($intelligences as $intelligence)
                    @if($category->id === $intelligence->categoryintelligences_id)
                    <div class="intelligences-text">
                        <div class="intelligences-text-margin">
                            <h6 class="intelligences-text-name">{{$intelligence->name}}</h6>
                        </div>
                        <div class="intelligences-text-margin">
                            <p class="intelligences-text-text">{{$intelligence->text}}</p>
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
