@extends('admin.index')

@section('title', 'Контакты')

@section('content')
    <a href="{{route('admin.contacts.createPage')}}" class="btn btn-success">Добавить контакты</a>

    <div class="d-flex flex-wrap">
        @forelse($contacts as $contact)
            <div class="card me-2" style="width: 18rem;">
                <img src="{{$contact->image}}" class="card-img-top" alt="{{$contact->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$contact->phone}}</h5>
                    <p class="card-text">{{$contact->email}}</p>
                    <p class="card-text">{{$contact->fax}}</p>
                    <p class="card-text">{{$contact->address}}</p>
                    <p class="card-text">{{$contact->timejob}}</p>
                    <p class="card-text">{{$contact->duration}}</p>
                    <p class="card-text">{{$contact->reception}}</p>
                    <a href="{{route('admin.contacts.updatePage', $contact)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.contacts.delete', $contact)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary" role="alert">
                Контактов нет
            </div>
        @endforelse
    </div>
@endsection
