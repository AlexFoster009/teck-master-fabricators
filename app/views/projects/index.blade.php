@extends('layouts.base')
@section('meta')
<meta name="description" content="Projects landing page, includes slider of exterior railings projects as well as links to other projects contained in this section.">
<meta name="keywords" content="Welding, Railings, Exterior Railings, Stainless Steel, Airdrie">
<meta name="author" content="Teck Master Fabricators Ltd">
@stop


@section('title')
Projects | Teck Master Fabricators
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
    <img src="images/exterior-rails/extrails-1.jpg" title="First image within the Exterior Handrail slider." alt="This image displays an exterior railing with sharp points inserted into a slightly arched brick wall.">
     <img src="images/exterior-rails/extrails-2.jpg" title="Second image within the Exterior Handrail slider." alt="This image dispalys a high deck containing steel exterior railings and brick supports.">
    <img src="images/exterior-rails/extrails-3.jpg" title="Third image within the Exterior Handrail slider." alt="This image shows a close up of a steel railing fitted inbetween two brick pillars.">
    <img src="images/exterior-rails/extrails-4.jpg" title="Fourth image within the Exterior Handrail slider." alt="This image shows a brick supported balcony containing slightly curved steel railings fitted across the entirety of the deck.">
    <img src="images/exterior-rails/extrails-5.jpg" title="Fifth image within the Exterior Handrail slider." alt="This images shows a steel railing with a slightly bent design fitted infront of a window.">
    <img src="images/exterior-rails/extrails-6.jpg" title="Sixth image within the Exterior Handrail slider." alt="This images shows a ground level porch with steel railings fitted between two brick pillars that span accross the whole structure.">
    <img src="images/exterior-rails/extrails-7.jpg" title="Seventh image within the Exterior Handrail slider." alt="This image shows a steel gate as well as steel railings that are working as handrails for a set of stone stairs.">
    <img src="images/exterior-rails/extrails-8.jpg" title="Eighth image within the Exterior Handrail slider." alt="This image shows steel railings fittend between brick pillars. they have a slightly curved design and span accross the whole structure.">
    <img src="images/exterior-rails/extrails-9.jpg" title="nineth image within the Exterior Handrail slider." alt="This image shows a small steel railing spanning accross a small brick wall.">
    <img src="images/exterior-rails/extrails-10.jpg" title="Tenth image within the Exterior Handrail slider." alt="This image shows a deck with steel railings of an elegant design fitted between two white pillars.">
    <img src="images/exterior-rails/extrails-11.jpg" title="eleventh image within the Exterior Handrail slider." alt="this image shows a steel railing with an elegant design working as handrails for a staircase.">
    <img src="images/exterior-rails/extrails-12.jpg" title="Twelfth image within the Exterior Handrail slider." alt="This image shows a decorative porch fixture fitted between two pillars.">
    <img src="images/exterior-rails/extrails-13.jpg" title="Thirteenth image within the Exterior Handrail slider." alt="this image shows decorztive steel rails spannign accoss the perimeter of a deck.">
    <img src="images/exterior-rails/extrails-14.jpg" title="Fourteenth image within the Exterior Handrail slider." alt="This image displays two sturdy steel hand rails along side a set of stairs.">
    <img src="images/exterior-rails/extrails-15.jpg" title="Fifthteeth image within the Exterior Handrail slider." alt="This image shows a single steel handrail along side a set of stairs.">
    <img src="images/exterior-rails/extrails-16.jpg" title="sixteenth image within the Exterior Handrail slider." alt=" This image shows a steel hand rail beside a set of stairs mounted onto a brick wall.">
    <img src="images/exterior-rails/extrails-17.jpg" title="Seventeenth image within the Exterior Handrail slider." alt="This image shows decorative steel enclosure for a garden. Mounted on top of a brick foundation.">
    <img src="images/exterior-rails/extrails-18.jpg" title="Eighteenth image within the Exterior Handrail slider." alt="This image shows decorative 'Greyish' steel railings with a stylish design in the center spanning accross the perimeter of a deck.">
    <img src="images/exterior-rails/extrails-19.jpg" title="Nineteenth image within the Exterior Handrail slider." alt="This image shows a steel staircase leading up to a porch as well as steelrailings that span accross the decks perimeter.">
    <img src="images/exterior-rails/extrails-20.jpg" title="Twentieth image within the Exterior Handrail slider." alt="This image shows a deck lined in decorative steel railings as well as a wooden staircase with stel handrails.">

</div>
</div>
 </div>

<div class=" container">


		
	<div class="links-container col-md-12">
			
			<a href="projects" class=" active-link col-md-4 col-xs-12 text-center">Exterior Handrails </a>
			<a href="interior-handrails" class="  col-md-4 col-xs-12 text-center">Interior Handrails</a>
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