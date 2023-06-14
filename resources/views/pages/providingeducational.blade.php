@extends('app')

@section('title', 'Материально-техническое обеспечение и оснащенность образовательного процесса')

@section('content')
<div>
    <div class="providingeducational-container">
        <h1 class="text-center">Материально-техническое обеспечение и оснащенность образовательного процесса</h1>
        <div class="providingeducational">
            <div class="providingeducational-img"><img src="{{asset('storage/img/tochka.jpg')}}" alt="tochka"></div>
            <div class="providingeducational-text">
                <div><b>160</b><p>Учебных мест</p></div>
                <div><b>15</b><p>Компьютеров</p></div>
                <div><b>15</b><p>Кабинетов</p></div>
                <div><b>5</b><p>Современной техники</p></div>
            </div>
        </div>
        <div>
            <h2>Учебные кабинеты</h2>
            <div><p>Для реализации образовательного процесса в школе оборудовано 15 кабинетов, в том числе специализированные классы. Кабинеты оснащены всем необходимым оборудованием и средствами для проведения занятий</p></div>
            <div class="provide-cabinet-container">
                <div class="provide-cabinet-grid row row-cols-3">
                    <div class="privide-cabinet">
                    Кабинет математики
                    </div>
                    <div class="privide-cabinet">
                    Кабинет русского языка и литературы
                    </div>
                    <div class="privide-cabinet">
                    4 кабинета начальной школы
                    </div>
                    <div class="privide-cabinet">
                    Кабинет истории и обществознания
                    </div>
                    <div class="privide-cabinet">
                    Кабинет ОБЖ
                    </div>
                    <div class="privide-cabinet">
                    Кабинет физики
                    </div>
                    <div class="privide-cabinet">
                    Кабинет химии
                    </div>
                    <div class="privide-cabinet">
                    Компьютерный класс
                    </div>
                    <div class="privide-cabinet">
                    Кабинет биологии
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
