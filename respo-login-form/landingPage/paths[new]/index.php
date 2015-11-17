
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
.gobutton {
  width: 100px;
  height: 40px;
  background-color: #f07a08;
  moz-border-radius: 15px;
  -webkit-border-radius: 15px;
  border: 5px solid #251302;
  padding: 5px;
  
}
</style>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry" type="text/javascript"></script>
</head>
<body >
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
                      <li ><a href="http://localhost/respo-login-form/landingPage/custom-polygon%5Bnew%5D/">Custom Polygon Drawer</a></li>
                      <li><a href="http://localhost/respo-login-form/landingPage/MapSeries/">People Finder</a></li>
                      <li id="active"><a href="#">Path Drawer</a></li>						<li><a href="http://localhost/respo-login-form/landingPage/networkLines[new]/">Underlying Cables</a></li>
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
			<div class="style2" >
			  <div align="left">Start: 
                <select class="style2" id="start" style = "color: #0000FF">
                  <option>Gate</option>
                  <option>DCS</option>
                  <option>Science Dean Off.</option>
                </select>
			  </div>
		  </div>

  <div class="style2">End: 
    <select class="style2" id="end">
      <option>Gate</option>
      <option>DCS</option>
      <option>Dean</option>
    </select>
  </div>

  <input type="button" class="style2" onClick="drawDirections();" value="Click to Draw" />
   
<div id="results"></div>
  <script type="text/javascript"> 
    var mapOptions = { 
      //mapTypeId: google.maps.MapTypeId.TERRAIN,
      center: new google.maps.LatLng(5.938765, 80.576010),
      zoom: 18
    };

    var map = new google.maps.Map(document.getElementById("map"), 
                                  mapOptions);

    // Predefine all the paths
    var paths = [];                         

    paths['1_to_2'] = new google.maps.Polyline({
      path: [
      <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM path WHERE path_from='Gate' AND path_to='DCS' and track_no=1 ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
      ], 
      strokeColor: '#FF0000'
    });
    /*second path for Gate 2 Dcs*/
    paths['1_to_2'] = new google.maps.Polyline({
      path: [
      <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query2 = mysqli_query($mysqli,"SELECT lat, lng FROM path WHERE path_from='Gate' AND path_to='DCS' and track_no=2 ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query2)){
            $lat3 = $row['lat'];
            $lon4 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat3.', '.$lon4.'),';
        }
        ?>
      ], 
      strokeColor: '#FF00FF'
    });
    paths['1_to_3'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM path WHERE  path_from='Gate' AND path_to='Dean' and track_no=1 ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000'
    });

    paths['2_to_3'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM path WHERE  path_from='Gate' AND path_to='Dean' and track_no=1 ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000'
    });

    function drawDirections() {
      var start = 1 + document.getElementById('start').selectedIndex;
      var end = 1 + document.getElementById('end').selectedIndex;
      var i;
      

      if (start === end) {
        alert('Please choose different places');
      }
      else {
        // Hide all polylines
        for (i in paths) {
          paths[i].setOptions({ map: null });
        }

        // Show the route
        if (typeof paths['' + start + '_to_' + end] !== 'undefined') {
          paths['' + start + '_to_' + end].setOptions({ map: map });
          var lengthInMeters = google.maps.geometry.spherical.computeLength(paths['' + end + '_to_' + start].getPath());
             //alert("polyline is "+lengthInMeters+" long");            
            document.getElementById('results').innerHTML += "Polyline is "+lengthInMeters+" meters long<br>";

        }
        else if (typeof paths['' + end + '_to_' + start] !== 'undefined') {
          paths['' + end + '_to_' + start].setOptions({ map: map });
          var lengthInMeters = google.maps.geometry.spherical.computeLength(paths['' + end + '_to_' + start].getPath());
             //alert("polyline is "+lengthInMeters+" long");            
            document.getElementById('results').innerHTML += "Polyline is "+lengthInMeters+" meters long<br>";
        }
      }
    }
  </script> 
      </section>         
        <section>
          <h2 align="center">Path Drawer</h2>
        	<h2 class="style2">You will see different available paths from one source to other destination.</h2>
           
   	  
      </section>
    </div>

<footer>
    <p>
    <div>
        <div align="center"><span class="readMore">Designed by <a href="www.fypgroup5.com" class="style1">FYPGROUP5</a></span>
      </div>
        </div>
            </p>
  </footer>
</div>
</body>
</html>
