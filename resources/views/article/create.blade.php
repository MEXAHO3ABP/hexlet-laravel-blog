{{ Form::model($article, ['route' => 'articles.store']) }}
  @include('article.form')
  {{ Form::submit('Создать') }}
{{ Form::close() }}
<div><a href="{{ route('articles.index') }}">Назад</a></div>