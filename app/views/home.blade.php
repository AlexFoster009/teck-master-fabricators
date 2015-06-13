@extends('layouts.base')


@section('meta')
<meta name="description" content="Teck Master Fabricators Home page. Includes description of company and its services. From here you can navigate to other pages within the website.">
<meta name="keywords" content="Teck Master, Custom Fabrication, welding, Airdrie, ">
<meta name="author" content="Teck Master Fabricators Ltd">
@stop


@section('title')
Home | Teck Master Fabricators
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
	<h1>Welcome to Teck Master Fabricators </h1>
				<p> Teck Master is a new vibrant company. that specializes in welding near all metals and custom fabrication. The owner Ben Nadeau began the company in 2007, working from his garage doing overflow work for local welding shops and some residential projects like out door iron furniture, fire pits, house hold repairs. We have now become a small welding shop in the north end of Airdrie, AB. We still service residential customers as well as several high end home builders, Oilfield companies, Maintenance and Plumbing companies. Teck Master can look after needs such as sand blasting, primeing and powder coating. </p>

		<button class=" btn btn-lg btn-danger learn-more" onclick="window.location.href='services'">Learn More </button>
		 </div>
</div>
</div>

	<div class="container-fluid"> 
			<div class="row projects-teaser">
			<h2 class=" text-center header">Your Metal Fabricating Experts <br></h2>
				<div class="image-container"><img src="images/welder.png" title="Icon like Illustration of a man welding" alt="Circular red and yellow illustration of a man welding with a torch and mask" width="200px"></div>
						<div class=" col-xs-12 col-md-11 col-md-offset-1 inner-content"> 
								<div class="col-xs-12 col-md-4"><h2><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Custom Fabrications</h2> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a placerat tellus. Proin viverra justo sit amet felis scelerisque blandit. Vestibulum efficitur ultrices ultricies. Fusce vel mi eget lorem vestibulum rutrum. Etiam at mauris eget metus aliquam imperdiet vulputate ac ligula. Vivamus sodales arcu eget justo dapibus, quis suscipit neque posuere. Curabitur rutrum diam et ipsum tempus, nec ullamcorper risus malesuada. Aenean in sem vel felis egestas tempus. Nulla vel nulla odio. Ut facilisis nunc quis nisi commodo, nec semper libero sollicitudin. Aliquam rutrum aliquam orci, eget lacinia lectus. Nunc lorem sem, sagittis vitae iaculis imperdiet, iaculis sed sapien. </p>
		
								</div>
								<div class="col-xs-12 col-md-4"><h2><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Great Service </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a placerat tellus. Proin viverra justo sit amet felis scelerisque blandit. Vestibulum efficitur ultrices ultricies. Fusce vel mi eget lorem vestibulum rutrum. Etiam at mauris eget metus aliquam imperdiet vulputate ac ligula. Vivamus sodales arcu eget justo dapibus, quis suscipit neque posuere. Curabitur rutrum diam et ipsum tempus, nec ullamcorper risus malesuada. Aenean in sem vel felis egestas tempus. Nulla vel nulla odio. Ut facilisis nunc quis nisi commodo, nec semper libero sollicitudin. Aliquam rutrum aliquam orci, eget lacinia lectus. Nunc lorem sem, sagittis vitae iaculis imperdiet, iaculis sed sapien. </p>
								</div>
								<div class=" col-xs-12 col-md-4"><h2><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>Best Price</h2> 
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a placerat tellus. Proin viverra justo sit amet felis scelerisque blandit. Vestibulum efficitur ultrices ultricies. Fusce vel mi eget lorem vestibulum rutrum. Etiam at mauris eget metus aliquam imperdiet vulputate ac ligula. Vivamus sodales arcu eget justo dapibus, quis suscipit neque posuere. Curabitur rutrum diam et ipsum tempus, nec ullamcorper risus malesuada. Aenean in sem vel felis egestas tempus. Nulla vel nulla odio. Ut facilisis nunc quis nisi commodo, nec semper libero sollicitudin. Aliquam rutrum aliquam orci, eget lacinia lectus. Nunc lorem sem, sagittis vitae iaculis imperdiet, iaculis sed sapien. </p>

								</div>

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

