@extends('app')

@section('title', 'Главная')

@section('content')
    <div style="text-align: center;">
    <h1>МБОУ "Актабанская СОШ"</h1>


<!-- <h3 class="mb-2 mt-2">Преподователи</h3>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 70%; margin: 0 auto;">
    <div class="carousel-indicators">
        @foreach($teachers as $index => $teacher)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$index}}" @if($index === 0) class="active" @endif aria-current="true" aria-label="Slide 1"></button>
        @endforeach
    </div>
    <div class="carousel-inner" >
        @forelse($teachers as $index => $teacher)
            <div class="carousel-item @if($index === 0) active @endif">
                <img height="600" width="200" style="object-fit: cover;" src="{{$teacher->image}}" class="d-block w-100" alt="{{$teacher->name}}">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="display: block!important;
                    font-size: 50px;" class="text-black">ФИО:{{$teacher->name}}{{$teacher->surname}}{{$teacher->patronymic}}</h5>
                    <p>Должность:{{$teacher->position}}</p>
                </div>
            </div>
        @empty
            Преводователей нет
        @endforelse
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->
    </div>

@endsection
