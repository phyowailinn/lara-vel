@extends('layout.main')
@section('content')

 {{ HTML::style('assets/css/style.css') }}

 {{ Form::open(array(URL::to('login'),'class' => 'login-form')) }} 
 <div class="form-group">
 @if(!empty($errors->first('email')))
 <div class="alert alert-warning">
 	{{ $errors->first('email') }}
 </div>
 @endif
 {{ Form::label('email', 'Email') }}
{{ Form::text('email', $value = null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
 @if(!empty($errors->first('password')))
 <div class="alert alert-warning">
 	{{ $errors->first('password') }}
 </div>
 @endif
{{ Form::label('password', 'Password') }}
{{ Form::password('password', array('class' => 'form-control')) }}
</div>
{{ Form::submit('Sign in', array('class'=>"btn")) }} or
{{ HTML::link('users/register', 'Sign Up', array('class'=>'btn')) }}
{{ Form::close() }}

@stop