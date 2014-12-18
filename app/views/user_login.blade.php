@extends('_master')

@section('title')
	Log in
@stop

@section('content')

<h1>Log in</h1>

{{ Form::open(array('url' => '/login')) }}

    {{ Form::label('email') }} <br/>
    {{ Form::text('email','abc@gmail.com') }} <br/><br/>

    {{ Form::label('password') }} (abc1234) <br/>
    {{ Form::password('password') }} <br/><br/>
 
    {{ Form::submit('Login') }}

{{ Form::close() }}

@stop