@extends('admin.index')

@section('title', 'Новости')

@section('content')
    <a href="{{route('admin.posts.createPage')}}" class="btn btn-success">Создать новость</a>

    <div class="d-flex flex-wrap">
        @forelse($posts as $post)
            <div class="card me-2" style="width: 18rem;">
                <img src="{{$post->image}}" class="card-img-top" alt="{{$post->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->text}} шт.</p>
                    <a href="{{route('admin.posts.updatePage', $post)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.posts.delete', $post)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Новостей нет
            </div>
        @endforelse
        @auth
            <a href="{{route('logout')}}">Выход</a>
            @endauth
    </div>
@endsection
