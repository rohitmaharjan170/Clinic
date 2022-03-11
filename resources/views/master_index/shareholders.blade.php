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





                <div class="container mb-4">
                    
                    <h3>ShareHolder Lists 2078</h3>
                    
<div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
  <div class="col-12 mt-5 pt-4 col-md-6 col-lg-3">
    
<img src="{{asset('images/shareholders/shareholder1.png')}}" data-target="#indicators" data-slide-to="0" alt="" /> 
<span class="d-flex justify-content-center"> Shareholder List 1</span>
  </div>
  <div class="col-12 mt-5 pt-4 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder2.png')}}" data-target="#indicators" data-slide-to="1" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 2</span>
  </div>
  <div class="col-12 mt-5 pt-4 col-md-6 col-lg-3">
     <img src="{{asset('images/shareholders/shareholder3.png')}}" data-target="#indicators" data-slide-to="2"  alt="" />
     <span class="d-flex justify-content-center"> Shareholder List 3</span>
  </div>
  <div class="col-12 mt-5 pt-4 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder4.png')}}" data-target="#indicators" data-slide-to="3" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 4</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder5.png')}}" data-target="#indicators" data-slide-to="4"  alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 5</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder6.png')}}" data-target="#indicators" data-slide-to="5" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 6</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder7.png')}}" data-target="#indicators" data-slide-to="6" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 7</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder8.png')}}" data-target="#indicators" data-slide-to="7" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 8</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder9.png')}}" data-target="#indicators" data-slide-to="8" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 9</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder10.png')}}" data-target="#indicators" data-slide-to="9" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 10</span>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
       <img src="{{asset('images/shareholders/shareholder11.png')}}" data-target="#indicators" data-slide-to="10" alt="" />
       <span class="d-flex justify-content-center"> Shareholder List 11</span>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="row">
            <div class="col-6">
      <span class="p-2">ShareHolders Lists</span> 
    </div>
    <div class="col-6">
      <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
            </div>
          
        
        
      <div id="indicators" class="carousel slide" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#indicators" data-slide-to="0" class="active"></li>
    <li data-target="#indicators" data-slide-to="1"></li>
    <li data-target="#indicators" data-slide-to="2"></li>
    <li data-target="#indicators" data-slide-to="3"></li>
    <li data-target="#indicators" data-slide-to="4"></li>
    <li data-target="#indicators" data-slide-to="5"></li>
    <li data-target="#indicators" data-slide-to="6"></li>
    <li data-target="#indicators" data-slide-to="7"></li>
    <li data-target="#indicators" data-slide-to="8"></li>
    <li data-target="#indicators" data-slide-to="9"></li>
    <li data-target="#indicators" data-slide-to="10"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder1.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder2.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder3.png')}}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder4.png')}}" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder5.png')}}" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder6.png')}}" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder7.png')}}" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder8.png')}}" alt="Eight slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder9.png')}}" alt="Ninth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder10.png')}}" alt="Tenth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('images/shareholders/shareholder11.png')}}" alt="Eleventh slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
  </div>
</div>
                         </div>








<style>
    
    .close {
  font-size: 1.5rem;
}

.col-12 img {
  opacity: 0.7;
  cursor: pointer;
  margin: 2rem;
  width: 100%;
}

.col-12 img {
  opacity: 1;
    border: 1px solid black;
  box-sizing: border-box;
}

.col-12 img:hover {
  opacity: 1;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.49);
}
    
    
.carousel-control-next-icon{
 color:black;   
}
    
</style>














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
