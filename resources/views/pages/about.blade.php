@extends('default')

@section('content')
<h1>{{$title}}</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
Non quo accusamus magnam incidunt neque culpa odit, eligendi temporibus, delectus, 
esse perferendis fugit alias! Autem ducimus, minima mollitia saepe nam esse.</p>
<ul>
	@forelse($numbers as $number)
		<li>{{$number}}</li>
	@empty
		<li>No number found</li>
	@endforelse
</ul>
@endsection

@section('sidebar')
<h3>Sidebar</h3>
<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptate eius commodi delectus corporis beatae minus eos, ex veniam. Numquam ipsa a incidunt dolore eius labore vel vitae quo nemo.
</p>
@endsection