@extends('layouts.app')

@section('content')
    <a href="{{route('articles.create')}}">Создать новую статью</a>


    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="{{route('articles.show', ['id' => $article->id])}}">{{$article->name}}</a></td>
                    <td><a href="{{route('articles.edit', ['id' => $article->id])}}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
        <div>
@endsection
