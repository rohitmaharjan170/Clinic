<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Ganesh Man Singh Hospital |  @yield('sub-title')</title>

    <link rel="shortcut icon" href="{{ asset('/images/fav.jpg') }}">
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/fontawsom-all.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/owl.theme.default.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/style.css') }} " />

     <script src="https://kit.fontawesome.com/4925793b17.js" crossorigin="rohitmaharjan"></script>
     

      <!-- <script src="{{ asset('/js/jquery-3.2.1.min.js') }}" defer></script>
      <script src="{{ asset('/js/popper.min.js') }}" defer></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}" defer></script>
      <script src="{{ asset('/plugins/slider/js/owl.carousel.min.js') }}" defer></script>
      <script src="{{ asset('/js/script.js') }}" defer></script> -->


      <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->



  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</head>

<div class="loader_bg">
    <div class="loader"></div>
</div>

<body>
<div class="loading"></div>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12"> <a href="{{ url('/') }}">
                       <img src="{{ asset('/images/logo/logo-name-big.png') }}" alt="" > 
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a> </a>
                   </div>
                   <div id="menu" class="col-lg-9 col-md-9 d-none d-md-block no-padding">
                       <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                           <li><a href="{{url('/about')}}">About Us</a>
       <!--                       <ul>
<li><a href="{{url('/showdoctors')}}">Doctors</a></li>
<li><a href="{{url('/showmembers')}}">Members</a></li>
<li><a href="#">SUB SUB LIST »</a></li>
</ul>
</li> -->




                            <li><a href="#services">Services</a></li>
                            <li class="nav-item dropdown" style="    margin-top: -7px; padding-right: 0; padding-left: 0;">
        <a class="nav-link dropdown-toggle" href="{{url('/about')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Teams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/showdoctors')}}">Doctors</a>
          <a class="dropdown-item" href="{{url('/showmembers')}}">Members</a>
          <a class="dropdown-item" href="{{url('/showshareholders')}}">Shareholders</a>
        </div>
      </li>
                             <!-- <li><a href="{{ url('/showshareholders') }}">Shareholders</a></li> -->
                            <!--<li><a href="{{ url('/gallery') }}">Gallery</a></li>-->
                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                            <li><a href="https://ganeshmansinghhospital.com/phpTest/onlineappointment/app/#!/onlinelabreportdownload" target="_blank"><button class="btn btn-success">Online Lab Report</button></a></li>
                            
                            <!--<li><a href="https://ganeshmansinghhospital.com/phpTest/onlineappointment/app/#!/onlinelabreportdownload"><button class="btn btn-success">Online Appointment</button></a></li>-->
                            
                             <!--<li><a href="{{ url('/onlinepay') }}" target="_blank"><button class="btn btn-success">Online Payment</button></a></li>-->
                             
                        </ul>
                   </div>
                  <!--  <div class="col-sm-2 d-none d-lg-block">
                       <a href="https://dev.ganeshmansinghhospital.com/phpTest/onlineappointment/app/#!/onlinelabreportdownload"> <button class="btn btn-success">Get Lab Report Online</button> </a>
                   </div> -->
                </div>
            </div>
        </nav>
    </header>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{ asset('/images/slider/slide_checkup.png') }}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">We Are Here For Your Care</h1>
                                    <p class="slider-text hidden-xs">We care for your health every moment... Call us for Any Emergency Services</p>
                                    <a href="tel: 01-5530885" class="btn btn-success hidden-xs">Call Us: 01-5530885</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('/images/slider/slider_hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">We Provide Top Medical Services</h1>
                                <p class="slider-text hidden-xs"> Explore our different services right now.</p>
                                <a href="#services" class="btn btn-success hidden-xs">View All Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="our-blog container-fluid" id="services">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Our Services</h2>
  		    <p>Explore our services we provide...</p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin d-flex justify-content-center">


             <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/emergency_Service.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>24-Hrs Emergency Service</h6>
                <p>We Porvide 24 Hour Emergency Service to ensure we take call all of you Every Day Every Second.</p>
               
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/inpatient.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6> In patient Service</h6>
                <p>We provide comfortable bed and healthy environment for our precious patients and warm services to feel like home.</p>
                
              </div>
            </div>
          </div>


           <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/outpatient.jpg') }} " alt="">

              <div class="blog-single-det">
              
                <h6> Out patient Service</h6>
                <p>We provide easy and seemless protocols for our out patients inorder to receive treatment and services right on time.</p>
                
              </div>
            </div>
          </div>


            <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/Pathology.png') }} " alt="">

              <div class="blog-single-det">
                
                <h6>Pathology Service</h6>
                <p>The hospital boasts of well-equipped state-of-art labs for accurate diagnostics. The Pathology Lab adheres to the protocols lined by the NABL and ISO.</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/Diagnostic_Imaging_icon.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Diagnostic & Imaging</h6>
                <p>We provide Medical imagining of the interior body for clinical analysis and medical intervention, as well as visual representation of some organs or tissues.</p>
                
              </div>
            </div>
          </div>



<!--           <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/Radiology_icon.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Radiology Service</h6>
                <p>The Radiology Department at Norvic International Hospital is equipped with the CT and MRI facility. The radiology department also has a computed radiography and Picture Archiving.</p>
               
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/dental.jpg') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Dental Clinic</h6>
                <p>We provide in house dental services with top level dentists performing dental procedures and treatments with best hygiene as possible. </p>
               
              </div>
            </div>
          </div>
					
          <div class="col-lg-4 col-md-6 blog-smk ">
            <div class="blog-single">

                <img src="{{ asset('/images/services/eye.jpg') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Eye Clinic</h6>
                <p></p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk ">
            <div class="blog-single">

                <img src="{{ asset('/images/services/physiotherapy.jpg') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Physiotherapy</h6>
                <p></p>
               
              </div>
            </div>
          </div>
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
  	</section>  
  	
  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message" id="about">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="{{ asset('/images/about.jfif') }}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>GANESHMAN SINGH MEMORIAL HOSPITAL </h2>
                        <span>& RESEARCH CENTER</span>

                        <p>Ganeshman Singh Memorial Hospital & Research Center has been conceived as a splendid general hospital by Ganeshman Singh Memorial health cooperative society that will serve as excellent quality health care services at a price that will be considered affordable by all economic segments of the local population.  </p>

                        <h4>Call us on : 01-5530885</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

      	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    
<i class="fas fa-check"></i>	To provide healthcare services maintaining accountability in a responsible manner which contribute to the physical, psychological, social and spiritual well-being of the patients and community, which we serve.
<br><br><i class="fas fa-check"></i> To participate in the creation of healthier lives within the community conforms to the requirements of our patients and customers round the clock and constantly measuring and striving to improve the outcome of our care and service.
<br><br><i class="fas fa-check"></i> To create and sustain a work environment in which all participants are empowered and committed to continual quality improvements; confirming the values of participation, acknowledgement, accountability, teamwork, integrity and respect.
<br><br><i class="fas fa-check"></i> Create the national model of care through relentless pursuit of unparalleled quality & value to the entire satisfaction of patient, customer and staff.



  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Key Facts</h4>
  	                    Some of the key facts about GMSH: <br><br>

  	                    100+ Beds <br><br>
Around 30+ Leading Doctors<br><br>
75+ Caring Nurses<br><br>
50+ Support Staffs<br><br>
1000+ Recovered Patients <br><br>
ISO Certified Hospital<br><br>
Dedicated on Late Ganesh Man Singh <br><br>
Pioneer Healthcare provider in Nepal
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    The value system at GMSH lies at the foundation of three pillars: <br><br>

 <p>Service, Compassion and Integrity. </p><br>
Besides we also pratice, <br> <br>
Care<br><br>
Compassion<br><br>
Ethical Practices<br><br>
Learn & Lead<br><br>
Teamwork<br><br>
Trust
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<section class="sesion-type d-none">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Department Types</h2>
  		    <p>GMSH Provides many department inorder to fully execute the hospital in proper way. Some of our department are as:</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep1.jpg') }}" alt="">
  	                    <p>Medical Department</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep2.jpg') }}" alt="">
  	                    <p>OPD</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep3.jpg') }}" alt="">
  	                    <p>IPD</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep4.jpg') }}" alt="">
  	                    <p>X-ray</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep5.jpg') }}" alt="">
  	                    <p>Pathology</p>
  	                </div>
  	            </div>
  	             <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep6.jpg') }}" alt="">
  	                    <p>Administrative Departments</p>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
  	
  	<!-- ################# Testimonial Starts Here#######################--->
    

      <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h5>                        GANESHMAN SINGH MEMORIAL HOSPITAL & RESEARCH CENTER </h5>

                     <img src="{{ asset('/images/logo/logo-name-footer.png') }}" alt="" style="max-width: 85% !important;"> 
                    
                </div>

                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                       	Address : Mahalaxmisthan-15,Lalitpur <br>
                        Email : info@ganeshmansinghhospital.com<br>
                        Phone : 015530885 <br>

                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/"><script>document.write(new Date().getFullYear())</script> &copy; All Rights Reserved | GaneshMan Singh Memorial Hospital</a>
                
                <span>
                <a href="https://www.facebook.com/ganeshmansinghmemorialhospital" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    

<script src="{{ asset('/js/jquery-3.2.1.min.js') }}" defer></script>
      <script src="{{ asset('/js/popper.min.js') }}" defer></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('/js/jquery-scrolltofixed-min.js') }}" defer></script>
      <script src="{{ asset('/js/owl.carousel.min.js') }}" defer></script>
      <script src="{{ asset('/js/script.js') }}" defer></script>

</script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>

</body>
</html>

