@extends('app')

@section('title', 'Главная')

@section('content')
<div style="text-align: center;">
<h1>Документы</h1>
<div class="document-content">
<div class="container-document-content">
<div class="container-document-aside">
<form action="{{route('search')}}" method="GET" class="form-search">
	<input id="title-search-input" type="text" name="s"class="form-control @error('s') is-invalid @enderror" required placeholder="Поиск">
	<button type="submit" class="search-btn btn btn-primary"><span class="icon-search">Поиск</span></button>
</form>
<h6>Документы по категориям</h6>
<div class="document-category">
<form action="" method="get">
<select name="categorydocuments_id" id="">
<option value="">Все</optino>
        @foreach($categorydocuments as $categorydocument)
                <option @if($categorydocument->id == $document->categorydocumentId) selected @endif value="{{$categorydocument->id}}">{{$categorydocument->name}}</optino>
        @endforeach
</select>
<button type="submit" class="search-btn btn btn-primary"><span class="icon-search">Поиск</span></button>
</form>
</div>
            <ul class="navul">
            <li class="active" ><a href="{{asset('document?')}}">Документы</a></li>
            @foreach($categorydocuments as $categorydocument)
                <li><a href="{{asset('document?categorydocuments_id=')}}{{$categorydocument->id}}">{{$categorydocument->name}}</a></li>
            @endforeach
            </ul>
        </div>
        <div class="container-document">
            @forelse($documents as $index => $document)
            <div class="document @if($index === 0) active @endif">
                    <div>
                        <img width="50px" src="{{asset('storage/img/doc.png')}}" alt="{{$document->name}}">
                    </div>
                    <div class="document-text">
                        <p>{{$document->name}}</p>
                        <a download href="{{$document->document}}">Скачать</a>
                    </div>
            </div>
            
            @empty
                <h2>По запросу ничего не найдено.</h2>
            @endforelse
        </div>
</div>
</div>
</div>
@endsection