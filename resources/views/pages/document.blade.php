@extends('app')

@section('title', 'Главная')

@section('content')
    <div style="text-align: center;">
    <h1>Документы</h1>
        <div class="container-document">
            @forelse($documents as $index => $document)
            <div class="document @if($index === 0) active @endif">
                    <div class="">
                        <img width="50px" src="/storage/doc.png" alt="{{$document->name}}">
                    </div>
                    <div class="">
                        <p>{{$document->name}}</p>
                        <a href="{{$document->document}}" download>Скачать документ</a>
                    </div>
            </div>
            @empty
                <h2>Документов нет</h2>
            @endforelse
        </div>

    </div>

@endsection
