


<div class ='form-group'>
{{Form::label('Title','Title:')}}
{{Form::text('Title', null, ['class' => 'form-control'])}}
{{$errors->first('Title')}}
</div>

<div class ='form-group'>
{{Form::label('Desc','Description:')}}
{{Form::textarea('Desc' , null, ['class' => 'form-control'])}}
{{$errors->first('Description')}}
</div>

<div class ='form-group'>
{{Form::label('Letter','Letter:')}}
{{Form::text('Letter', null, ['class' => 'form-control'])}}
</div>

<div class ='form-group'>
{{Form::label('Theme','Theme:')}}
{{Form::text('Theme', null, ['class' => 'form-control'])}}
</div>


<div class ='form-group'>
{{Form::label('ImageBig','Image Upload:')}}
{{Form::file('ImageBig' , null, ['class' => 'form-control'])}}
</div>







