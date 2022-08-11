@extends('layouts.app')

@section('title', 'Статьи')

@section('header', 'Статьи')

@section('content')
  <h2>Список статей</h2>
  @foreach ($articles as $article)
    <h3><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{ $article->name }}</a></h3>
    <div>{{ Str::limit($article->body, 200) }}</div>
    {{ Form::model($article, ['route' => ['articles.edit', $article], 'method' => 'GET']) }}
      {{ Form::submit('Редактировать') }}
    {{ Form::close() }} 
    {{ Form::model($article, ['route' => ['articles.destroy', $article], 'method' => 'DELETE']) }}
      {{ Form::submit('Удалить') }}
    {{ Form::close() }}
  @endforeach
  <div>{{ $articles->links() }}</div>
  <div><a href="{{ route('articles.create') }}">Новая статья</a></div>
@endsection