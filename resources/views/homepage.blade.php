<!-- Хранится в resources/views/about.blade.php -->

@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Главная')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>Добро пожаловать</h1>

    <p>Главная страница блога</p>

@endsection
