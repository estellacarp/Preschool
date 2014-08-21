@extends('layouts.public')

@section('title') Preschool Themes @stop

@section('css')
<!-- <link rel="stylesheet" href="thispage.css"> -->
@stop

@section('content')
<h1>Themes</h1>
<h2><a href="{{ URL::to('abcBook') }}">ABC Book</a>
</h2>


<h1>Bugs</h1>
<h1>Animals</h1>
<h1>People</h1>
<h1>Ocean</h1>
<h1>Earth</h1>
<h1>Space</h1>
<h1>Plants</h1>
		
@stop
