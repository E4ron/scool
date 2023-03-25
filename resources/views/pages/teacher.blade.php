@extends('app')

@section('title', 'Руководство. Педагогический (научно-педагогический) состав')

@section('content')
    <div class="text-center">
    <h1>Руководство. Педагогический (научно-педагогический) состав</h1>
        <div class="teachers-container">
            <div class="teachers-grid">
            @forelse($teachers as $index => $teacher)
                <div class="teacher">
                    <img class="teachers-i" src="{{$teacher->image}}" alt="{{$teacher->image}}">
                    <p>{{$teacher->name}}{{$teacher->surname}}{{$teacher->patrynomic}}</p>
                    <p>{{$teacher->position}}</p>
                </div>
            @empty
            <h2>Информация отсутствует</h2>
            @endforelse
            </div>
        </div>
    </div>

@endsection
