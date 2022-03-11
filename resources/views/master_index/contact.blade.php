
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
    
    <style>
        
        .dot {
  height: 80px;
  width: 80px;
  background-color: #00AB9F;
  border-radius: 50%;
  display: inline-block;
}

.doti{
   font-size:3em; 
   padding-top:15px;
   color:white;
}

    </style>
    
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Contact Form </h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-12">
<div class="wrapper">
    
    
    <div class="row mt-5 mb-2">
<div class="col-md-3">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class=" dot"> <i class="fa fa-map-marker doti"></i></span>
</div>
<div class="text">
<p><span>Address:</span> <br> Mahalaxmisthan-15,Lalitpur</p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="dot"><i class="fa fa-phone  doti"></i></span>
</div>
<div class="text">
<p><span>Phone:<br></span> <a href="tel:015530885">+ 015530885</a></p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="dot"><i class="fa fa-paper-plane doti"></i></span>
</div>
<div class="text">
<p><span>Email:</span> <a href="mailto:info@ganeshmansinghhospital.com"><span class="__cf_email__">info@ganeshmansinghhospital.com</span></a></p>
</div>
</div>
</div>
<div class="col-md-3">
<div class="dbox w-100 text-center">
<div class="icon d-flex align-items-center justify-content-center">
<span class="dot"><i class="fa fa-globe  doti"></i></span>
</div>
<div class="text">
<p><span>Website:</span> <a href="#">https://ganeshmansinghhospital.com</a></p>
</div>
</div>
</div>
</div>
    
    
<div class="row no-gutters mb-5">
<div class="col-md-7">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3 class="mb-4">Contact Us</h3>
<div id="form-message-warning" class="mb-4"></div>

<form method="POST" id="contactForm" name="contactForm" class="contactForm">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="label" for="name">Full Name</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label class="label" for="email">Email Address</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="label" for="subject">Subject</label>
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label class="label" for="#">Message</label>
<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="reset" value="Send Message" class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-5 d-flex align-items-stretch">
<div id="map" class="mt-5" >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5943.108227008349!2d85.3147558633925!3d27.661866311679663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19d42a1b1057%3A0x65bb18c994bc91b6!2sGaneshman%20Singh%20Memorial%20Hospital%20%26%20Research%20Center!5e0!3m2!1sen!2snp!4v1641796387593!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
    
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</section>



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