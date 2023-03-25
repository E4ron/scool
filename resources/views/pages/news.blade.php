@extends('app')

@section('title', 'Новости')

@section('content')
    <div class="text-center">
        <h1>Новости</h1>
        <div>
            @forelse($posts as $index => $post)
            <div class="card-wrap @if($index === 0) active @endif">
                <div class="card-image">
                        <img src="{{$post->image}}"alt="{{$post->title}}">
                </div>
                <div class="card-text">
                    <p>{{$post->created_at}}</p>
                    <h2>{{$post->title}}</h5>
                    <p>{{$post->text}}</p>
                </div>
            </div>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
        </div>
    </div>
@endsection

