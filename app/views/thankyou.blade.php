@extends('layouts.base')


@section('title')
Thank you | Teck Master Fabricators
@stop


@section('meta')
<meta name="description" content="Thank you page after using Teck Masters Contact form.">
<meta name="keywords" content="Welding, Railings, Custom Fabrication, Stainless Steel, Airdrie">
<meta name="author" content="Teck Master Fabricators Ltd">
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


<div class="container"> 


	<div class="content ">
		
		<div class="introduction row">
		<span><img src="images/teckmaster-logo.png" title="Image of Teck Master Fabricators company logo" alt="red, white and grey 'Teck Master Fabricators' company logo" class="img-responsive " width="550px" ></span>
		
	</div>

	

	<div class="text-center des-text">
	<h1>Thank you for your Submission! </h1>
				<p>We will contact you shortly.</p>

		<button class=" btn btn-lg btn-danger learn-more" onclick="window.location.href='home'">Back Home </button>
		 </div>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64065342-1', 'auto');
  ga('send', 'pageview');

</script>
@stop