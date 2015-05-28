<!DOCTYPE html>
<html lang="en">
<head>
<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/styles.css" >
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<title>@yield('title')</title>
	<script type="text/javascript">
   function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta charset="UTF-8">
	
</head>
<body>

	@yield('content')


	

	
</body>
