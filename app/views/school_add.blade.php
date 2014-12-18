@extends('_master')

@section('title')
	Add a new school
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



	<h1>Add a new school</h1>

	{{ Form::open(array('url' => '/school/create')) }}


		{{ Form::label('school_name','School Name') }}<br/>
		{{ Form::text('school_name'); }}<br/><br/>

		{{ Form::label('counselor_id', 'Counselor') }}<br/>
		{{ Form::select('counselor_id', $counselors); }} <br/><br/>

		{{ Form::label('built_year','Built Year (YYYY)') }}<br/>
		{{ Form::text('built_year'); }} <br/><br/>

		{{ Form::label('school_logo','School Logo Image URL') }}<br/>
		{{ Form::text('school_logo'); }} <br/><br/>

		{{ Form::label('school_link','School Website URL') }}<br/>
		{{ Form::text('school_link'); }} <br/><br/>

		{{ Form::submit('Add'); }} <br/><br/>

	{{ Form::close() }}

@stop
