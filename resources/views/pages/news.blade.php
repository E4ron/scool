@extends('app')

@section('title', 'Новости')

@section('content')
    <div class="m-center">
        <h1 class="text-center">Новости</h1>
        <div class="container-card">
            @forelse($posts as $index => $post)
            <div class="card-wrap-new">
                <div class="card-image-new">
                <a href="{{route('newsShow', $post)}}"><img src="{{asset($post->image)}}"alt="{{$post->title}}"></a>
                </div>
                <div class="card-text-new">
                    <p>{{$post->date}}</p>
                    <h4>{{$post->title}}</h4>
                    <p>{{$post->text}}</p>
                </div>
            </div>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
        </div>
    </div>
@endsection

