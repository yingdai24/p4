<!DOCTYPE html>
<head>
    <title>@yield('title','IVY International Organization')</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="IVY International Organization is engaged in offering exceptional educational services and cultural exchange opportunities for students all over the world" />
	<meta name="keywords" content="Study Abroad, Exchange Student, MIT Summer Program, Homestay, ESL, SAT, ACT, TOEFL, AP, College Preparation" />
	
	<link rel="stylesheet" type="text/css" href='{{ asset('css/main.css') }}' media="screen"  />
	<link rel="stylesheet" type="text/css" href='{{ asset('css/print.css') }}' media="print" />
	
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href='{{ asset('css/jquery-ui.css') }}' type="text/css" media="all" />		
	<script src='{{ asset('js/jquery.min.js') }}' type="text/javascript"></script>	
	<script src='{{ asset('js/jquery-ui.min.js') }}' type="text/javascript"></script>	
    <script type="text/javascript">
    $(function(){
				$('#tabs').tabs();
    });      
    </script>
	
    @yield('head')

	
</head>

<body>

<div id="main_container">

<div id="header">

       <div id="logo">
			<a href="index.html"><img src='{{ asset('images/IVY Logo-oval.png') }}' alt="IVY International" width="80" title="IVY International" border="0" align= "middle" />  
			<span id="left-side">IVYINTL.ORG</span></a>
				
       </div>
            
		<div id="right-side">
			<a href="index.html" class="first">English</a>&ensp;
			<a href="pages/underconstruc.html">中文版</a>&ensp;
			<form id="main-search" method="get" action="http://www.google.com/search" enctype="application/x-www-form-urlencoded">
						<label for="search-field" id="search-field-label">Search</label>
						<input type="text"  name="as_q" tabindex="1" maxlength="255" id="search-field" />
						<input type="image" alt="Search" value="Search" src='{{ asset('images/0search.png') }}' id="search-button"/> 
						<input type="hidden" name="as_sitesearch" value="morpheus.dce.harvard.edu/~ydai/bidmc/fp/"/> 
			</form>
		</div>		
				
	<div class="menu">

		<ul>
		<li><a href={{url('/')}}>Home</a>
		<ul>
		<li><a href="#">About Us</a></li>
		<li><a href="#">Vision</a></li>
		<li><a href="#">History</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
		</li>


		<li><a href="#">Summer School</a>
		<ul>
		<li><a href="#">English Course</a></li>
		<li><a href="#">Calendar</a></li>
        <li><a href="#">Health Insurance</a></li>        
        <li><a href="#">Photos/Videos</a></li>
        <li><a href="#">Directions</a></li>        
		</ul>		
		</li>

        <li><a href="#">Online Tutoring</a>
        </li>

        <li><a href="#">Programs</a>
        <ul>
        <li><a href="#">High School Programs</a></li>
        <li><a href="#">College Preparation</a></li>
        <li><a href="#">Grad School Application</a></li>
        </ul>
        </li>        

		<li><a href="#">Career</a>
		<ul>
		<li><a href="#">Teacher Recruitment</a></li>
		<li><a href="#">Editor Recruitment </a></li>
        <li><a href="#">Become A Host </a></li>        
		</ul>		
		</li>

        <li><a href="schoolsearch">School Search</a>
        </li>


		</ul>
		</div>
		</div>



	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif
	

    
    @yield('content')


    
<div id="footer">
   <div id="footer_menu"><a href="index.html">HOME</a> | <a href="#">ABOUT US</a> | <a href="#">PROGRAMS</a> | <a href="#">SUMMER SCHOOL</a> | <a href="#">ONLINE TUTORING</a> | <a href="#">CAREER</a> | <a href="#">LINKS &amp; BLOGS</a> 
	</div>
		
	<div id="copyright">
    <div style="float:left; padding:3px;margin-left:230px;"><a href="#"><img src='{{ asset('images/footer_logo.png') }}' width="42" height="35" alt="" title="" border="0" /></a></div>
    <div style="float:left; padding:14px 10px 10px 10px;"> IVY International Organization&copy; All Rights Reserved 2014 - Web Design by <a href="http://www.ivyintl.org" style="color:#772c17;">IVY</a></div>
    </div>

</div>


</div>
<!-- end of footer -->



</body>
</html>