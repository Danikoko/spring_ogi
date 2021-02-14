<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Spring Ogi Car Hire</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Car Rental One Page HTML Template">
<meta name="keywords" content="car hire, hire, abuja, spring, spring ogi, spring ogi car hire, fct, affordable, quality, services nigeria, hire car, cars for hire, car, car rental, booking, business">
<meta name="author" content="Daniel Enamudu">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Bootstrap css -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />

<!-- Fontawesome css -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

<!-- Magnific-popup css -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

<!-- Owl Carousel css -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>

<!-- Navigation Section -->
<div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
  <div class="container"> 
    
    <!-- NAVBAR HEADER -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE --> 
      <a href="index-2.html" class="navbar-brand">Spring <span>Ogi</span></a> </div>
    
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="smoothScroll">Home</a></li>
        <li><a href="#cars" class="smoothScroll">Cars</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#service" class="smoothScroll">Service</a></li>
        <li><a href="#team" class="smoothScroll">Support</a></li>
        <li><a href="#testimonials" class="smoothScroll">Clients</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
        <li><a class="phone_number" href="tel:08036985919"><span style="line-height: initial; margin-top: 0;" class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 0803-698-5919</span></a></li>
        {{-- <li><span class="calltxt"><a style="line-height: 0; padding: 0; font-size: inherit;" href="tel:08036985919"><i class="fa fa-phone" aria-hidden="true"></i> 0803-698-5919</a></span></li> --}}
        {{-- <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> 0803-698-5919</span></li> --}}
      </ul>
    </div>
  </div>
</div>   

<!-- Home Section -->
<div id="home" class="parallax-section"> 
  <!--     <div class="overlay"></div>-->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10 col-sm-12">
        <div class="slide-text">
          <h3>What we offer? <a href="#" class="typewrite" data-period="2000" data-type='[ "Car hire within Abuja.", "Car hire from Abuja to other states.", "Rentals for weddings and other ceremonies.", "Escort services.", "Project vehicles." ]'> <span class="wrap"></span> </a> </h3>
          <h1>Hire a vehicle today!</h1>
          <p>Have the oga treatment</p>
          <a href="#bookz" class="btn btn-default section-btn" onclick="goToBook()">Get Started</a> </div>
      </div>
    </div>
  </div>
</div>

<!-- Form Section -->
<div id="body" class="container">
  <div id="bookz" class="bformBox">
    <h3>BOOK YOUR RENTAL TODAY!</h3>
    <form>
      <div class="formrow">
        <select v-model="formData.vehicle" class="form-control" name="car_type" >
          <option value="" >Select Your Vehicle For Rental</option>
          <option>Toyota Prado</option>
          <option>Toyota Hilux</option>
          <option>Toyota Camry</option>
          <option>Toyota Hummer Bus</option>
          <option>Toyota Coaster</option>
          <option>Lexus Gx 470</option>
          <option>Other</option>
        </select>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="formrow">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Pick-Up</span>
              <select v-model="formData.pick_up" class="form-control" data-live-search="true" name="pickup" id="pickup" required="required" >
                <option value="">Select Pick-Up</option>
                <option>Kuje</option>
                <option>Kwali</option>
                <option>Gwagwalada</option>
                <option>Lugbe</option>
                <option>Wuse</option>
                <option>Garki</option>
                <option>Gwarinpa</option>
                <option>Apo</option>
                <option>Maitama</option>
                <option>Asokoro</option>
                <option>Kubwa</option>
                <option>Mabushi</option>
                <option>Life Camp</option>
                <option>Jabi</option>
                <option>Kado</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="formrow">
            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
              <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Date and Time" name="datetime_pick" required >
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="formrow">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Drop-Off</span>
              <select v-model="formData.drop_off" class="form-control" data-live-search="true" name="dropoff" id="drop" required="required">
                <option value="" >Select Drop-Off</option>
                <option>Kuje</option>
                <option>Kwali</option>
                <option>Gwagwalada</option>
                <option>Lugbe</option>
                <option>Wuse</option>
                <option>Garki</option>
                <option>Gwarinpa</option>
                <option>Apo</option>
                <option>Maitama</option>
                <option>Asokoro</option>
                <option>Kubwa</option>
                <option>Mabushi</option>
                <option>Life Camp</option>
                <option>Jabi</option>
                <option>Kado</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="formrow">
            <div class="input-group date form_datetime" data-date="2018-02-22T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
              <input v-model="formData.drop_off_date" class="form-control" size="16" type="text" value="" readonly placeholder="Select Date and Time" name="datetime_off" required >
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <div class="formrow">
            <input v-model="formData.name" type="text" class="form-control" placeholder="Your Name" name="name" required >
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="formrow">
            <input v-model="formData.email" type="email" class="form-control" placeholder="Your Email" name="email" required>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="formrow">
            <input v-model="formData.phone" type="tel" class="form-control" placeholder="Phone" name="phone" required>
          </div>
        </div>
      </div>
      <div class="formbtn">
        <button @click="submitBooking()" type="button" class="btn">Submit Car Booking</button>
      </div>
    </form>
  </div>
</div>

<!-- Cars Section -->
<div class="parallax-section" id="cars">
  <div class="container">
    <div class="section-title">
      <h3>Vehicle Models <span>For Rent</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget</p>
    </div>
    <div class="vehiclesList">
      <ul class="carsmodals">
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>BMW 3-SERIES</h3>
              <div class="subtitle">ModernLine</div>
              <div class="carPrice"> <strong>$99</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/01.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/01.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Subaru Impreza</h3>
              <div class="subtitle">Premium</div>
              <div class="carPrice"> <strong>$125</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/02.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/02.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Hyundai Santa Fe XL</h3>
              <div class="subtitle">Streetsville H</div>
              <div class="carPrice"> <strong>$199</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/03.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/03.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>Honda Vizel</h3>
              <div class="subtitle">Streetsville H</div>
              <div class="carPrice"> <strong>$215</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/04.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/04.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage: <strong>2 Bags</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air conditioning: <strong>Dual Zone</strong></li>
                  <li>Minimum age: <strong>35 years</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Service 1 -->
{{-- <div class="servicesbox bg1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-6">
        <h3>Car Rentals</h3>
        <div class="ctoggle">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tincidunt mauris est, in faucibus dui viverra et. Aliquam finibus vestibulum elit, at pharetra nisl congue vel. Nunc pretium posuere justo pretium fringilla. Sed volutpat risus non rhoncus convallis. Sed fermentum est at hendrerit pellentesque. Mauris nec leo euismod, sagittis mauris in, posuere est...</p>
          <a href="#" class="readmore">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
</div> --}}

<!-- About section -->
<div id="about">
  <div class="container">
    <div class="section-title">
      <h3>About <span>Car Rental</span> Template</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget</p>
    </div>
    <div class="about-desc">
      <div class="row">
        <div class="col-md-7">
          <ul class="circleList row">
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-car" aria-hidden="true"></i></div>
              <div class="title">Mauris convallis felis</div>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-users" aria-hidden="true"></i></div>
              <div class="title">Mauris convallis felis</div>
            </li>
            <li class="col-md-4 col-sm-4">
              <div class="cricle"><i class="fa fa-tags" aria-hidden="true"></i></div>
              <div class="title">Mauris convallis felis</div>
            </li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br>
            <br>
            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          <ul class="orderlist">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Sed a mauris at ex lobortis hendrerit in nec felis.</li>
            <li>Nunc sed urna sit amet sapien rhoncus pretium congue id sem.</li>
            <li>Vivamus sagittis sapien a tellus consequat rutrum.</li>
            <li>Mauris at justo malesuada ligula accumsan tincidunt quis efficitur orci.</li>
          </ul>
        </div>
        <div class="col-md-5">
          <div class="postimg"><img src="{{ asset('storage/images/about-img.jpg') }}"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Counter Section -->
{{-- <div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="499" data-speed="1000"></span> <span class="counter-text">Happy Client</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-car" aria-hidden="true"></i></i></div>
          <span class="counter-number" data-from="1" data-to="199" data-speed="2000"></span> <span class="counter-text">Cars</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="50" data-speed="3000"></span> <span class="counter-text">Destinations</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-trophy" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="199" data-speed="4000"></span> <span class="counter-text">Awards</span> </div>
      </div>
    </div>
  </div>
</div> --}}

<!-- Service Section -->
<div id="service" class="parallax-section">
  <div class="container"> 
    <!-- Section Title -->
    <div class="section-title" >
      <h3>Car Rental <span>Services</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget</p>
    </div>
    <div class="row"> 
      <!-- Service 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <h4>Phone Reservation</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <h4>Special Rates</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-road" aria-hidden="true"></i></div>
          <h4>One Way Rental</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-umbrella" aria-hidden="true"></i></div>
          <h4>Life Insurance</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
          <h4>City to City</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
      
      <!-- Service 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
          <h4>Free Rides</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>Get Started Today</h2>
    <p>Sed sed neque laoreet, rhoncus libero id, pharetra est. Sed ut neque est. Maecenas et est sagittis, mollis risus dignissim, mattis dolor. </p>
    <a href="#">Purchase Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
</div>

<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container"> 
    
    <!-- Section Title -->
    <div class="section-title">
      <h3>Testimonials</h3>
    </div>
    <ul class="testimonialsList">
      <!-- Client -->
      <li class="item">
        <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientname">Jhon Doe</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
    </ul>
  </div>
</div>

<!-- Newsletter-->
<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Newsletter</h3>
        <p>Subscribe for our monthly newsletter.</p>
      </div>
      <div class="col-md-8">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Address">
          <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Sign Up <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </span> </div>
      </div>
    </div>
  </div>
</div>

<!-- Google Map Section -->
<div id="map"></div>

<!-- Contact Section -->
<div id="contact">
  <div class="container"> 
    
    <!-- Dection Title -->
    <div class="section-title" >
      <h3>Contact <span>Us</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget.</p>
    </div>
    
    <!-- CONTACT FORM HERE -->
    <div class="row">
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact-form" class="row" action="https://www.sharjeelanjum.com/html/car-rental/html/feedback.php" method="POST">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Name" required  >
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email" required >
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Address:</strong>
              <p>8500 lorem, New Ispum, Dolor amet sit 12301</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email Address:</strong>
              <p>investigate@your-site.com</p>
              <p>investigate@your-site.com</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Phone No:</strong>
              <p>+12 345 67 09</p>
              <p>+12 345 67 09</p>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients Logo / Partners-->
{{-- <div class="our-clients">
  <div class="container"> 
    
    <!-- Section Title -->
    <div class="section-title">
      <h3>Our <span>Partners</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet, massa ac ornare feugiat, nunc dui auctor ipsum, sed posuere eros sapien id quam. Maecenas odio nisi, efficitur eget.</p>
    </div>
    <div class="owl-clients">
      <div class="item"> <img src="{{ asset('storage/images/client-logo4.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo2.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo3.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo3.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo2.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo3.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo3.png') }}" alt=""> </div>
      <div class="item"> <img src="{{ asset('storage/images/client-logo2.png') }}" alt=""> </div>
    </div>
  </div>
</div> --}}
<!-- Clients Logo end--> 

<!-- Footer Section -->
<footer>
  <div class="container"> 
    <!-- social Section -->
    <div class="socialLinks" > <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a> </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="footer-copyright">
          <p>&copy; 2018 Car Rentals | All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap --> 
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script> 

<!-- Popup --> 
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script> 
<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script> 

<!-- Carousel --> 
<script src="{{ asset('assets/js/owl.carousel.js') }}"></script> 

<!-- Sticky Header --> 
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script> 

<!-- Parallax --> 
<script src="{{ asset('assets/js/jquery.parallax.js') }}"></script> 

<!-- Counter --> 
<script src="{{ asset('assets/js/counter.js') }}"></script> 
<script src="{{ asset('assets/js/smoothscroll.js') }}"></script> 

<!-- Google Map --> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMqMG_n4C0aAi3F8a82Q6s3hxDLrTXxe8&amp;callback=initMap" async defer></script> 
<script src="{{ asset('assets/js/gmap.js') }}"></script> 

<!-- Custom --> 
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script>
    const app = new Vue({
        el: '#body',
        data() {
            return {
                formData: {
                    vehicle: '',
                    pick_up: '',
                    drop_off: '',
                    name: '',
                    email: '',
                    phone: ''
                },
                name: 'Daniel',
            }
        },
        mounted() {
            $('.form_datetime').datetimepicker({
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
                showMeridian: 1
            });
        },
        methods: {
            
        },
    })
</script>
<script>
    function goToBook() {
        $(document).ready(function() {
            $('html, body').animate({scrollTop: $('#bookz').offset().top -100 }, 'slow');
        })
    }
</script>
</body>

<!-- Mirrored from www.sharjeelanjum.com/html/car-rental/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Feb 2021 00:02:56 GMT -->
</html>