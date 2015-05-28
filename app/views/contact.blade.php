@extends('layouts.base')
@section('title')

Contact | Teck Master Fabricators
@stop




@section('content')

  <nav role="navigation" class="navbar menu">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::to('home') }}">Home</a></li>
                <li><a href="{{ URL::to('services') }}">Services</a></li>
                <li><a href="{{ URL::to('projects') }}">Projects</a></li>
                <li><a href="{{ URL::to('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav>

	<div class="container contact-container">
		<div class="row">
		<div class="col-md-12 contact-header">
			<h1 class="text-center">Contact Us Anytime </h1>
			<h2 class="text-center">We are always looking for a new challenge! </h2>

		 </div>

	</div>
	 </div>


	<div class="container">

	<div class="col-md-12 upper-contact-info">
<div id="map-canvas" class="pull-right"> </div>
	
	<div class="contact-info">
	<p><strong>Teck Master Fabricators</strong></p>
	<p>Bay 206, 118 East Lake Blvd NE</p>
	<p> Airdrie, AB T4A 2G2</p>
	<p>Phone: (403) 870-2173</p>
	<p>Fax: (403) 980-1517</p>
	
	</div>

	</div>
	</div>
	<div class="container"> 

	

	
	<div class="form-container">
		 
<form id="contact" method="post" class="form" role="form">
	<fieldset>
	<legend>Please fill in the fields below</legend>
	@if(Session::has('errors'))
	<div class="alert alert-warning">
	@foreach(Session::get('errors')->all() as $error_message)
		<p>{{ $error_message }}</p>
	@endforeach
	 </div>
	@endif

  <div class="row">
   <div class="col-xs-12 col-md-6 form-group inner-addon left-addon">
   <i class="glyphicon glyphicon-user"></i>
    <input class="form-control" id="name" name="name" placeholder="Name" type="text"autofocus="">
   </div>
    <div class="col-xs-12 col-md-6 form-group inner-addon left-addon">
    <i class="glyphicon glyphicon-plus"></i>
    <input class="form-control" id="lastname" name="lastname" placeholder="Last Name" type="text"autofocus="">
   </div>
   <div class="col-xs-12 col-md-6 form-group inner-addon left-addon">
   <i class="glyphicon glyphicon-phone"></i>
    <input class="form-control" id="phone" name="phone" placeholder="Phone Number" type="text">
   </div>
   <div class="col-xs-12 col-md-6 form-group inner-addon left-addon">
   <i class="glyphicon glyphicon-envelope"></i>
    <input class="form-control" id="email" name="email" placeholder="Email" type="text">
   </div>
  </div>
  <textarea class="form-control" id="message" name="msg" placeholder="Message" rows="5"></textarea>
  <br>
  <div class="row">
   <div class="col-xs-12 col-md-12 form-group">
    <button class="btn btn-primary pull-right" type="submit">Submit</button>
   </div>
  </div>
  </fieldset>
 </form>


</div>
	</div>




<div class=" footer col-md-12 text-center footer-container"><p> &copy;Teck Master Fabricators - 2015</p></div>


	<script type="text/javascript">
   function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(51.296399, -113.988308),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
@stop


