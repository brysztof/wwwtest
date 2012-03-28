<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  </head>
  <body onload="mapaStart()">
  

    
<div id="mapka" style="width: 700px; height: 500px; border: 1px solid black; background: gray;">
<!-- tu będzie mapa -->
</div>
    
<script type='text/javascript'>  
function mapaStart()   
{   
    var wspolrzedne = new google.maps.LatLng(53.41935400090768,14.58160400390625);
    var opcjeMapy = {
      zoom: 10,
      center: wspolrzedne,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var mapa = new google.maps.Map(document.getElementById("mapka"), opcjeMapy); 
}   
</script>    
    
    

  </body>
</html>