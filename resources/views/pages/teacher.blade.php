@extends('app')

@section('title', 'Руководство. Педагогический (научно-педагогический) состав')

@section('content')
<div class="container">
    <h1>Руководство. Педагогический (научно-педагогический) состав</h1>
        <div class="teachers-container">
            <div class="teachers-grid">
            @foreach($teachers as $index => $teacher)
                <div class="teacher">
                    <img class="teachers-i" src="{{asset($teacher->image)}}" width="500" height="150" alt="{{$teacher->image}}">
                    <div class="teacher-text">
                    <div class="teacher-text-name">
                    <p>{{$teacher->surname}} {{$teacher->name}} {{$teacher->patronymic}}</p>
                    </div>
                    <div class="teacher-text-position">
                    <p>{{$teacher->position}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
</div>

@endsection
