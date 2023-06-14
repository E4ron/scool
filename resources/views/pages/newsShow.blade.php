@extends('app')

@section('content')
<div class="container text-center">
<h2 class="mb-2">{{$post->title}}</h2>
    <div class="flex" style="font-size: 20px;">
        <img  height="600" width="600" src="{{asset($post->image)}}" alt="{{$post->title}}">
        <div class="m-2">
            <p>{{$post->text}}</p>
            <p>{{$post->date}}</p>
        </div>
    </div>
</div>
@endsection


