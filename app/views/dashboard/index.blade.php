@extends('layouts.private')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<p>Hello, {{ $name }}</p>
<h1>Themes</h1>
<h2>Lesson Plans</h2>
<h2>Art Activites</h2>
<h2>Book Activites</h2>
<h2>Songs</h2>

@stop