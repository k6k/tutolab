@extends('default')

@section('content')
	<h1>Raccourcisseur</h1>

	<form action="{{route('link.store')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="url">Lien à raccourcir</label>
			<input type="text" id="url" name="url" placeholder='http://.....' class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-primary">Raccourcir</button>
		</div>
	</form>

@stop