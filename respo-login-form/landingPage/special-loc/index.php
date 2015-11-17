
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      adminbuilding: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/adminbuilding.png'
      },
      department: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/department.png'
      },
      cafe: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/cafe.png'
      },
      lectheatre: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/lec.png'
      },
      toilet: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/toilet.png'
      },
      lab: {
        icon: 'http://localhost/respo-login-form/landingPage/myicons/lab.png'
      },
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(5.937466, 80.575983),
        zoom: 17,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml2.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

</script>
</head>
<body onload="load()">
<div class="wrapper">
	<header>
    	<div class="logo">
    	 
    	</div>
        <nav>
            
          <div align="left">
                    <ul id="navlist">
                      <li><a href="http://localhost/respo-login-form/landingPage/index.php">Home</a></li>
                      <li ><a href="http://localhost/respo-login-form/landingPage/custom-marker%5Bnew%5D/">Custom Locations</a></li>
                      <li id="active"><a href="#">Special Locations</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/ruhun-ground[new]/">Ground Plan</a></li>
                      <li ><a href="http://localhost/respo-login-form/landingPage/custom-polygon%5Bnew%5D/">Custom Polygon Drawer</a></li>
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
        	<div id="map"></div>
      </section>         
        <section>
          <h2>Special Locations</h2>
        	<h2 class="style2">This shows a collections of venues inside university with differentiable markers.</h2>
   	  </br>
      
      </section>
    </div>

<footer>
        <p>
            Copyright &copy; <a href="www.fypgroup5.com">FYPGROUP5</a>. All rights reserved. Designed by <span class="style1">FYPGROUP5</span></p>
  </footer>
</div>
</body>
</html>
