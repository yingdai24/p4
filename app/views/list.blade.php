@extends('_master')

@section('title')
	All Schools
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


    <br><br>


	@if(null !== trim($query))
		<p>You searched for <strong>{{{ $query }}}</strong></p>


		@if(count($schools) == 0)
			<p>No matches found</p>
		@endif


	@endif


	@foreach($schools as $name => $school)


		<section>
			
			<img width= 80px src="{{ $school['school_logo'] }}">


			<h2>School Name: {{ $school['school_name'] }}</h2>

   			 <p>
   				 Built In:{{ $school['built_year'] }}
  		     </p>

   			 <p>
   				 School ID: {{ $school['id'] }}
  		     </p>

			 <a href='{{ $school['school_link'] }}'>Visit school website for more details...</a>

   			 	<p>
				    Counselor: {{ $school['counselor']['counselor_name'] }} 
				</p>

                <p>
                    Email: {{ $school['counselor']['counselor_email'] }}
                </p>

                <p>
                    Phone: {{ $school['counselor']['counselor_phone'] }} 
                </p>	
   		   
   		    <p>
    			<a href='/school/edit/{{ $school->id }}'>Edit</a>
			</p>	

			
		</section>

        <hr>




	@endforeach


@stop
