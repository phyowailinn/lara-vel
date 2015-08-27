@extends('layout.main')
@section('content')
{{ HTML::style('assets/css/style.css') }}

{{ Form::open(array(URL::to('users/register'), 'class'=>'login-form')) }}
<div class="form-group">
@if(!empty($errors->first('email')))
<div class="alert alert-warning">
	{{ $errors->first('email') }}
</div>
@endif
{{ Form::label('email', 'Your Email') }}
{{ Form::text('email', $value = null, array('class'=>'form-control')) }} 
</div>
<div class="form-group">
@if(!empty($errors->first('username')))
<div class="alert alert-warning">
	{{ $errors->first('username') }}
</div>
@endif
{{ Form::label('username', 'Username') }}
{{ Form::text('username', $value = null, array('class'=>'form-control')) }}
</div>
<div class="form-group">
@if(!empty($errors->first('password')))
<div class="alert alert-warning">
	{{ $errors->first('password') }}
</div>
@endif
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class'=>'form-control')) }} 
</div>
<div class="form-group">
@if(!empty($errors->first('address')))
<div class="alert alert-warning">
	{{ $errors->first('address') }}
</div>
@endif
{{ Form::label('address', 'Your Address') }}
{{ Form::text('address', $value = null, array('class'=>'form-control')) }}
</div>
{{ Form::submit('Submit', array('class'=>'btn')) }}
{{ Form::close() }}

@stop
