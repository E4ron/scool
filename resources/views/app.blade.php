<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="display: block; opacity: 1;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Школа - @yield('title')</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/special.min.css')}}">

</head>
<body>
    <div class="wrapper">
        <div class="content">
        <header class="header">
        <div class="menu-btn" id="myBtn"> 
		<span></span>
		<span></span>
		<span></span>
	    </div>
        <!-- <button class="open" id="myBtn"></button> -->
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
                            <a href="{{route('organizationstructure')}}">Структура и органы управления образовательной организацией</a>
                            <a href="{{route('internationalcooperation')}}">Международное сотрудничество</a>
                            <a href="{{route('education')}}">Образование</a>
                            <a href="{{route('availableenvironment')}}">Доступная среда</a>
                            <a href="{{route('activity')}}">Финансово-хозяйственная деятельность</a>
                            <a href="{{route('paideducationalservices')}}">Платные образовательные услуги</a>
                            <a href="{{route('providingeducational')}}">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                            {{-- <a href="{{route('vacant')}}">Вакантные места для приема (перевода) обучающихся</a> --}}
                    </div>
            </div>
            <a href="{{route('contact')}}">Контакты</a>
            <div class="visually-impaired">
                <button id="specialButton" class="specialButton" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ"><svg width="50" height="50" viewBox="0 0 49 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="3.93689" y="1" width="16" height="16" rx="6.4" stroke="#1E1E1E" stroke-width="2" stroke-miterlimit="0" stroke-linecap="round"/>
<rect x="28.9369" y="1" width="16" height="16" rx="6.4" stroke="#1E1E1E" stroke-width="2" stroke-miterlimit="0" stroke-linecap="round"/>
<path d="M19.9369 9H20.5619C21.7355 9 22.6869 8.04861 22.6869 6.875V6.5C22.6869 5.5335 23.4704 4.75 24.4369 4.75V4.75C25.4034 4.75 26.1869 5.5335 26.1869 6.5V6.875C26.1869 8.04861 27.1383 9 28.3119 9H28.9369" stroke="#1E1E1E" stroke-width="2" stroke-miterlimit="0" stroke-linecap="round" stroke-linejoin="bevel"/>
<path d="M3.93689 9H0" stroke="#1E1E1E" stroke-width="2" stroke-miterlimit="0" stroke-linecap="round" stroke-linejoin="bevel"/>
<path d="M48.9369 9H45" stroke="#1E1E1E" stroke-width="2" stroke-miterlimit="0" stroke-linecap="round" stroke-linejoin="bevel"/>
</svg></button>
            </div>
        </div>
        
    <div>


    </div>
    </div>
</header>
<div class="content-container">
    @yield('content')

<div class="m-model">
    <!-- Модальный -->
    <div id="myModal" class="modal">
    <!-- Модальное содержание -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="m-model-flex">
                <a href="/">Главная</a>
                <a href="{{route('news')}}">Новости</a>
                <a href="{{route('contact')}}">Контакты</a>
                </div>
                        <div class="m-dropdown">
                            <h2>Сведения об оо</h2>
                                        <a href="{{route('intelligences')}}">Основные сведения</a>
                                        <a href="{{route('teacher')}}">Руководство. Педагогический (научно-педагогический) состав</a>
                                        <a href="{{route('document')}}">Документы</a>
                                        <a href="{{route('organizationstructure')}}">Структура и органы управления образовательной организацией</a>
                                        <a href="{{route('internationalcooperation')}}">Международное сотрудничество</a>
                                        <a href="{{route('education')}}">Образование</a>
                                        <a href="{{route('availableenvironment')}}">Доступная среда</a>
                                        <a href="{{route('activity')}}">Финансово-хозяйственная деятельность</a>
                                        <a href="{{route('paideducationalservices')}}">Платные образовательные услуги</a>
                                        <a href="{{route('providingeducational')}}">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                        </div>
                </div>
        </div>

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
<script src="{{asset('js/loop.js')}}"></script>
<script src="{{asset('js/loop.fol.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
// Получить модальный
var modal = document.getElementById("myModal");

// Получить кнопку, которая открывает модальный
var btn = document.getElementById("myBtn");

// Получить элемент <span>, который закрывает модальный
var span = document.getElementsByClassName("close")[0];

// Когда пользователь нажимает на кнопку, откройте модальный
btn.onclick = function() {
  modal.style.display = "block";
}

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function() {
  modal.style.display = "none";
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
@stack('scripts')

</body>
</html>
