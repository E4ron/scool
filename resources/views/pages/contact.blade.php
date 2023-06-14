@extends('app')

@section('title', 'Контакты')

@section('content')
    <div style="text-align: center;" class="container420px">
<div class="contact">
<h1>Контакты</h1>
             @forelse($contacts as $index => $contact)
                   <div class="contact-contaner">
                    <div class="contact-info">
                        <p class="">Телефон: {{$contact->phone}}</p>
                        <p class="">Почта: {{$contact->email}}</p>
                        <p class="">Адрес: {{$contact->address}}</p>
                    </div>
                    <div class="contact-time">
                        <p class="">Время работы: {{$contact->timejob}}</p>
                        <p class="">Длительность учебной недели: {{$contact->duration}}</p>
                        <p class="">Приёмное время: {{$contact->reception}}</p>
                    </div>
                   </div>
            @empty
                <h1>Информация отсутствует</h1>
            @endforelse
</div>
           <div class="feedback-container-center">
           <h1>Обратная связь</h1>
<div class="feedback-form">
    <div class="feedback-svg">
    <svg width="110" height="110" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M52.5 13.125L30 33.75L7.5 13.125" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.5 13.125H52.5V45C52.5 45.4973 52.3025 45.9742 51.9508 46.3258C51.5992 46.6775 51.1223 46.875 50.625 46.875H9.375C8.87772 46.875 8.40081 46.6775 8.04918 46.3258C7.69754 45.9742 7.5 45.4973 7.5 45V13.125Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M25.8984 30L8.08594 46.3359" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M51.9141 46.3359L34.1016 30" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
    </div>
<form class="feedback" method="post" action="{{route('send')}}" enctype="multipart/form-data">
                @csrf
                <div class="feedback-container">
                    <div>
                    <div class="input-div">
                    <label class="form-label">ФИО</label>
                    <input class="form-control" required type="text" name="username" placeholder="Фамилия,Имя,Отчество*">
                </div>
                <div class="">
                    <label class="form-label">Почта</label>
                    <input class="form-control" required type="email" name="useremail" placeholder="Почта">
                </div>
                <div class="">
                    <label class="form-label">Телефон</label>
                    <input class="form-control" required type="phone" name="userphone" placeholder="Телефон">
                </div>
                    </div>
                <div class="textarea-container">
                    <label class="form-label">Сообщение</label>
                    <textarea class="form-control" require name="usertext" placeholder="Сообщение" ></textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
</div>
           </div>
    </div>

@endsection
