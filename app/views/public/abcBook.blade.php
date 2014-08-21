@extends('layouts.public')

@section('title') ABC Book @stop

@section('css')
<!-- <link rel="stylesheet" href="thispage.css"> -->
@stop

@section('content')

<h1>ABC Pages with Nursery rhymes</h1>
<div class="container-fluid, container">	
<div class="row">
	@if (isset($abc))
		@foreach($abc as $abcInfo)
			
			<div class="col-md-4">
				<h1>{{$abcInfo->Title}}</h1>
				<h1>{{$abcInfo->Desc}}</h1>
				
				<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="{{'asset/image/'.$abcInfo->ImageBig.'.jpg'}}""><img src="{{'asset/image/'.$abcInfo->Image.'.jpg'}}"></button>
					
			</div>
		@endforeach
	@else
		<p>Nothing Here</p>
	@endif

</div>
</div>
@stop		
@stop
