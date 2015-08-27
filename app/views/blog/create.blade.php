@extends('layout.main')
@section('content')
 {{ HTML::style('assets/css/style.css') }}

	<div class="container">
	{{ Form::open(array('route' => 'blog.create', 'class'=>'content-form')) }}
	<div class="form-group">
	@if(!empty($errors->first('title')))
	<div class="alert alert-warning">
		{{ $errors->first('title') }}
	</div>
	@endif
	{{ Form::label('title', "Post Title") }}	 
	{{ Form::text('title', $value = null, array('class'=> 'form-control', 'placeholder'=>'Your Post Title'))}} 
	</div>
	<div class="form-group">
	@if(!empty($errors->first('body')))
	<div class="alert alert-warning">
		{{ $errors->first('body') }}
	</div>
	@endif
	{{ Form::label('body', "Content") }} 	
	{{ Form::textarea('body', $value=null, array('class'=>'form-control')) }} 
	</div>	
	{{ Form::select('category_id', $categories, array('class'=>'span2')) }}
		
	{{ Form::hidden('user_id', $user_id) }} 
	{{  Form::submit('Post To', array('class'=>'btn btn-primary')) }}	
	{{ Form::close() }}
	</div>
@stop
