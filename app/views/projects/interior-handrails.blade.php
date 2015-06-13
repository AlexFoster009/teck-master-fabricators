@extends('layouts.base')
@section('meta')
<meta name="description" content="Projects landing page, includes slider of interior railings projects as well as links to other projects contained in this section.">
<meta name="keywords" content="Welding, Railings, Interior Railings, Stainless Steel, Airdrie">
<meta name="author" content="Teck Master Fabricators Ltd">
@stop


@section('title')
Projects - Interior Handrails | Teck Master Fabricators
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

<div class="container projects-container">

	<div class="row"> 
	
	<div class="col-md-12  projects-intro">
		
		
	<h1 class="text-center">Check Out Some of our Recent Projects</h1>
		
		<video id="video" width="400px" controls="controls" >
			<source src="images/bridge.ogv" type="video/ogg">
			<source src="images/bridge.mp4" type="video/mp4">
			<source src="images/bridge.webm" type="video/webm">

		 </video>

		<h2 class="text-center">Our Master Pieces are just a click away! </h2>


	</div>

 </div>

</div>

<div class="container">

<div class="slider-container col-md-12">	
	<div class="galleria">
    <img src="images/interior-rails/intrails-1.jpg" title="First image within the Interior Handrails project slider." alt="This image shows a wooden staircase fitted with thick steel handrails">
    <img src="images/interior-rails/intrails-2.jpg" title="Second image within the Interior Handrails project slider." alt="This image shows grey handrails fitted to act as handrails for a staircase.">
    <img src="images/interior-rails/intrails-3.jpg" title="Third image within the Interior Handrails project slider." alt="This image shows beautiful satin steel handrails along a wooden staircase.">
    <img src="images/interior-rails/intrails-4.jpg" title="Fourth image within the Interior Handrails project slider." alt="This image shows a staircase with steel handrails with a piece of hardwood fitted on top.">
    <img src="images/interior-rails/intrails-5.jpg" title="Fifth image within the Interior Handrails project slider." alt="This image shows elegant black steel handrails along a staircase.">
    <img src="images/interior-rails/intrails-6.jpg" title="Sixth image within the Interior Handrails project slider." alt="This image shows elegant black steel rails acting as guard rails along a staircase.">
    <img src="images/interior-rails/intrails-7.jpg" title="Seventh image within the Interior Handrails project slider." alt="This image shows a wooden staircase with steel and wood handrails along side of the structure.">
    <img src="images/interior-rails/intrails-8.jpg" title="Eighth image within the Interior Handrails project slider." alt="this image shows decorative wood and steel rails along a staircase.">
    <img src="images/interior-rails/intrails-9.jpg" title="Nineth image within the Interior Handrails project slider." alt="This image shows a steel rail of a complex design at the base of a carpeted staircase.">
   

</div>
</div>
 </div>

<div class=" container">


		
		
	<div class="links-container col-md-12">
			
			<a href="projects" class="  col-md-4 col-xs-12 text-center">Exterior Handrails </a>
			<a href="interior-handrails" class=" active-link  col-md-4 col-xs-12 text-center">Interior Handrails</a>
			<a href="glass-handrails" class="col-md-4   col-xs-12 text-center">Glass Handrails </a>

		</div>
			<div class="links-container col-md-12">
			
			<a href="staircases" class="col-md-4 col-xs-12 text-center">Staircases </a>
			<a href="countertops" class="col-md-4 col-xs-12 text-center">Countertops </a>
			<a href="entry-gates" class="col-md-4 col-xs-12 text-center">Entry gates</a>

		</div>


			<div class="links-container col-md-12">
			
			<a href="custom-fabrication" class="col-md-6 col-xs-12 text-center">Custom Fabrication </a>
			<a href="furniture" class="col-md-6 col-xs-12 text-center"> Furniture / Accesories</a>
			

		</div>



 </div>




	<div class=" footer col-md-12 text-center footer-container"><p> &copy;Teck Master Fabricators Ltd - 2015</p></div>

<script type="text/javascript">


   Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.min.js');
            Galleria.run('.galleria', {
    transition: 'fade',
    imageCrop: true,
    autoplay: 5000,
    transitionSpeed: 2000
});

  $(document).ready(function (){
       $('html, body').animate({
    scrollTop: $(".galleria").offset().top
}, 1000);
        });

   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64065342-1', 'auto');
  ga('send', 'pageview');
 </script>


@stop