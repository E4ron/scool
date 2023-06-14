@extends('admin.index')

@section('title', 'Новости')


@section('content')
    <div class="admin-content">
        <a href="{{route('admin.posts.createPage')}}" class="btn btn-success">Создать</a>
        <div class="card-container">
            @forelse($posts as $post)
            <div class="card-news">
                <img src="{{asset($post->image)}}" class="" alt="{{$post->title}}">
                <div class="card-text">
                    <p class="">{{$post->title}}</p>
                    <p class="">{{$post->text}}</p>
                    <p class="">{{$post->date}}</p>
                    <a href="{{route('admin.posts.updatePage', $post)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.posts.delete', $post)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Новостей нет
            </div>
        @endforelse
        </div>
    </div>
@endsection
