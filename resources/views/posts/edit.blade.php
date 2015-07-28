@extends('default')

@section('content')
	<h1>Editer</h1>
	{!!Form::open(['url'=>route('news.update',$post),'method'=>'put'])!!}
		<div class="form-group">
			{!! Form::label('title','Titre') !!}
			{!! Form::text('title',$post->title,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug','Slug') !!}
			{!! Form::text('slug',$post->slug,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('content','Contenu') !!}
			{!! Form::textarea('content',$post->content,['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			<label>
				{!! Form::checkbox('online',1,$post->online) !!}
				En ligne ?
			</label>
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Envoyer</button>
		</div>
		
	{!! Form::close()!!}
@stop