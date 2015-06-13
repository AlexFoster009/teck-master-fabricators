@extends('layouts.base')
@section('meta')
<meta name="description" content="Glass Handrails landing page, includes slider of glass handrail projects as well as links to other projects contained in this section.">
<meta name="keywords" content="Welding, Handrails, Glass Handrails, Glass, Airdrie">
<meta name="author" content="Teck Master Fabricators Ltd">
@stop


@section('title')
Projects - Glass Handrails | Teck Master Fabricators
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
    <img src="images/glass-rails/glassrails-1.jpg" title="First image within the Glass Handrails projects slider." alt="This image shows large panes of glass fitted between steel pillars spanning accross the perimeter of an outdoor porch.">
    <img src="images/glass-rails/glassrails-2.jpg" title="Second image within the Glass Handrails projects slider." alt="This image shows stainless steel handrails with glass fitted inside the space between the rails along side a staircase.">
    <img src="images/glass-rails/glassrails-3.jpg" title="Third image within the Glass Handrails projects slider." alt="This image shows stainless steel bars fitted with large panes of glass on top of a staircase.">
    <img src="images/glass-rails/glassrails-4.jpg" title="Fourth image within the Glass Handrails projects slider." alt="This image shows a large balcony with decorative steel bars with large panes of glass fitted between them.">
    <img src="images/glass-rails/glassrails-5.jpg" title="Fifth image within the Glass Handrails projects slider." alt="This image shows a small deck with stainless steel support fitted with large panes of glass.">
    <img src="images/glass-rails/glassrails-6.jpg" title="Sixth image within the Glass Handrails projects slider." alt="This image shows a modern style glass railing with a steel handrail along side a staircase.">
    <img src="images/glass-rails/glassrails-7.jpg" title="Seventh image within the Glass Handrails projects slider." alt="This image shows a modern glass railing with a steel handrail along side a staircase.">
    <img src="images/glass-rails/glassrails-8.jpg" title="Eighth image within the Glass Handrails projects slider." alt="This image shows a staircase accompanied by a glass railing with thin steel supports.">
   

</div>
</div>
 </div>

<div class=" container">


		
		<div class="links-container col-md-12">
			
			<a href="projects" class=" col-md-4 col-xs-12 text-center">Exterior Handrails </a>
			<a href="interior-handrails" class="  col-md-4 col-xs-12 text-center">Interior Handrails</a>
			<a href="glass-handrails" class="col-md-4  active-link col-xs-12 text-center">Glass Handrails </a>

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