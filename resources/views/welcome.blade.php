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

        .main {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            min-width: 400;
            padding: 20px 50px;
            background: rgb(255, 255, 255);
            box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.486)
        }

        .main-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .main-button {
            box-sizing: 0px 0px 10px 1px rgb(0, 0, 0);
        }

        .main-button a {
            border: none;
            padding: 10px 15px;
            font-size: 20px;
            cursor: pointer;
            color: rgb(255, 255, 255);
            background: rgb(255, 88, 88);
            background: linear-gradient(90deg, rgba(255, 88, 88, 1) 0%, rgba(255, 54, 142, 1) 100%);
        }

        .main-button a:hover {
            background: rgb(145, 49, 49);
            background: linear-gradient(90deg, rgb(190, 65, 65) 0%, rgb(173, 37, 96) 100%);
        }
    </style>
    <title>Главная</title>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="main-text">
                <p>Добро пожаловать на сайт проекта</p>
            </div>
            <div class="main-button">
                <a href="{{ route('login') }}">Вход</a>
                <a href="{{ route('register') }}">Регистрация</a>
            </div>
        </div>
    </div>
</body>

</html>