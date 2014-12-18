@extends('_master')

@section('title')
    Welcome to IVY INTL ORG
@stop

@section('head')

@stop

@section('content')
   
    
    <div id="main_content"> 
    	<div class="column1">
       
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"> Customer Login:</div>
                    
                    
                    <div class="form">
                    <div class="form_row"><label class="left">Username: </label>
							  <input type="text" class="form_input"/></div>
                    <div class="form_row"><label class="left">Password: </label>
							  <input type="password" class="form_input"/></div>
                  
                    
                    <div style="float:right; padding:10px 25px 0 0;">
                    <input type="image" src="images/login.gif"/>
                    </div>

                    <div style="float:right; padding:10px 25px 0 0;">
                    <input type="image" src="images/signup.gif"/>
                    </div>
                    
                    </div>
                
                
                </div>
                
                <div class="bottom_left_box">
                </div>
            </div>
        
 
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"> Join Our Newsletter:</div>
                    
                    
                    <div class="form">
                    <div class="form_row"><label class="left">Email: </label><input type="text" class="form_input"/></div>                    
                    <div style="float:right; padding:10px 25px 0 0;">
                    <input type="image" src="images/join.gif"/>
                    </div>
                    
                    </div>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div> 

        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"> Follow Us:</div>
          
                    <div class="form">
                    <div class="form_row">
					<!-- Follow Us BEGIN -->
						
						<div align="center"><table cellpadding="0" width="156" cellspacing="0"><tr>
							<td><a href="http://www.facebook.com/ivyintl" target="_blank"><img src="images/facebooks1_60.png" alt="Join Our Facebook Fan Page" width="48" height="48" border="0" /></a></td>

							<td><a href="http://www.myspace.com/ivyintl" target="_blank"><img src="images/myspaces1_60.png" alt="Check Us Out On MySpace" width="48" height="48" border="0" /></a></td>

							<td><a href="http://twitter.com/ivyintl" target="_blank"><img src="images/twitters1_60.png" alt="Follow Us On Twitter" width="48" height="48" border="0" /></a></td>
							</tr>
						</table></div>
					<!-- Follow Us END -->
					</div>                                     
                    
                    </div>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div> 
			
 
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"> Contact information:</div>
                    
                    
                    <div class="form">
                    <div class="form_row">
                    	<img src="images/contact_envelope.gif" width="50" height="47" border="0" class="img_right" alt="" title="" />
                        <div class="contact_information">
                        Email: ivyintlorg@gmail.com<br />
                        Telephone: (617) 535-7912<br />
                        Mobile:(617) 855-5121<br />
                        Fax: (617) 581-6559 <br /><br />
                        
                        <span>www.ivyintl.org</span>
                        </div>
                    </div>                    
                    </div>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div>  
            
           </div><!-- end of column one -->



   
   		<div class="column2">
        	<div class="main_text_box">
            <img src="images/ad-01.jpg" width="650" class="img_left" alt="exchange student" title="exchange student" border="0"/>
        	</div>
          
        </div><!-- end of column two -->
   

   

   		<div class="column3">

   		    <div class="title">News &amp; Notices</div> 

   		      <div class="offer_box_wide">
            	 <ul>
					<li><a href="#"><font size="3">Become a host for Summer School <span style="line-height:1.4">-- Apply TODAY!</span></font></a></li>
					<li><span style="line-height:1.4"><a href="#"><font size="3">Enrolling for Summer School 2014</font></a></span></li>
					<li><a href="#" style="line-height:1.4;font-size:10pt"><font size="3">Teacher Recruitment</font></a></li>
					<li><font size="3"><a href="#">Editor Recruitment</a></font></li>
				 </ul>
              </div>   
        </div><!-- end of column three -->



		<div class="column4">
			
        	   <div class="title">Resources</div> 
        	
              <div class="offer_box_wide">
            	 <ul>
					<li><a href="http://www.collegeboard.org/"><font size="3">The College Board: <span style="line-height:1.4">SAT and AP</span></font></a></li>
					<li><span style="line-height:1.4"><a href="http://www.actstudent.org/"><font size="3">ACT Testing</font></a></span></li>
					<li><span style="line-height:1.4"><font size="3"><a href="http://www.ets.org/">ETS: TOEFL&amp;GRE</a></font></span></li>
					<li><a href="https://www.commonapp.org/CommonApp/default.aspx" style="line-height:1.4;font-size:10pt"><font size="3">College Common Application</font></a></li>
					<li><font size="3"><a href="http://www.global-pathways.com/">Global Pathways Program</a></font></li>
				</ul>
              </div>   
					 
        </div><!-- end of column four -->	

	</div>

   @stop