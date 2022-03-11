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


<body>


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
<!--                            <ul>-->
<!--<li><a href="#">Sub Item</a></li>-->
<!--<li><a href="#">Sub Item</a></li>-->
<!--<li><a href="#">SUB SUB LIST »</a></li>-->
<!--</ul>-->
</li>
                            <li><a href="{{url('/')}}#services">Services</a></li>
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





 <!--  ************************* About Us Content Start Here  ************************** -->
            <div class="about-us">
                <div class="container mt-5 pt-4">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 ">
                            <img src="{{ asset('/images/slider/aboutus.png') }}" alt="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h2>GANESHMAN SINGH HOSPITAL & RESEARCH CENTRE</h2>
                            <p> Ganeshman Singh Memorial Hospital & Research Center has been conceived as a splendid general hospital by Ganeshman Singh Memorial health cooperative society that will serve as excellent quality health care services at a price that will be considered affordable by all economic segments of the local population. </p>
                            <p class="py-3"> Since its inception on 16th Magh 2071 Ganeshman Singh Memorial Hospital & Research Centre started as a 55 bedded general facility, now has grown to become a 100 bedded hospital and still continues to grow to meet the ever increasing demand. This growth is attributable to the faith reposed by the customers and the untiring efforts put in by the consultants and employees as well as the Directors with active support from the vendors. The hospital has built up an enviable reputation for dependable and ethical practices and systems. The one agenda that has always been the top priority is QUALITY SERVICE.</p>
                            <p> This 100 bedded general hospital providing tertiary level clinical care, backed by multidisciplinary team of doctors, is centrally located on the Mahalaxmisthan, Lalitpur Nepal. The primary thrust areas are Nephrology, Surgery, Cardiology, Neurology, Internal Medicine, Gastroenterology, Pediatrics, Ophthalmology, Urology, E.N.T., Obstetrics Gynecology, Dermatology, Psychiatry, Cardiothoracic and Orthopedics including Pathology & Radiology department. A team of eminent consultants have ensured that the highest standards are always maintained.</p>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        
        <!-- ######## About US End ####### -->
        	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Vision Statement</h4>
  	                    <p>To be recognized as the institution of choice for Health Care Services, Education and Employment in the Nepal. </p>
  	                    
  	                    
  	                </div>
  	            </div>
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
  	                    <h4>Our Goal</h4>
  	                    •	Multi faculty hospital at international standard in the country.
  	                    
  	                    <br><br>•	Provide appropriate cost effective health care services at international standard in Nepal.
  	                    
  	                    <br><br>•	Establish a satellite linked hospital with other renowned hospitals. 
  	                    <br><br>•	To promote and support to greater responsiveness to community health needs and collaboration with other community hospitals.
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>

      <!-- ################# Footer Starts Here#######################--->




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
