@extends('layouts.private')

@section('title') Home @stop

@section('css')
<link rel="stylesheet" href="thispage.css">
@stop

@section('content')
<p>Hello, {{ $name }}</p>


<div class="container-fluid">
<div class="row">
	@if (isset($abc))
		@foreach($abc as $abcInfo)
			
			<div class="col-md-4">
				<article>
				<h1>{{$abcInfo->Title}}</h1>
				<h1>{{$abcInfo->Desc}}</h1>
				<img src="{{'asset/image/'.$abcInfo->Image.'.jpg'}}">
				<!-- <img src="{{'asset/image/'.$abcInfo->ImageBig.'.jpg'}}"> -->
				{{ link_to("editPage/$abcInfo->id", 'Edit')}}

				</article>
				
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif
</div>
</div>


@stop