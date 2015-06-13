@extends('layouts.base')
@section('meta')
<meta name="description" content="Teck Master services page. Includes description of the services provided by Teck Master Fabricators.">
<meta name="keywords" content="Welding, Sevices, Fabrication, Stainless Steel, Airdrie">
<meta name="author" content="Teck Master Fabricators Ltd">
@stop

@section('title')
Services | Teck Master Fabricators
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

<div class="container services-container">

	<div class="row ">

		<div class="col-md-12 service-header"> 
			
			<h1 class="text-center">The Best Service - For the Best Price </h1>
			<h2 class="text-center">Our Services are Unmatched in Quality! </h2>
				
		</div>
	 </div>

 </div>

 <div class="container service-content"> 
	<div class="row"> 
		<div class="col-md-12">
		<div class="col-md-6"><p>Teck Master Fabricators specializes in welding specialty metals, Stainless Steel, Mild Steel, Aluminum, Forgings, Castings, Titanium, Resist alloys and Magnesium. We can service needs such as breaking and shearing, Laser cutting, etching, rolling and bending. Teck Master can look after needs such as sand blasting, primeing and powder coating.</p></div>
		<div class="col-md-6"><p>We have years of experience in fabrication of truck boxes, jocky boxes, truck mount fuel storage tanks, Office and Home furnishings. Primarily we tend to residential railing, staircases, spiral stairs. We can also fabricate and install glass railings and stainless steel stair and grab rails. Teck Master Fabricators can also tend to on site welding and fitting.</p> </div>
		</div>
		<div class="col-md-12"><img src="images/service.png" title="Services icon" alt="red, white and grey icon depicting two men shaking hands." class="img-responsive">

				<h3>We can look after your needs from concept to design, to Cadd drawing and finally to finished product. </h3>

		 </div>

	</div>



</div>


<div class=" footer col-md-12 text-center footer-container"><p> &copy;Teck Master Fabricators Ltd - 2015</p></div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64065342-1', 'auto');
  ga('send', 'pageview');

</script>
@stop