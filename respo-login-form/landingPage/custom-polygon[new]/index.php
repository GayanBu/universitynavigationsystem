
<!doctype html>
<!--
Design by Free Responsive Templates
http://www.free-responsive-templates.com
Released for free under a Creative Commons Attribution 3.0 Unported License (CC BY 3.0) 
-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Navigational System</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {
	font-size: 18px;
	color: #CC3300;
}
-->
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  var poly, map;
  var markers = [];
  var path = new google.maps.MVCArray;

  function initialize() {
    var uluru = new google.maps.LatLng(5.938765, 80.576010);

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 17,
      center: uluru,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    poly = new google.maps.Polygon({
      strokeWeight: 3,
      fillColor: '#5555FF'
    });
    poly.setMap(map);
    poly.setPaths(new google.maps.MVCArray([path]));

    google.maps.event.addListener(map, 'click', addPoint);
  }

  function addPoint(event) {
    path.insertAt(path.length, event.latLng);

    var marker = new google.maps.Marker({
      position: event.latLng,
      map: map,
      draggable: true
    });
    markers.push(marker);
    marker.setTitle("#" + path.length);

    google.maps.event.addListener(marker, 'click', function() {
      marker.setMap(null);
      for (var i = 0, I = markers.length; i < I && markers[i] != marker; ++i);
      markers.splice(i, 1);
      path.removeAt(i);
      }
    );

    google.maps.event.addListener(marker, 'dragend', function() {
      for (var i = 0, I = markers.length; i < I && markers[i] != marker; ++i);
      path.setAt(i, marker.getPosition());
      }
    );
  }
</script>
</head>
<body onLoad="initialize()">
<div class="wrapper">
	<header>
    	<div class="logo">
    	 
    	</div>
        <nav>
            
          <div align="left">
                  <ul id="navlist">
                      
                      <li><a href="http://localhost/respo-login-form/landingPage/index.php">Home</a></li>
                      <li ><a href="http://localhost/respo-login-form/landingPage/custom-marker%5Bnew%5D/">Custom Locations</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/special-loc/">Special Locations</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/ruhun-ground[new]/">Ground Plan</a></li>
                      <li id="active"><a href="#">Custom Polygon Drawer</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/MapSeries/">People Finder</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/paths[new]/">Path Drawer</a></li>						<li><a href="http://localhost/respo-login-form/landingPage/networkLines[new]/">Underlying Cables</a></li>
                  <li><a href="http://localhost/respo-login-form/landingPage/labFinder/">Lab Finder</a></li>
                  <li><a href="http://localhost/respo-login-form/landingPage/Storytelling-MapTour/">All Pic Collector</a></li>
                  
                    </ul>
          </div>
        </nav>
      <div class="clearfloat"></div>
</header>
    <div class="bodyContainer">
    	<section>
        	<div id="map">
</div>
      </section>         
        <section>
          <h2>Custom Polygon</h2>
        	<h2 class="style2">This allows user to draw custom polygons to visualize specific area.</h2>
            <i>
            <ul>
    <li>Click on the map to insert a vertex.</li>
    <li>Click on a vertex to remove it.</li>
    <li>Drag a vertex to move it.</li>
  </ul>
            </i>
   	  
      </section>
    </div>

<footer>
        <p>
            Copyright &copy; <a href="http://www.fypgroup5.com">FYPGROUP5</a>. All rights reserved. Designed by <span class="style1">FYPGROUP5</span></p>
  </footer>
</div>
</body>
</html>
