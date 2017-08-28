<!DOCTYPE html>
<html>
<title>Maps</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button w3-hide-small w3-margin-top"><img src="{{ URL::asset('img/logodsc.png') }}" width="80px"></a>
    <a href="/hidepok/event" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">EVENT</a>
    <a href="/hidepok/blog" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">BLOG</a>
    <a href="/hidepok/maps" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">MAPS</a>
    <a href="/" class="w3-right w3-bar-item w3-button w3-hide-small w3-margin-top">HOME</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
  <a href="/" class="w3-bar-item w3-button" onclick="toggleFunction()">BERANDA</a>
    <a href="/hidepok/maps" class="w3-bar-item w3-button" onclick="toggleFunction()">MAPS</a>
    <a href="/hidepok/blog" class="w3-bar-item w3-button" onclick="toggleFunction()">BLOG</a>
    <a href="/hidepok/event" class="w3-bar-item w3-button" onclick="toggleFunction()">EVENT</a>
  </div>
</div>

<div class="w3-container">
  <h2></h2>
  <p></p>

  <div class="w3-dropdown-hover w3-right" style="margin-top: 10%">
    <button class="w3-button w3-black">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>

  <div class="w3-clear"></div>

  <p>N</p>
</div>

<div id="googleMap" style="width:100%;height:2000px; margin-top: 5%">
<div class="w3-container">
  <h2>Dropdown Button</h2>
  <p>Move the mouse over the button to open the dropdown content.</p>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-black">Hover Over Me!</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>
</div>
</div>




<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AAIzaSyAXQS0NmTHro7BGSmjVOlfHwFqOazQzRDc&callback=myMap"></script>

<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>



</body>
</html>
