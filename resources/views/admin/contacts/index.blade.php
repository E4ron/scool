@extends('admin.index')

@section('title', 'Контакты')

@section('content')
   <div class="m-2">
    <div class="card-contact-container">
        @forelse($contacts as $contact)
            <div class="card-contact">
                <div class="card-contact-text">
                    <h5 class="">Телефон: {{$contact->phone}}</h5>
                    <p class="">Почта: {{$contact->email}}</p>
                    <p class="">Адрес: {{$contact->address}}</p>
                    <p class="">Время работы школы: {{$contact->timejob}}</p>
                    <p class="">Длительность рабочей недели: {{$contact->duration}}</p>
                    <p class="">Приёмное время: {{$contact->reception}}</p>
                    <a href="{{route('admin.contacts.updatePage', $contact)}}" class="btn btn-primary">Редактировать</a>
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
