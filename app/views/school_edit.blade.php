@extends('_master')

@section('title')
	Edit
@stop

@section('head')
  
@stop

@section('content')



 
  @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif



        @if(Auth::check())
        <nav>
          <ul>
            <li><a href='/logout'>Log out {{ Auth::user()->email; }}</a>
            </li>

            <li><a href='/school'>All Schools</a>
            <ul>
            <li><a href='/school/search'>Search Schools</a></li>
            <li><a href='/school/create'>Add New School</a></li>
            </ul>
            </li>

            <li><a href='/counselor'>All Counselors</a>
            </li>
         </ul>
        </nav>


        @else
            

            <div class="left_box">
                <div class="top_left_box">
                </div>
                <div class="center_left_box">
                    <div class="box_title">Please SignUp or Login</div>
                    
                    
                    <div class="form">
                   
                    <div style="float:right; padding:10px 25px 0 0;">
                    <a href='/login'><input type="image" src="images/login.gif"/></a>
                    </div>

                    <div style="float:right; padding:10px 45px 0 0;">
                    <a href='/signup'><input type="image" src="images/signup.gif"/></a>
                    </div>
                    
                    </div>
                
                
                </div>
                
                <div class="bottom_left_box">
                </div>
            </div>



        @endif



	<h1>Edit</h1>
	<h2>{{{ $school['school_name'] }}}</h2>

	{{---- EDIT -----}}
	{{ Form::open(array('url' => '/school/edit')) }}

		{{ Form::hidden('id',$school['id']); }}

		<div>
			{{ Form::label('school_name','School Name') }} <br>
			{{ Form::text('school_name',$school['school_name']); }}
		</div>

		<div>
			{{ Form::label('counselor_id', 'Counselor') }} <br>
			{{ Form::select('counselor_id', $counselors, $school->counselor_id); }}
		</div>

		<div>
			{{ Form::label('built_year','Built Year (YYYY)') }} <br>
			{{ Form::text('built_year',$school['built_year']); }}
		</div>

		<div>
			{{ Form::label('school_logo','School Logo Image URL') }} <br>
			{{ Form::text('school_logo',$school['school_logo']); }}
		</div>

		<div>
			{{ Form::label('school_link','School Website URL') }} <br>
			{{ Form::text('school_link',$school['school_link']); }}
		</div>

		{{ Form::submit('Save'); }}

	{{ Form::close() }}

	<div>
		{{---- DELETE -----}}
		{{ Form::open(array('url' => '/school/delete')) }}
			{{ Form::hidden('id',$school['id']); }}
			<button style="background-color:red" onClick='parentNode.submit();return false;'>Delete</button>
		{{ Form::close() }}
	</div>


@stop