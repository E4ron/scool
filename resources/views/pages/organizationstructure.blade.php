@extends('app')

@section('title', 'Структура и органы управления образовательной организацией')

@section('content')

<div class="container text-center">
    <h1>Структура и органы управления образовательной организацией</h1>
    <div class="organizationstructure-container-420">
    <h2>Cтруктурные подразделения</h2>
    @forelse($organizationstructures as $index => $organizationstructure)
    <div class="organizationstructure-container">
        <div class="organizationstructure-container-image">
            <img class="organizationstructure-image" src="{{$organizationstructure->image}}" alt="{{$organizationstructure->title}}">
        </div>
        <div class="organizationstructure-container-text">
            <div class="organizationstructure-title">
                <h2>{{$organizationstructure->title}}</h2>
            </div>
            <div class="organizationstructure-text-container">
                <div class="organizationstructure-text-org">
                    <div>Руководитель:{{$organizationstructure->branch_manager}}</div>
                    <div>Адрес:{{$organizationstructure->address}}</div>
                </div>
                <div class="organizationstructure-text-info">
                    <div>Электронная почта:{{$organizationstructure->email}}</div>
                    <div>Телефон:{{$organizationstructure->phone}}</div>
                    <div>Сайт:{{$organizationstructure->website}}</div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <h2>Информации нет</h2>
@endforelse
    </div>
</div>
@endsection
