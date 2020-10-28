
<!doctype html>
<html lang="en">
		<head>
		  <title>Geolocation</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

		    <!-- Load my style -->
      <link rel="stylesheet" href="lib/css/style.css">
      <!-- Load Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.1/dist/esri-leaflet.js"
    integrity="sha512-q7X96AASUF0hol5Ih7AeZpRF6smJS55lcvy+GLWzJfZN+31/BQ8cgNx2FGF+IQSA4z2jHwB20vml+drmooqzzQ=="
    crossorigin=""></script>
   
  

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
    integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
    crossorigin=""></script>

	
</head>

	
<style>
 body { margin:0; padding:0; }
    #map { position: absolute; top:65px; bottom:0; right:0; left:0; }
 #basemaps-wrapper {
    position: absolute;
    top: 200px;
    right: 10px;
    z-index: 400;
    background: white;
    padding: 10px;
  }
  #basemaps {
    margin-bottom: 5px;
  }
	
</style>
<body>

<nav class="navbar navbar-inverse">

    <a class="navbar-brand" href="#"><select  id="data" class="browser-default custom-select custom-select-lg mb-3"> <option selected>select country</option></select></a>
    
    
        <a class="navbar-brand" href="#"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" id="submit" data-target="#myModal">Country Data</button></a>
        <input type="button" id="user" value="Click Me!">
    </nav>
    <div  id="map"  ></div>
    <div id="basemaps-wrapper" class="leaflet-bar">
      <select id="basemaps">
        <option value="Topographic">Topographic</option>
        <option value="Streets">Streets</option>
       
        <option value="Oceans">Oceans</option>
        <option value="Gray">Gray</option>
        <option value="Imagery">Imagery</option>
        <option value="ImageryClarity">Imagery (Clarity)</option>
        <option value="ImageryFirefly">Imagery (Firefly)</option>
        <option value="Physical">Physical</option>
      </select>
    
  </div>
  </div>
  <div id ="myModal"  class="modal">
		  <div class="modal-dialog">
		
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<h4 class="modal-title">Country Information</h4>
			  </div>
			  <div class="modal-body">
				<div class="row">
  <table>
	

<tr><td id="country_flag"><img src="" alt=""  class="center"></td> </tr>
<tr><td id="name"></td></tr>								
<tr><td id="capital"></td></tr>								 
<tr><td id="regio"></td></tr>						  
<tr><td id="population"></td></tr>								
<tr><td id="currencies"></td></tr>
<tr><td id="languages"></td></tr>						
<tr><td id="lat"></td></tr>									
<tr><td id="name1"></td></tr>									  
<tr><td id="country"></td></tr>								
<tr><td id="main"></td></tr>	
<tr><td id="temprature"></td></tr>								  
<tr><td id="min"></td></tr>								
<tr><td id="max"></td></tr>							  
<tr><td id="humidity"></td>	</tr>							 
<tr><td id="wind"></td>	</tr>							
<tr><td id="weather"></td></tr>								  
<tr><td id="pressure"></td></tr>								
								
</table>				
</div>
</div>
</div>
 </div>
  </div> 	
  
 

<script type="application/javascript" src="lib/js/fore.js"></script>
<script type="application/javascript" src="lib/js/script.js"></script>

<script type="application/javascript" src="lib/js/map.js"></script>
<script src="lib/js/app.js"></script>

</body>
</html>

 
  


