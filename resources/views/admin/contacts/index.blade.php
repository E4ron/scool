@extends('admin.index')

@section('title', 'Контакты')

@section('content')
   <div>
    <a href="{{route('admin.contacts.createPage')}}" class="btn btn-primary">Добавить контакты</a>
    <div class="card-container">
        @forelse($contacts as $contact)
            <div class="card">
                <div class="card-text">
                    <h5 class="">{{$contact->phone}}</h5>
                    <p class="">{{$contact->email}}</p>
                    <p class="">{{$contact->fax}}</p>
                    <p class="">{{$contact->address}}</p>
                    <p class="">{{$contact->timejob}}</p>
                    <p class="">{{$contact->duration}}</p>
                    <p class="">{{$contact->reception}}</p>
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
   </div>
@endsection
