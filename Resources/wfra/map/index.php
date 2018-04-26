<?php session_start();
  ?>

<!DOCTYPE html>
<html>
<head>
    <title>Word Financial Regulatory Agencies: Google Map</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >


    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />

    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>

    <script src="https://www.google.com/jsapi?key=ADDYourOwnKeyHere"> </script> 

<!--
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=YOUR_KEY&sensor=false&libraries=places"></script>

-->

<script> 
var ge;

google.load("earth", "1", {"other_params":"sensor=true_or_false"});
google.load("maps", "2");
function init() {
  google.earth.createInstance('map3d', initCallback, failureCallback);
}

function initCallback(instance){
  ge = instance;
  ge.getWindow().setVisibility(true);
  var la = ge.createLookAt('');
  la.set(47.616319, -122.349992, 25, ge.ALTITUDE_RELATIVE_TO_GROUND,
         -10, 60, 4000);
  ge.getView().setAbstractView(la);
  ge.getNavigationControl().setVisibility(ge.VISIBILITY_AUTO);
  ge.getLayerRoot().enableLayerById(ge.LAYER_BORDERS, true);  
  ge.getLayerRoot().enableLayerById(ge.LAYER_ROADS, true);
  GDownloadUrl("phpsqlajax_genxml3.php", function(data) {
  var xml = GXml.parse(data);
  var markers = xml.documentElement.getElementsByTagName("marker");
  for (var i = 0; i < markers.length; i++) {
    var name = markers[i].getAttribute("name");
    var lat = markers[i].getAttribute("lat");
    var lng = markers[i].getAttribute("lng");
    createPlacemark(name,address,type,lat,lng);  
    }
  });
}

function failureCallback(errorCode) {
}

function createPlacemark(name,lat,lng){
  var placemark = ge.createPlacemark('');
  placemark.setName(name);
  var point = ge.createPoint('');
  point.setLatitude(parseFloat(lat));
  point.setLongitude(parseFloat(lng));
  placemark.setGeometry(point);
  placemark.setStyleSelector(createIcon(type));
  ge.getFeatures().appendChild(placemark);
  if(type=="bar"){
    icon.setHref('http://maps.google.com/mapfiles/kml/pal2/icon27.png');
  } else{
    icon.setHref('http://maps.google.com/mapfiles/kml/pal2/icon63.png');
  }
  var style = ge.createStyle('');
  style.getIconStyle().setIcon(icon);
}
</script>
</head>

<body onload="init()">
    <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Word Financial Regulatory Agencies</a>
        </div>
        <!-- menu items -->
        <div class="collapse navbar-collapse" id="navbar1">


<?php if(isset($_SESSION['usr_id'])){ ?>


    <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../user_auth/logout.php">Log out</a></li>
                <li><a href="../user_auth/change_password.php">Change password</a></li>
            </ul>

            <?php 

        } 

        else

        {
        ?>


            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../user_auth/login.php">Login</a></li>
                <li><a href="../user_auth/register.php">Sign Up</a></li>
            </ul>

<?php } ?>


        </div>
    </div>
</nav>


     <div id="map3d" style="width: 500px; height: 500px"></div>



</body>
</html>