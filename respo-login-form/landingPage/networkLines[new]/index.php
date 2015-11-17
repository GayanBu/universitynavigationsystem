
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
.style3 {color: #FF00FF}
.style4 {color: #0000CC}
.style5 {font-family: "Courier New", Courier, monospace}
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
			  <div align="left">Line Type: 
                <select class="style2" id="start" style = "color: #0000FF">
                  <option>net[CS]</option>
                  <option>elec[Zoo/Botany]</option>
                  <option>elec[Dean]</option>
                  <option>elec[Physics]</option>
                  <option>elec[Chemistry]</option>
                  <option>water[CS/Maths]</option>
                  <option>water[Zoo]</option>
                  <option>water[Physics]</option>
                  <option>water[Chemistry]</option>
                </select>
			  </div>
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
     var lineSymbol = {
    path: 'M 0,-1 0,1',
    strokeOpacity: 1,
    scale: 4
  };

    // Predefine all the paths
    var paths = [];                         

    paths['net'] = new google.maps.Polyline({
      path: [
      <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='net' ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
      ], 
      strokeColor: '#FF00FF'
    });


   /*ZOO/BOTANY ELEC POLYLINE*/
    paths['elec[Zoo/Botany]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='elec' AND line_name='zoo/bot elec way' ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000'

    });

    /*DEAN ELEC POLYLINE*/
    paths['elec[Dean]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='elec' AND line_name='dean office elec way' ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,

    });

    /*PHYSICS ELEC POLYLINE*/
    paths['elec[Physics]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='elec' AND line_name='physics elec way' ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,

    });

    /*CHEMISTRY ELEC POLYLINE*/
    paths['elec[Chemistry]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='elec' AND line_name='chem elec way' ORDER BY point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> 
       ], strokeColor: '#FF0000',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,
});
    /* CS/MATHS WATER POLYLINE*/
    
    paths['water[CS/Maths]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='water' AND line_name='cs/maths water way' ORDER BY  point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> /*
           new google.maps.LatLng(47.690, -122.310),
           new google.maps.LatLng(47.690, -122.270)*/
       ], strokeColor: '#0000cc',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,
    });

    /* ZOO WATER POLYLINE*/
    
    paths['water[Zoo]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='water' AND line_name='zoo water way' ORDER BY  point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> /*
           new google.maps.LatLng(47.690, -122.310),
           new google.maps.LatLng(47.690, -122.270)*/
       ], strokeColor: '#0000cc',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,
    });

    /* PHYSICS WATER POLYLINE*/
    
    paths['water[Physics]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='water' AND line_name='physics water way' ORDER BY  point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> /*
           new google.maps.LatLng(47.690, -122.310),
           new google.maps.LatLng(47.690, -122.270)*/
       ], strokeColor: '#0000cc',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,
    });

/* CHEMISTRY WATER POLYLINE*/
    
    paths['water[Chemistry]'] = new google.maps.Polyline({
       path: [
       <?php 
        include('phpsqlajax_dbinfo.php');
        $mysqli = mysqli_connect($dbhost, $username, $password, $database);
        if (mysqli_connect_errno()) 
        {
            header('HTTP/1.1 500 Error: Could not connect to db!'); 
            exit();
        }   
        $query1 = mysqli_query($mysqli,"SELECT lat, lng FROM line WHERE type='water' AND line_name='chem water way' ORDER BY  point_no ASC");
        while($row = mysqli_fetch_assoc($query1)){
            $lat1 = $row['lat'];
            $lon1 = $row['lng'];
            echo 'new google.maps.LatLng('.$lat1.', '.$lon1.'),';
        }
        ?> /*
           new google.maps.LatLng(47.690, -122.310),
           new google.maps.LatLng(47.690, -122.270)*/
       ], strokeColor: '#0000cc',
       icons: [{
      icon: lineSymbol,
      offset: '0',
      repeat: '20px'
    }],
    strokeOpacity: 0,
    });
    function drawDirections() {
      var line_no = 1 + document.getElementById('start').selectedIndex;
      if(line_no==1){
	  	line_type="net";
	  }
	  else if(line_no==2){
	  	line_type="elec[Zoo/Botany]";
	  }
	  else if(line_no==3){
	  	line_type="elec[Dean]";
	  }
    else if(line_no==4){
      line_type="elec[Physics]";
    }
    else if(line_no==5){
      line_type="elec[Chemistry]";
    }
    else if(line_no==6){
      line_type="water[CS/Maths]";
    }
    else if(line_no==7){
      line_type="water[Zoo]";
    }
    else if(line_no==8){
      line_type="water[Physics]";
    }
    else if(line_no==9){
      line_type="water[Chemistry]";
    }
   
      var i;   
        // Hide all polylines
        for (i in paths) {
          paths[i].setOptions({ map: null });
        }

        // Show the route
        if (typeof paths[line_type] !== 'undefined') {
          paths[line_type].setOptions({ map: map });
          
             //alert("polyline is "+lengthInMeters+" long");            
                   }
        
      }
    
  </script> 
      </section>         
        <section>
          <h2 align="center">Underlying Cables</h2>
        	<h2 align="center" class="style2">This shows ground plan of the university with underlying network,network,water and electric cables.</h2>
            <i>            </i>
          <ul>
            <li>
                <div align="center" class="style5">                  
                  <div align="justify"><i>Paths which are not sure are plotted in dashed lines</i></div>
                </div>
            </li>
      <li class="style5">
          <div align="justify"><i>Network Lines are in <span class="style3">Purple</span> Color</i></div>
      </li>
      <li class="style5">
          <div align="justify"><i>Water Lines are in <span class="style4">Blue</span> Color</i></div>
      </li>
        <li>
          <div align="justify"><span class="style5"><i>Electric Lines are in <span class="style1">Red</span> Color</i><i></i></span></div>
        </li>
            </ul>
      <i></i>      </section>
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
