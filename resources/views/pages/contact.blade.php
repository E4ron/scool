@extends('app')

@section('title', 'Контакты')

@section('content')
    <div style="text-align: center;">
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
                    <div>
                        <h2>Как добратся</h2>
                        <p>Добраться до школы можно от остановки находящейся по адресу: с.Актабан, ул.Советская, д.24.</p>
                        <p>До остановки в с.Актабан, два раза в неделю,  ходит маршрутное транспортное средство из г.Петухово -от привокзальной остановки.</p>
                    </div>
                   </div>
            @empty
                <h1>Информация отсутствует</h1>
            @endforelse
            <h1>Обратная связь</h1>
            <form class="feedback" method="post" action="{{route('send')}}" enctype="multipart/form-data">
                @csrf
                <div class="feedback-container">
                <div class="">
                    <label>ФИО</label>
                    <input required type="text" name="username" placeholder="Фамилия,Имя,Отчество*">
                </div>
                <div class="">
                    <label>Почта</label>
                    <input required type="email" name="useremail" placeholder="Почта">
                </div>
                <div class="">
                    <label>Сообщение</label>
                    <textarea require name="usertext" placeholder="Сообщение" ></textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
    </div>

@endsection
