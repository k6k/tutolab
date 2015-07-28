@extends('default')

@section('content')
	<h1>Créer</h1>
	{!!Form::open(['url'=>route('news.store'),'method'=>'post'])!!}
		<div class="form-group">
			{!! Form::label('title','Titre') !!}
			{!! Form::text('title','',['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('slug','Slug') !!}
			{!! Form::text('slug','',['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('content','Contenu') !!}
			{!! Form::textarea('content','',['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Envoyer</button>
		</div>
		
	{!! Form::close()!!}
@stop