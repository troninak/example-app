<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: rgb(255, 88, 88);
            background: linear-gradient(90deg, rgba(255, 88, 88, 1) 0%, rgba(255, 54, 142, 1) 100%);
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-name {
            margin-bottom: 20px;
        }

        .main-form {
            min-width: 400;
            padding: 20px 50px;
            background: rgb(255, 255, 255);
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.486)
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
        }

        .form-group input {
            width: 300px;
            height: 30px;
            font-size: 16px;
            padding: 0px 0px 0px 10px;
            margin-bottom: 15px;
        }

        .form-group button {
            height: 50px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            background: rgb(255, 88, 88);
            background: linear-gradient(90deg, rgba(255, 88, 88, 1) 0%, rgba(255, 54, 142, 1) 100%);
            color: rgb(255, 255, 255);
        }

        .form-group button:hover {
            background: rgb(145, 49, 49);
            background: linear-gradient(90deg, rgb(190, 65, 65) 0%, rgb(173, 37, 96) 100%);
        }

        .form-error {
            margin-bottom: 15px;
            text-align: center;
            background: rgb(255, 113, 113);
        }
    </style>
    <title>Регистрация</title>
</head>

<body>
    <div class="container">
        <form class="main-form" action="{{ route('register_process') }}" method="get">
            @csrf
            @method('PUT')
            <div class="form-name">
                <h1>Регистрация</h1>
            </div>
            <div class="form-group">
                <label for="">Имя</label>
                <input type="text" name="first_name">
                @error('first_name')
                <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Фамилия</label>
                <input type="text" name="surname">
                @error('surname')
                <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Телефон</label>
                <input type="tel" name="phone">
                @error('phone')
                <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Пароль</label>
                <input type="password" name="password">
                @error('password')
                <div class="form-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit">Создать аккаунт</button>
            </div>
        </form>
    </div>
</body>

</html>