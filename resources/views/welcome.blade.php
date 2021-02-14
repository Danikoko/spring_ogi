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
<style>
    .swal2-popup.swal2-toast .swal2-title {
        font-size: 1.5em !important;
    }
</style>
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
    <h3>BOOK TODAY!</h3>
    <form>
      <div class="formrow row">
          <div class="col-md-6 col-sm-6">
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
          <div class="col-md-6 col-sm-6">
            <select v-model="formData.number_of_vehicles" class="form-control" name="car_type" >
                <option value="" >Select Number Of Vehicles</option>
                <option>1 - 5</option>
                <option>6 - 10</option>
                <option>11 - 15</option>
                <option>16 & Above</option>
              </select>
          </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="formrow">
            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i> Pick-Up</span>
              <select v-model="formData.pick_up_location" class="form-control" data-live-search="true" name="pickup" id="pickup" required="required" >
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
              <select v-model="formData.drop_off_location" class="form-control" data-live-search="true" name="dropoff" id="drop" required="required">
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
              <input class="form-control" size="16" type="text" value="" readonly placeholder="Select Date and Time" name="datetime_offz" required >
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
        <button v-if="!isLoading" @click="submitBooking()" type="button" class="btn">Submit</button>
        <button v-else type="button" class="btn" disabled style="cursor: default;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
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
              <h3>TOYOTA PRADO</h3>
              <div class="subtitle">2010s MODELS</div>
              <div class="carPrice"> <strong>&#x20A6;10,000</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/05.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/05.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                  <li>Doors: <strong>4</strong></li>
                  <li>Passengers: <strong>5</strong></li>
                  <li>Luggage Space: <strong>Yes</strong></li>
                  <li>Transmission: <strong>Automatic</strong></li>
                  <li>Air Conditioning: <strong>Functional</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>TOYOTA CAMRY</h3>
              <div class="subtitle">2000s/2010s MODELS</div>
              <div class="carPrice"> <strong>&#x20A6;7,000</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/07.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/07.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                    <li>Doors: <strong>4</strong></li>
                    <li>Passengers: <strong>5</strong></li>
                    <li>Luggage Space: <strong>Yes</strong></li>
                    <li>Transmission: <strong>Automatic</strong></li>
                    <li>Air Conditioning: <strong>Functional</strong></li>
                  </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>COASTER BUS</h3>
              <div class="subtitle">2000s MODELS</div>
              <div class="carPrice"> <strong>&#x20A6;18,000</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/06.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/06.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                    <li>Doors: <strong>4</strong></li>
                    <li>Passengers: <strong>25</strong></li>
                    <li>Luggage Space: <strong>Yes</strong></li>
                    <li>Transmission: <strong>Manual</strong></li>
                    <li>Air Conditioning: <strong>Functional</strong></li>
                  </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="item">
          <div class="row">
            <div class="col-md-3">
              <h3>HIACE BUS</h3>
              <div class="subtitle">2000s MODELS</div>
              <div class="carPrice"> <strong>&#x20A6;12,000</strong> <span>/Day</span> </div>
              <a href="#" class="btn"><i class="fa fa-calendar" aria-hidden="true"></i> Reserve Now</a> </div>
            <div class="col-md-6"><a href="{{ asset('storage/images/cars/08.jpg') }}" class="image-popup"><img src="{{ asset('storage/images/cars/08.jpg') }}" alt="" /></a></div>
            <div class="col-md-3">
              <div class="carinfo">
                <ul>
                    <li>Doors: <strong>4</strong></li>
                    <li>Passengers: <strong>14</strong></li>
                    <li>Luggage Space: <strong>Yes</strong></li>
                    <li>Transmission: <strong>Automatic</strong></li>
                    <li>Air Conditioning: <strong>Functional</strong></li>
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
      <h3>About <span>Spring Ogi</span> Car Hire</h3>
      <p>We hire and sell Vehicles (Hiluxes, Saloon Cars and SUVs) for individuals organizations within Abuja & environs.</p>
    </div>
    <div class="about-desc">
      <div class="row">
        <div class="col-md-7">
          <p>We at Spring Ogi Car Hire, strive to get the best service possible to our customers. Hence our vast choices of available vehicles. <br>
            <br>
            We have developed an easy-to-use booking system to get you the right vehicle, at the right time and at the right price. Below are some vehicles avaiable for rent/purchase.</p>
          <ul class="orderlist">
            <li>Toyota Prado</li>
            <li>Toyota Hilux</li>
            <li>Toyota Camry</li>
            <li>Toyota Hummer Bus</li>
            <li>Toyota Coaster</li>
            <li>Lexus Gx 470</li>
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
      <p>There are several opportunities and benefits attached to doing business with us which some of our happy customers can concur to. We'd be happy to have you among them as well.</p>
    </div>
    <div class="row"> 
      <!-- Service 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <h4>Phone Reservation</h4>
          <p>Don't want to book here, give us a call on 0803-698-5919.</p>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <h4>Special Rates</h4>
          <p>Contact us on our special rates offers. These depend on some factors.</p>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-eye-slash" aria-hidden="true"></i></div>
          <h4>No Hidden Charges</h4>
          <p>What you see is what you get. No extra/recurring billings</p>
        </div>
      </div>
      
      <!-- Service 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-umbrella" aria-hidden="true"></i></div>
          <h4>Car Insurance</h4>
          <p>You have the choice of insuring your car purchase with our insurance partners.</p>
        </div>
      </div>
      
      <!-- Service 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
          <h4>City to City</h4>
          <p>Inter-city usage is allowed. This works particularly well with bus rentals.</p>
        </div>
      </div>
      
      <!-- Service 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="service-thumb">
          <div class="thumb-icon"><i class="fa fa-car" aria-hidden="true"></i></div>
          <h4>Car Sales</h4>
          <p>There's a variety of vehicles up for sale here. Get in touch with us for more info.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tagline Section -->
<div class="taglinewrap">
  <div class="container">
    <h2>Get Started Today</h2>
    <p>We are excited and ready to take your booking. <a href="08036985919" style="display: inline-block; background: none; padding: 0; color: #fff; font-size: initial; font-weight: 600; text-transform: none; margin-top: initial;">Call</a> or <a style="display: inline-block; background: none; padding: 0; color: #fff; font-size: initial; font-weight: 600; text-transform: none; margin-top: initial;" href="https://mail.google.com/mail/?view=cm&fs=1&to=contact@springogi.com" target="_blank">mail</a> us for more inquiries.</p>
    <a href="#!" onclick="goToBook()">Get Quote <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
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
        <p>"Excellent and quick response. The vehicles are in good working condition."</p>
        <div class="clientname">Danladi Abu</div>
        <div class="clientinfo">CEO - Company Inc</div>
      </li>
      
      <!-- Client -->
      <li class="item">
        <div class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
        <p>"I Purchased some vehicles for my company. My employees love them. Looking forward to subsequent deals"</p>
        <div class="clientname">Emeka Nnamdi</div>
        <div class="clientinfo">CEO - EMK BDC</div>
      </li>
      
    </ul>
  </div>
</div>

<!-- Newsletter-->
<div id="newsVue">
    <div class="newsletter">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h3>Newsletter</h3>
            <p>Subscribe for our monthly newsletter.</p>
        </div>
        <div class="col-md-8">
            <div class="input-group">
            <input type="text" class="form-control" name="newsletter" placeholder="Enter Your Email Address">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button" v-if="!isLoading" @click="subscribe()">Subscribe <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            <button class="btn btn-secondary" type="button" v-else disabled style="cursor: default;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </span> </div>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Google Map Section -->
{{-- <div id="map"></div> --}}

<!-- Contact Section -->
<div id="contact">
  <div class="container"> 
    
    <!-- Dection Title -->
    <div class="section-title" >
      <h3>Contact <span>Us</span></h3>
    </div>
    
    <!-- CONTACT FORM HERE -->
    <div class="row">
      <div class="col-md-8">
        <div class="contact-form">
          <form>
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
              <input type="text" class="form-control" name="address" placeholder="Subject">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-12">
              <button id="submit" type="button" class="form-control" name="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact"> <span><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Address:</strong>
              <p>Don't know what address to use here</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email Address:</strong>
              <p>contact@springogi.com</p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact"> <span><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Phone No:</strong>
              <p>0803-698-5919</p>
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
    <div class="socialLinks" > <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="footer-copyright">
          <p>&copy; <script>document.write(new Date().getFullYear())</script> Spring Ogi Car Hire | All Rights Reserved.</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script>
    const app = new Vue({
        el: '#body',
        data() {
            return {
                api_url: 'http://127.0.0.1:8000/api/',
                isLoading: false,
                formData: {
                    vehicle: '',
                    number_of_vehicles: '',
                    pick_up_location: '',
                    drop_off_location: '',
                    name: '',
                    email: '',
                    phone: ''
                }
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
            submitBooking() {
                let _this = this;
                if (_this.formData.vehicle !== '' || _this.formData.number_of_vehicles !== '' || _this.formData.pick_up_location !== '' || _this.formData.drop_off_location !== '' || _this.formData.name !== '' || _this.formData.email !== '' || _this.formData.phone !== '' || document.querySelector('[name="datetime_pick"]').value !== '' || document.querySelector('[name="datetime_offz"]').value !== '') {
                    _this.isLoading = true;
                    axios.post(`${_this.api_url}booking`, {
                        vehicle: _this.formData.vehicle,
                        number_of_vehicles: _this.formData.number_of_vehicles,
                        pick_up_location: _this.formData.pick_up_location,
                        drop_off_location: _this.formData.drop_off_location,
                        pick_up: document.querySelector('[name="datetime_pick"]').value,
                        drop_off: document.querySelector('[name="datetime_offz"]').value,
                        name: _this.formData.name,
                        email: _this.formData.email,
                        phone: _this.formData.phone
                    })
                    .then(function(response) {
                        // console.log(response)
                        // console.log('Form Data below')
                        // console.log(_this.formData)
                        _this.formData.vehicle = '',
                        _this.formData.number_of_vehicles = '';
                        document.querySelector('[name="datetime_pick"]').value = '';
                        document.querySelector('[name="datetime_offz"]').value = '';
                        document.querySelector('[name="pickup"]').value = '';
                        document.querySelector('[name="dropoff"]').value = '';
                        _this.formData.pick_up_location = '';
                        _this.formData.drop_off_location = '';
                        _this.formData.name = '';
                        _this.formData.email = '';
                        _this.formData.phone = '';
                        _this.isLoading = false;

                        Swal.fire({
                            icon: 'success',
                            title: 'Mail sent successfully',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    })
                    .catch(function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error sending mail. Check fields and try again',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    })
                    .then(function() {
                        _this.isLoading = false;
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ensure all fields are set',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }    
            }
        },
    })
    const app2 = new Vue({
        el: '#newsVue',
        data() {
            return {
                api_url: 'http://127.0.0.1:8000/api/',
                isLoading: false
            }
        },
        methods: {
            subscribe() {
                let _this = this;
                if (document.querySelector('[name="newsletter"]').value !== '') {
                    _this.isLoading = true;
                    axios.post(`${_this.api_url}newsletter`, {
                        email: document.querySelector('[name="newsletter"]').value
                    })
                    .then(function(response) {
                        // console.log(response)
                        // console.log('Form Data below')
                        // console.log(_this.formData)
                        document.querySelector('[name="newsletter"]').value = '',
                        _this.isLoading = false;

                        Swal.fire({
                            icon: 'success',
                            title: 'Subscription successful',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    })
                    .catch(function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error subscribing. Ensure you enter a valid email address',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    })
                    .then(function() {
                        _this.isLoading = false;
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Please enter an email address',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            }
        }
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
</html>