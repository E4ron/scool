@extends('admin.index')

@section('title', 'Добавить')

@section('content')
<div class="m-2">
<h2 class="mt-2">Добавить документы</h2>

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show position-absolute top-10 start-50 translate-middle" role="alert">
@foreach ($errors->all() as $error)
  <strong>{{ $error }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  @endforeach
</div>
@endif
<form class="document-form" method="post" action="{{route('admin.documents.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название</label>
        <input required type="text" name="name" class="form-control">
        <span class="text-danger"></span>
    </div>
    <div class="mb-3">
            <label class="form-label">Категория товара</label>
            <select required name="categorydocuments_id" class="form-select">
            @foreach($categorydocuments as $categorydocument)
                <option value="{{$categorydocument->id}}">{{$categorydocument->name}}</option>
            @endforeach
            </select>
        </div>
    <div class="mb-3">
        <label class="form-label">Файл</label>
        <input accept = ".doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/*" type="file" name="document" class="form-control" required>
        <span class="text-danger"></span>
    </div>

    <button type="submit" class="btn btn-primary">Добавить</button>
</form>
</div>
@endsection

