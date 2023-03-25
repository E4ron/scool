<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Школа - @yield('title')</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>
    <div class="wrapper">
        <div class="content">
        <header class="header">
            <div class="contaner-header">
                <div class="header-in">
                <a href="/" class="logo">
                <div class="header-title">МБОУ «Актабанская СОШ»</div>
                <div class="header-title-out">с.Актабан, Петуховский муниципальный округ, Курганская область.</div>
            </a>
        </div>
        <div class="header-nav">
            <a href="/">Главная</a>
            <a href="{{route('news')}}">Новости</a>
            <div class="dropdown">
                <a class="dropbtn">Сведения об оо</a>
                    <div class="dropdown-content">
                            <a href="{{route('intelligences')}}">Основные сведения</a>
                            <a href="{{route('teacher')}}">Руководство. Педагогический (научно-педагогический) состав</a>
                            <a href="{{route('document')}}">Документы</a>
                    </div>
            </div>
            <a href="{{route('contact')}}">Контакты</a>
        </div>
    <div>

    </div>
    <div class="visually-impaired"><img id="specialButton" src="storage/loop.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></div>
    </div>
</header>


<div class="content-container">
    @yield('content')

    <div class="alert alert-primary d-none" role="alert">
    <div class="d-flex">
        <div class="alert-body mr-2"></div>
        <button type="button" class="btn-close closeModal" aria-label="Close"></button>
    </div>
    </div>
    
</div>
        </div>
        <div class="footer">
            <footer>
                <div class="footer-logo">
                    <a href="/" class="logo">
                    <div class="header-title">МБОУ «Актабанская СОШ»</div>
                    <div class="header-title-out">с.Актабан, Петуховский муниципальный округ, Курганская область.</div>
                </a>
                </div>
                <div>
            @forelse($contacts as $index => $contact)
                    <div>
                        <p>Телефон</p>
                    </div>
                    <div>
                        <p>{{$contact->phone}}</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>Факс</p>
                    </div>
                    <div>
                        <p>{{$contact->fax}}</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>Почта</p>
                    </div>
                    <div>
                        <p>{{$contact->email}}</p>
                    </div>
                </div>
                @empty
                <h2>контактов нет</h2>
            @endforelse
            </footer>
        </div>
    </div>


<script src="https://lidrekon.ru/slep/js/jquery.js"></script>
<script src="https://lidrekon.ru/slep/js/uhpv-full.min.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>
</html>
