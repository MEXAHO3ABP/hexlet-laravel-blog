{{ Form::label('name', 'Название') }}
{{ Form::text('name') }}<br>
@error('name')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
{{ Form::label('body', 'Содержание') }}
{{ Form::textarea('body') }}<br>
@error('body')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror