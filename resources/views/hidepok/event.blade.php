<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-------------------------------STYLE IMAGE HOVER -------------------------------------------------------------->
<style>

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.w3-display-container:hover .image {
  opacity: 0.3;
}

.w3-display-container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>


<!-------------------------------STYLE CENTER PAGINATION -------------------------------------------------------------->

<style>
.centerpagination {
    text-align: center;
}

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>


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


<!-------------------------------HEADER------------------------------------------------------------->

<!-- Header [Event Slide] -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px; margin-top: 5%" id="home">
  <!--Image slide 1 -->
  <div class="w3-display-container mySlides">
    <img src="img/blog/img_fjords.jpg" style="width:100%">
    <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
      Trolltunga, Norway
    </div>
  </div>

  <!-- image slide 2 -->
  <div class="w3-display-container mySlides">
    <img src="img/blog/img_lights.jpg" style="width:100%">
    <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
      Northern Lights, Norway
    </div>
  </div>

  <!-- image slide 3 -->
  <div class="w3-display-container mySlides">
    <img src="img/blog/img_mountains.jpg" style="width:100%">
    <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
      Beautiful Mountains
    </div>
  </div>

  <!-- image slide 4 -->
  <div class="w3-display-container mySlides">
    <img src="img/blog/img_forest.jpg" style="width:100%">
    <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
      The Rain Forest
    </div>
  </div>

  <!-- image slide 5 -->
  <div class="w3-display-container mySlides">
    <img src="img/blog/img_mountains.jpg" style="width:100%">
    <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
      Mountains!
    </div>
  </div>

  <!-- button previous & next -->
  <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</header>

<!-- end header -->

<!------------------------------------PAGE CONTENT------------------------------------------------------>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">


  <!--------------------- PROJECT SECTION ---------------------------------------->
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Events</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <div class="image">
        <img src="img/blog/house5.jpg" alt="House" style="width:100%">
        </div>
         <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <div class="image">
        <img src="img/blog/house2.jpg" alt="House" style="width:100%">
        </div>
         <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <div class="image">
        <img src="img/blog/house3.jpg" alt="House" style="width:100%">
        </div>
         <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <div class="image">
        <img src="img/blog/house4.jpg" alt="House" style="width:100%">
        </div>
         <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <div class="image">
        <img src="img/blog/house2.jpg" alt="House" style="width:99%">
        </div>
          <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <div class="image">
        <img src="img/blog/house5.jpg" alt="House" style="width:99%">
        </div>
          <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <div class="image">
        <img src="img/blog/house4.jpg" alt="House" style="width:99%">
        </div>
          <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topright w3-black w3-padding">17 AUGUST 2017 - 20 AUGUST 2017</div>
        <div class="image">
        <img src="img/blog/house3.jpg" alt="House" style="width:99%">
        </div>
          <div class="middle">
            <a href="#"  style="text-decoration:none"><div class="text">READ MORE</div></a>
          </div>
          <!--SHORT DESCRIPTION EVENT-->
          <h3>John Doe</h3>          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      </div>
    </div>
  </div>

  <!--------------------- PAGINATION ---------------------------------------->
  <div class="centerpagination w3-margin-bottom w3-margin-top">
  <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="#" class="active">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
  </div>
</div>


<!-- End page content -->
</div>



<!------------------------------------- FOOTER -------------------------------------------------------------->
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>


<!------------------------------- SCRIPT IMAGES SLIDE -------------------------------------------------------------->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


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
