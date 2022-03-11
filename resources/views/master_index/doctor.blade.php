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

<div class="container" style="padding-top: 6.5rem;">

<div class="heading">
<h2>Our Doctors</h2> 
</div>

<div class="bodycontent">
  <div class="row">
 @foreach ($items as $key => $item)

<div class="col-sm d-flex justify-content-center mb-4">
<div class="card" style="width: 18rem;">
  <img src="{{ $item->doc_img}}" class="card-img-top" alt="..." style="height:250px; width:100%; object-fit: cover;">
  <div class="card-body">
    <h5 class="card-title">{{ $item->doc_name }}</h5>
    <h6 class="card-text">Phone: {{ $item->doc_phone }}</h6>
    <h6 class="card-text">Department: @php $data=collect($dept)->where('dept_id', $item->doc_dept_id)->first(); //var_dump($data);@endphp
                          {{ $data->dept_name }}</h6>
    <h6 class="card-text">Profile: {{ $item->doc_profile }}</h6>
    <h6 class="card-text">Email: {{ $item->doc_email }}</h6>
    
  </div>
</div>

</div>

@endforeach
{!! $items->render() !!}
</div></div>

@if ($items->hasPages())
    <div class="pagination-wrapper py-4">
         {{ $items->links() }}
    </div>
@endif
</div>




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
