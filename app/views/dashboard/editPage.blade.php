@extends('layouts.private')

@section('title') Create New Project @stop

@section('content')

<H1>This is for me to Update and edit information to the site</H1>



{{Form::model($abc,	['url' =>'update/'. $abc->Title, 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit(' Save Update ', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

{{Form::open(['url' => 'save','class'=>'form', 'files'=>true])}}
@include('layouts.formInput')
{{Form::Submit(' Save ', ['class' => 'btn btn-primary'])}}
{{Form::close()}}


@stop