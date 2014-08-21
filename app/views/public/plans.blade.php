@extends('layouts.public')

@section('title') Lesson Plans @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<h1>Lesson Plans</h1>




<h1>Animal</h1>
	<h2><a href="{{ URL::to('abcBook') }}">Farm</a>
</h2>
	<h2><a href="{{ URL::to('abcBook') }}">Zoo</a>
</h2>
	<h2><a href="{{ URL::to('abcBook') }}">Reptile</a>
</h2>
<h2><a href="{{ URL::to('abcBook') }}">Pets</a>
</h2>
	

<h1>Earth</h1>
<h2><a href="{{ URL::to('abcBook') }}">Volcanoes</a>
</h2>
<h2><a href="{{ URL::to('abcBook') }}">Dinosaurs</a>
</h2>
<h2><a href="{{ URL::to('abcBook') }}">Rocks</a>
</h2>
<h2><a href="{{ URL::to('abcBook') }}">Earth Quakes</a>
</h2>
	
	
	
	
Space
	Stars
	Planets	

Plants
	Types of plants
	How they grow

People
	Where we live
	Who help us 
	Staying healthy
	Are Body  Senses 

Bugs
	Insets What it is
	Spiders
	Spiders
	Caterpillars
	
Ocean
	Whales
	Sharks
	Sea Turtles
	Coral Reefs and shells

@stop