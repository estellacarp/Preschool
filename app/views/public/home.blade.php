@extends('layouts.public')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<h1>ABC Pages with Nursery rhymes</h1>
<div class="row">
	@if (isset($abc))
		@foreach($abc as $abcInfo)
			
			<div class="col-md-4">
				<article>
				<h1>{{$abcInfo->Title}}</h1>
				<h1>{{$abcInfo->Desc}}</h1>
				<img src="{{'asset/image/'.$abcInfo->Image.'.jpg'}}">
				</article>
				
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif
</div>
		
@stop
