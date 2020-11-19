<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>E-Book </title>
		<!-- google fonts -->
		<link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
		<link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
		<!-- google fonts -->
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/style-starter.css">
		<!--link rel="stylesheet" href="assets/css/style-starter1.css"-->
		<!-- Template CSS -->
	</head>
	<body onload="myFunction()">
	<!--header-->
		<header id="site-header" class="fixed-top">
			<div class="container">
			<nav class="navbar navbar-expand-lg stroke">
			<h1><a class="navbar-brand mr-lg-5" href="index.php">E-Book</a></h1>
			<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html"><img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" /></a> -->
			<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
				data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="registration.php">Registration</a>
					</li>					
				</ul>
			</div>
        <!-- toggle switch for light and dark theme -->
			<div class="mobile-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
						<input type="checkbox" id="checkbox">
						<div class="mode-container">
							<i class="gg-sun"></i>
							<i class="gg-moon"></i>
						</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
			</nav>
			</div>
		</header>
	<!-- //header -->
	<!--banner-slider-->
	<!-- main-slider -->
	<section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>Change your life with E-Book for A Victory.</h3>
              <h6 class="mb-3">Read the way you like it.</h6>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</section>
	<!-- /main-slider -->
	<!-- //banner-slider-->

  <!--/grids-->
  <script>
	function myFunction() {
		var a = document.getElementById("content1");
        a.classList.add("show");
        a.classList.remove("hide");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show"); 
		var g = document.getElementById("content3");
        g.classList.add("hide");
        g.classList.remove("show");
		var h = document.getElementById("content4");
        h.classList.add("hide");
        h.classList.remove("show");
	}
	
	function fun1()
	{	
		var a = document.getElementById("content1");
        a.classList.add("show");
        a.classList.remove("hide");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show"); 
		var g = document.getElementById("content3");
        g.classList.add("hide");
        g.classList.remove("show");
		var h = document.getElementById("content4");
        h.classList.add("hide");
        h.classList.remove("show");
        
	}
	function fun2()
	{
		var b = document.getElementById("all");
        b.classList.remove("active");
		var a = document.getElementById("content1");
        a.classList.add("hide");
        a.classList.remove("show");
		var f = document.getElementById("content2");
        f.classList.add("show"); 
        f.classList.remove("hide"); 
		var g = document.getElementById("content3");
        g.classList.add("hide");
        g.classList.remove("show");
		var h = document.getElementById("content4");
        h.classList.add("hide");
        h.classList.remove("show");
	}
	function fun3()
	{
		var b = document.getElementById("all");
        b.classList.remove("active");
		var a = document.getElementById("content1");
        a.classList.add("hide");
        a.classList.remove("show");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show"); 
		var g = document.getElementById("content3");
        g.classList.add("show");
        g.classList.remove("hide");
		var h = document.getElementById("content4");
        h.classList.add("hide");
        h.classList.remove("show");
	}
	function fun4()
	{
		var b = document.getElementById("all");
        b.classList.remove("active");
		var a = document.getElementById("content1");
        a.classList.add("hide");
        a.classList.remove("show");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show"); 
		var g = document.getElementById("content3");
        g.classList.add("hide");
        g.classList.remove("show");
		var h = document.getElementById("content4");
        h.classList.add("show");
        h.classList.remove("hide");
	}
  </script>
 
  <div class="products-4" id="gallery" >
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="container">
            <div class="title-content text-left mb-lg-5 mb-4 pt-5">
				<h3 class="hny-title" style="text-align:center">Categories</h3>
			</div>
			  <div class="pb-5">
			  <button id="all" class="tabtle active" onclick="fun1()"> All </button>
			  <button class="tabtle" onclick="fun2()"> Novels </button>
			  <button class="tabtle" onclick="fun3()"> Fiction </button>
			  <button class="tabtle" onclick="fun4()"> Story </button>
			  </div>
			
            <section id="content1" class="container tab-content text-left ml-4">
                <div class="grid-col-3 row">
                    <div class="product col-4">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g2.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g3.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g4.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g4.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g5.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g5.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g6.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g6.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    
                    
                </div>
            </section>

            <section id="content2" class="tab-content text-left ml-4">
                <div class="grid-col-3 row">
                    <div class="product col-4">
                        <a href="assets/images/g7.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g7.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g8.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g8.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g2.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g2.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g3.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g3.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g4.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g4.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>

            <section id="content3" class="tab-content text-left ml-4">
                <div class="grid-col-3 row">
                    <div class="product col-4">
                        <a href="assets/images/g5.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g5.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                      
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g6.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g6.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                       
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g7.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g7.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>

            <section id="content4" class="tab-content text-left ml-4">
                <div class="grid-col-3 row">
                    <div class="product col-4">
                        <a href="assets/images/g8.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g8.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                    <div class="product col-4">
                        <a href="assets/images/g1.jpg" data-lightbox="example-set"
                            data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                            <figure>
                                <img src="assets/images/g1.jpg" class="img-responsive" alt="" />
                            </figure>
                        </a>
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Products4 block -->
</div>
 
	
  
  <!--//grids-->
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con pb-lg-3">
        <div class="col-lg-4 col-6 stats_info counter_grid">
          <p class="counter">730</p>
          <h4>Books</h4>
        </div>
        <div class="col-lg-4 col-6 stats_info counter_grid1">
          <p class="counter">1680</p>
          <h4>Readers</h4>
        </div>
        <div class="col-lg-4 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter">100</p>
          <h4>Popular Books</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!--/-->
			
  <div class="best-rooms py-5">
  <div class="title-content text-left mb-lg-5 mb-4">
				<h3 class="hny-title" style="text-align:center">Popular Books</h3>
			</div>
    <div class="container py-md-5">
        <div class="ban-content-inf row">
            <div class="maghny-gd-1 col-lg-6">
              <div class="maghny-grid">
                <figure class="effect-lily border-radius  m-0">
                    <img class="img-fluid" src="assets/images/g10.jpg" alt="" />
                    <figcaption>
                        <div>
                            <p>Novels</p>
                        </div>

                    </figcaption>
                </figure>
            </div>
            </div>
            <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                <div class="row">
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g9.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <p>Comics </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g8.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <p>Mystery</p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g7.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <p>Fiction</p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-6 mt-4">
                        <div class="maghny-grid">
                            <figure class="effect-lily border-radius">
                                <img class="img-fluid" src="assets/images/g6.jpg" alt="" />
                                <figcaption>
                                    <div>
                                        <p>Story</p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- //stats -->
  <!--/w3l-bottom-->
  
   
 

  <!--/w3l-footer-29-main-->
  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <h3>Company</h3>
                  <ul class="footer-gd-16">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="registration.php">Registration</a></li>
                  </ul>
                </div>
                <div class="col-md-8 column mt-md-0 mt-4">
                  <h3>Contact Us</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Email: janhavi1997@gmail.com</a></li>
                    <li><a href="#url">Phone no.: 9876543210</a></li>
                  </ul>
                </div>               
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Newsletter </h3>
              <div class="end-column">
                <h4>Get latest updates .</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit">Go</button>
                </form>
                <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2020 E-Book. All rights reserved.Design by Janhavi
              </p>
            </div>
            <div class="columns-2 mt-lg-0 mt-3">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };
  
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }
  
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/slider-js-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/modernizr-2.6.2.min.js"></script>
  <script src="assets/js/jquery.zoomslider.min.js"></script>
  <!--//slider-js-->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>


</body>
</html>