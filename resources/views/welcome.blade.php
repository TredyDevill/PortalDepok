<html>
<head>
    <meta content="text/html; charset=utf-8">
    <title>Hi-Depok</title>
    <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
    <script type="text/javascript" src="http://yandex.st/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="dist/UIPageScrolling.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('dist/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('dist/UIPageScrolling.css') }}" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $(function() {
            $(".main").UIPageScrolling({
                sectionsControl:".page-control__item",
                captureTouch: true
            });
        })
    </script>

    <style>
        @font-face {
        font-family: "Brandon_Grotesque_bold";
        src: url(assets/font/Brandon_blk.otf);}

        @font-face {
        font-family: "Brandon_Grotesque_reg";
        src: url(assets/font/Brandon_reg.otf);}

        .f_bold {
            font-family: "Brandon_Grotesque_bold";
        }

        .f_reg {
            font-family: "Brandon_Grotesque_reg";
        }
        body, html {
            height: 100%;
            line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
            background-image: url('img/bg3.png');
            min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
            background-image: url('img/bg2.jpg');
            min-height: 100%;
        }
        /* Third image (Contact) */
        .bgimg-3 {
            background-image: url("img/pattern.jpg");
            min-height: 400px;
        }
        .label_header {
          letter-spacing: 10px;
          font-size: 47px;
        }
        .flarge {
          font-size: 40pt;
          text-align: right;
        }
        .w3-bar {
            padding: 1em 2em;
        }
        .bottom-img {
          margin-bottom:-83%;
        }
        .ui-page-scrolling-control_active {
          margin-left: 0px;
          background-color: #1ca7b9;
        }
        .page-control__item {
          border: 15px;
          border: 2px solid #1ca7b9;
          width: 15px;
          height: 15px;
        }
        .page-control__item:hover {
          background-color: #1ca7b9;
        }
        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}
        .content2 {
            max-width: 1170px;
            margin: auto;
            margin-top: 23em;
        }
        .mySlides {display:none}
        .w3-tag, .fa {cursor:pointer}
        .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
        @media only screen and (max-width: 800px) {
            .label_header {
            letter-spacing: 5px;
            font-size: 25px;
          }
          .bottom-img {
            margin-bottom:-32%;
          }
          .content2 {
            max-width: auto;
            margin-top: 10em;
          }
        }
    </style>
</head>
<body class="page">
    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-text-black" id="myNavbar">
        <a class="w3-display-right w3-bar-item w3-hover-text-gray w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu" style="margin-right:3em">
          <i class="fa fa-bars"></i>
        </a>
        <div class="w3-bar-item" style="letter-spacing: 5px; font-size:15pt">
          <img src="{{ URL::asset('img/minilogo.png') }}" style="width:50px; height:50px">
          <div class="f_bold w3-display-left" style="font-size:17pt ;margin-left:5em">HI-DEPOK</div>
        </div>
        <div class=" w3-right w3-hide-small w3-display-right" style="margin-right:3em;letter-spacing:1px">
          <a href="#download" class="w3-bar-item w3-button">Download</a>
          <a href="/hidepok/maps" class="w3-bar-item w3-button">Maps</a>
          <a href="/hidepok/blog" class="w3-bar-item w3-button">Blog</a>
          <a href="/opendata" class="w3-bar-item w3-button">OpenData</a>
          <a href="/hidepok/event" class="w3-bar-item w3-button">Event</a>
          <a href="#about" class="w3-bar-item w3-button">About</a>
        </div>
      </div>
      <!-- Navbar on small screens -->
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#download" class="w3-bar-item w3-button" onclick="toggleFunction()">Download</a>
        <a href="/hidepok/maps" class="w3-bar-item w3-button">Maps</a>
        <a href="/hidepok/blog." class="w3-bar-item w3-button">Blog</a>
        <a href="/opendata" class="w3-bar-item w3-button">OpenData</a>
        <a href="/hidepok/event" class="w3-bar-item w3-button">Event</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
      </div>
    </div>

    <!-- Page Control -->
    <ul class="page-control">
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
        <li class="page-control__item"></li>
    </ul>

    <!-- Body Main -->
    <div class="main">

        <!-- Page 1 (Header) -->
        <section class="bgimg-1 w3-display-container" id="home">
            <div class="w3-content w3-display-middle" style="white-space:nowrap;">
                <div class="w3-btn w3-pale-yellow w3-animate-zoom w3-round-large" style="padding: 0em 2em; cursor:pointer" onclick="document.getElementById('id01').style.display='block'">
                  <label class="f_bold label_header w3-text-cyan" style="cursor:pointer"> WE SHARE WE CARE </label>
                </div>
            </div>
            <div class="w3-display-bottommiddle" style="width:100%; margin-bottom:-3px; cursor:pointer">
                <img src="{{ URL::asset('img/cloud.png') }}" style="width:100%">
            </div>
        </section>
        <!-- Isi Modal -->
        <div id="id01" class="w3-modal" style="padding-top:18em;">
            <div class="w3-modal-content w3-animate-zoom w3-card-4">
              <header class="w3-container w3-cyan w3-text-white">
                <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h3 class="f_reg w3-center" style="letter-spacing:3px">CARI DATA</h3>
              </header>
              <div class="w3-container w3-padding-32">
                <div class="w3-row">
                    <div class="w3-threequarter">
                        <input class="w3-input w3-border" type="text" placeholder=" Pencarian Data..." style="border-radius: 10px 0px 0px 10px;">
                    </div>
                    <div class="w3-quarter">
                        <div class="w3-button w3-gray" style="width:100%;border-radius: 0px 10px 10px 0px;"> Cari </div>
                    </div><br>
                </div>
              </div>
            </div>
        </div>

        <!-- Page 2 (Definisi) -->
        <section style="background-image:url('img/bg1-01.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="w3-display-topmiddle" style="width:100%;">
                <img src="{{ URL::asset('img/cloud2-01.png') }}" style="width:100%">
            </div>
            <div class="content2 w3-text-white">
              <div class="w3-row">
                <div class="w3-col m6 w3-center w3-padding-large">
                  <img src="{{ URL::asset('img/definition.png') }}" class="w3-round w3-image" alt="Definition Hi-Depok" width="500" height="333">
                </div>
                <div class="w3-col m6 w3-small w3-padding-large w3-padding-32">
                  <h3 class="f_bold"><b>Definition</b></h3>
                  <p style="font-size:12pt">
                    Hi-Depok merupakan wujud peningkatan pelayanan pemerintah Kota Depok kepada warganya. Aplikasi ini dapat membantu warga Kota Depok dalam berbagai aspek pelayanan seperti pelayanan kesehatan, keamanan, sosial dan juga kebutuhan akan informasi.
                  </p>
                </div>
              </div>
            </div>
        </section>

        <!-- Page 3 (Blog) -->
        <div style="background-color:#000; position:relative; width:100%;"></div>
        <section style="background-image:url('img/bg1-01_rotate.png'); background-size: cover; background-position: center; background-repeat: no-repeat; position:absolute;opacity:0.4">
            <div class="w3-container w3-padding-64">
              <h3 class="f_bold w3-center w3-text-white" style="letter-spacing:5px; margin-top:3.7em"><b>BLOG</b></h3>
              <p class="w3-center w3-text-white">Mari lihat apa yang terjadi pada Kota Depok</p><br>
              <div class="w3-content w3-row" style="max-width:1200px">
                <div class="w3-container w3-third">
                  <div class="w3-display-container">
                    <img src="{{ URL::asset('img/blog1.png') }}" alt="Avatar" style="width:100%; height:350px;">
                    <div class="w3-display-bottommiddle w3-medium" style="margin-bottom:-5px; width:100%">
                      <header class="w3-padding w3-light-grey">
                        <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
                      </header>
                      <div class="w3-padding w3-white">
                        Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
                      </div>
                      <button class="w3-button w3-block w3-cyan w3-text-white">See More</button>
                    </div>
                  </div>
                </div>
                <div class="w3-container w3-third">
                  <div class="w3-display-container">
                    <img src="{{ URL::asset('img/blog2.png') }}" alt="Avatar" style="width:100%; height:350px;">
                    <div class="w3-display-bottommiddle w3-medium" style="margin-bottom:-5px; width:100%">
                      <header class="w3-padding w3-light-grey">
                        <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
                      </header>
                      <div class="w3-padding w3-white">
                        Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
                      </div>
                      <button class="w3-button w3-block w3-cyan w3-text-white">See More</button>
                    </div>
                  </div>
                </div>
                <div class="w3-container w3-third">
                  <div class="w3-display-container">
                    <img src="{{ URL::asset('img/blog3.png') }}" alt="Avatar" style="width:100%; height:350px;">
                    <div class="w3-display-bottommiddle w3-medium" style="margin-bottom:-5px; width:100%">
                      <header class="w3-padding w3-light-grey">
                        <b>Wali Kota Ajak Warga Lestarikan Semangat Gotong Royong</b>
                      </header>
                      <div class="w3-padding w3-white">
                        Wali Kota Depok Mohammad Idris membuka kegiatan Perancangan Bulan Bhakti Gotong Royong Masyarakat (BBGRM)...
                      </div>
                      <button class="w3-button w3-block w3-cyan w3-text-white">See More</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- Page 4 (Open Data) -->
        <section class="w3-padding-64" style="background-image:url('img/bg1-01.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="w3-padding-64" style="margin-top:3em">
            <div class="w3-row w3-content w3-padding-64" style="max-width:1100px">
              <div class="w3-half w3-text-white" style="padding-left:3em ;padding-right:5em">
                <h4><b>DEPOK OPEN DATA</b></h4>
                <font class="w3-justify"> Merupakan Portal Data Terpadu Pemerintah Kota Depok yang menyajikan data-data dari seluruh Unit Kerja di Pemerintah dan Seluruh Instansi serta Organisasi Kota Depok. </font>
                <br><br>
                <a href="/opendata"><button class="w3-btn w3-black w3-padding-large">See More</button><br><br></a>
              </div>
              <div class="w3-half w3-center">
                <img class="bottom-img" src="{{ URL::asset('img/b3.png') }}" style="width:100%;">
              </div>
            </div>
          </div>
        </section>

        <!-- Page 5 (Event) -->
        <section class="w3-padding-64" style="background-image:url('img/bg1-01_rotate.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <!-- Slideshow -->
              <div class="w3-center w3-padding-64">
                <span class="w3-xlarge w3-bottombar w3-border-orange w3-padding-16 w3-text-white">EVENT</span>
              </div>
              <div class="w3-container w3-content w3-center" style="max-width:700px">
                <div class="w3-display-container mySlides">
                  <img src="{{ URL::asset('img/event1.jpg') }}" style="width:100%; height:400px">
                  <div class="w3-display-topleft w3-container w3-padding-32">
                    <span class="w3-white w3-padding-large w3-animate-bottom">Lorem ipsum</span>
                  </div>
                </div>
                <div class="w3-display-container mySlides">
                  <img src="{{ URL::asset('img/event2.jpg') }}" style="width:100%; height:400px">
                  <div class="w3-display-middle w3-container w3-padding-32">
                    <span class="w3-white w3-padding-large w3-animate-bottom">Klorim tipsum</span>
                  </div>
                </div>
                <div class="w3-display-container mySlides">
                  <img src="img/event3.png" style="width:100%; height:400px">
                  <div class="w3-display-topright w3-container w3-padding-32">
                    <span class="w3-white w3-padding-large w3-animate-bottom">Blorum pipsum</span>
                  </div>
                </div>

                <!-- Slideshow next/previous buttons -->
                <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
                  <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
                  <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>

                  <div class="w3-center">
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                  </div>
                </div>
              </div>
        </section>

        <!-- Page 6 (Feature) -->
        <section class="w3-padding-64" style="background-image:url('img/bg1-01.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="w3-container w3-padding-64 w3-text-white">
            <h3 class="f_bold w3-center" style="letter-spacing:5px">FEATURES</h3>
            <p class="w3-center" style="margin-top:0px; margin-bottom:4em">The great features of Hi-Depok</p><br>

            <div class="w3-row w3-content" style="max-width:1200px">
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/map.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Temukan Data</b></span>
                    <p>Sajian data terbaru mengenai data publik, jumlah fasilitas kesehatan, fasilitas umum, dll.</p>
                  </div>
                </div>
              </div>
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/rsud.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Kesehatan</b></span>
                    <p>Memberikan layanan seputar diagnosa penyakit, ensiklopedi, serta pendaftaran RSUD Depok.</p>
                  </div>
                </div>
              </div>
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/map.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Volunteer</b></span>
                    <p>Wadah pendaftaran menjadi sukarelawan di panti asuhan Kota Depok.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="w3-row w3-content" style="max-width:1200px; margin-top:2em">
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/room.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Smart Space</b></span>
                    <p>Sarana peminjaman ruangan yang didedikasikan umum untuk komunitas di Kota Depok</p>
                  </div>
                </div>
              </div>
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/about.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Karya Anak Depok</b></span>
                    <p>Wadah penyaluran karya anak Depok agar dapat diapresiasi, diakui, dan diberikan penghargaan oleh Pemerintah Kota Depok</p>
                  </div>
                </div>
              </div>
              <div class="w3-third">
                <div class="w3-row">
                  <div class="w3-third">
                    <img src="{{ URL::asset('img/icon/ensiklopedi.png') }}" class="w3-left w3-circle w3-margin-right" style="width:100%">
                  </div>
                  <div class="w3-twothird">
                    <span class="w3-large w3-margin-right"><b>Portal Berita</b></span>
                    <p>Sumber artikel dan informasi terbaru mengenai Kota Depok</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="w3-content w3-center w3-display-container">
              <div class="w3-display-container mySlides">
                <img src="{{ URL::asset('img/fitur1.png') }}" style="width:510px">
              </div>

              <div class="w3-display-container mySlides">
                <img src="{{ URL::asset('img/fitur2.png') }}" style="width:510px">
              </div>

              <div class="w3-display-container mySlides">
                <img src="{{ URL::asset('img/fitur3.png') }}" style="width:510px">
              </div>

              <button class="w3-button w3-display-left w3-light-gray" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-display-right w3-light-gray" onclick="plusDivs(1)">&#10095;</button>
            </div> -->
          </div>
        </section>

        <!-- Page 4 (Event) -->
        <section id="download" style="background-image:url('img/bg1-01_rotate.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="w3-row w3-display-middle w3-text-white">
            <div class="w3-content" style="max-width:1100px">
              <div class="w3-half">
                <font class="flarge w3-right"> Where can you get it?</font>
              </div>
              <!-- Hide this text on small devices -->
              <div class="w3-half w3-small w3-padding-large">
                <h3><b>Get for Android</b></h3>
                <p style="font-size:12pt">
                  Yuk bantu dan bangun Kota Depok menjadi kota yang bersahabat dengan masyarakatnya. Scan atau download aja di bawah ini ya :)
                </p>
                <img src="{{ URL::asset('img/gplay.png') }}" class="w3-round w3-image" alt="Get for Android" width="150" height="333">
              </div>
            </div>
          </div>
        </section>

        <!-- Page 4 (Event) -->
        <section id="about" style="background-image:url('img/bg1-01.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="w3-display-middle w3-text-white">
                <font class="w3-jumbo">
                    About.
                </font>
                <p> Kami bersemangat untuk membangun Kota ini. Tim kami bekerja untuk menciptakan kemudahan bagi warga Depok untuk mengetahui kotanya sendiri dan memberikan wadah dalam berinteraksi. Kami berusaha semaksimal mungkin untuk memberikan yang terbaik untuk pelayanan masyarakat. Cerita kami tidak akan berkembang tanpa Anda. Kami telah berkembang sejauh ini dalam waktu singkat — dan masih banyak hal lain yang harus dilakukan. </p>
            </div>
        </section>
    </div>

    <script>
        // Change style of navbar on scroll
        window.onscroll = function() {myFunction()};
        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-dark-gray" + " w3-text-white";
            } else {
                navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-dark-gray w3-text-white", "");
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
    <script>
    // Slideshow
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demodots");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length} ;
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }
    </script>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>
</html>
