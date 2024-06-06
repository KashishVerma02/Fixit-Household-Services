<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <title>Add custom markers in Mapbox GL JS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='mapbox-gl.js'></script>
    <link href='mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>  
</head>
<body> 
     
<div id='map'></div>

<script>

mapboxgl.accessToken = 'pk.eyJ1IjoicGxheXNhZmVjbHViIiwiYSI6ImNsYmJpbWYwbDBqMGQzbnBiZm80MmhwemMifQ.1HYX46cjMHrsqWvMxC4oWQ';
 
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v9',
  center: [72.9959,21.7051],
  zoom: 6.3
});
   
 const marker = new mapboxgl.Marker({color: "red",anchor:"right"})
.setLngLat([72.9959,21.7051])
.addTo(map);
 
const popup = new mapboxgl.Popup({ closeOnClick: false,anchor:"left" })
.setLngLat([72.9959,21.7051])
.setHTML('<h1>Backyard Barber!</h1>')
.addTo(map);
 
</script>

</body>
</html>