@extends('app')

@section('title', 'Регистрация')

@section('content')
    <h2 class="mt-4">Регистрация</h2>

    <form class="register-form">

        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Логин</label>
            <input placeholder="Логин" required type="text" name="login" class="form-control">
            <span class="text-danger"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Пароль</label>
            <input placeholder="Пароль" required type="password" name="password" class="form-control">
            <span class="text-danger"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Повторение пароля</label>
            <input placeholder="Повторение пароля" required type="password" name="password_repeat" class="form-control">
            <span class="text-danger"></span>
        </div>
        <button type="submit" class="btn btn-primary">Создать аккаунт</button>
    </form>
@endsection

@push('scripts')
    <script>
        document.querySelector('.register-form').onsubmit = function (e) {
            e.preventDefault()

            $('form input').removeClass('is-invalid').parent().find('span').text('')

            $.post('/register', $('.register-form').serializeArray(),data => {
                location.href = '/'
            }).fail(err => {
                const {errors} = err.responseJSON
                for (const key in errors) {
                    $(`input[name="${key}"]`).addClass('is-invalid').parent().find('span').text(errors[key][0])
                }
            })

        }
    </script>
@endpush
