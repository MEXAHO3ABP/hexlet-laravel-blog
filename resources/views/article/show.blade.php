@extends('layouts.app')

@section('title')
  {{ $article->name }}
@endsection

@section('header')
  {{ $article->name }}
@endsection

@section('content')
  <div>{{ $article->body }}</div>
  <div><a href="{{ route('articles.edit', ['id' => $article->id]) }}">Редактировать</a></div>
  <div><a href="{{ route('articles.index') }}">Назад</a></div>
@endsection