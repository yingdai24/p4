@extends('_master')

@section('title')
	Sign Up
@stop

@section('content')
<h1>New User Sign Up</h1>

@foreach($errors->all() as $message)
	<div class='error'>{{ $message }}</div>
@endforeach

{{ Form::open(array('url' => '/signup')) }}

 	{{ Form::label('First Name') }} <br/>
    {{ Form::text('first_name') }} <br/><br/>

    {{ Form::label('Last Name') }} <br/>
    {{ Form::text('last_name') }} <br/><br/>

    {{ Form::label('email') }} <br/>
    {{ Form::text('email') }}  <br/><br/>

    {{ Form::label('password') }} <br/>
    {{ Form::password('password') }}
    <small>Min 6 characters</small> <br/><br/> 

    {{ Form::submit('Sign Up') }}

{{ Form::close() }}
@stop