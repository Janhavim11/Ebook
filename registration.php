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
			<h1><a class="navbar-brand mr-lg-5" href="index.html">E-Book</a></h1>
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
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
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
	<!--section class="w3l-main-slider" id="home">
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
	</section-->
	<!-- /main-slider -->
	<!-- //banner-slider-->
	<script>
		$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
	</script>

  <script>
	function myFunction() {
		var a = document.getElementById("content1");
        a.classList.add("show");
        a.classList.remove("hide");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show"); 
	}
	
	function fun1()
	{	
		var a = document.getElementById("content1");
        a.classList.add("show");
        a.classList.remove("hide");
		var f = document.getElementById("content2");
        f.classList.add("hide"); 
        f.classList.remove("show");         
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
	}
  </script>
 
  <div class="products-4 mt-5 pt-5" id="gallery" >
    <!-- Products4 block -->
    <div id="products4-block" class="text-center">
        <div class="container">
			  <div class="pb-5">
			  <button id="all" class="tabtle active" onclick="fun1()"> Sign Up </button>
			  <button class="tabtle" onclick="fun2()"> Login </button>
			  </div>

            <section id="content1" class="container tab-content text-left">
                
    <section class="content">
      <div class="row">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary" style="
    width: 50%;
    align-content: center;
    margin: auto;
">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form id="registration_form" role="form" method="POST" enctype="multipart/form-data" >
				<div class="box-header with-border">
              <h3 class="box-title pb-3" style="
    text-align: center;
">Registration</h3>
            </div>
              <div class="box-body p-4" style="
    border: solid;
">
			  <div class="form-group has-feedback">
			  <label for="exampleInputEmail1">Name :</label>
        <input type="text" class="form-control" placeholder="Full name" name="fullname">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		
      </div>
	  <div class="form-group">
	  <label for="exampleInputEmail1">Address :</label>
        <textarea col="100%" rows="3" class="form-control" name="address">
		</textarea>
      </div>
      <div class="form-group has-feedback">
	  <label for="exampleInputEmail1">Email :</label>
        <input type="email" class="form-control" placeholder="Enter Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
            <div class="form-group">
                <label>Contact  :</label>

                <div class="input-group">
                  <input type="text" class="form-control" maxlength="10" name="con"/>                        
                </div>
                <!-- /.input group -->
              </div>    
		
              <!-- Date -->
              <div class="form-group">
                <label>Birth Date :</label>
                <div class="input-group date">                  
                  <input type="date" class="form-control" name="bdate">				  
                </div>
				 
                <!-- /.input group -->
              </div>	
               <div class="box-footer" style="
    text-align: right;
">
                <button type="submit" name="Submit">Submit</button>
              </div>
              </div>
              <!-- /.box-body -->

              
            </form>
          </div>
    </section> 
                    
            </section>

            <section id="content2" class="tab-content text-left">
                
                 <div class="login-box-body" style="
    width: 50%;
    align-content: center;
    margin: auto;
">
    

    <form  id="login_form" action="Login.php" method="post">
		<div class="box-header with-border">
              <h3 class="box-title pb-3" style="
    text-align: center;
">Sign Up</h3>
            </div>
			<div class="box-body p-4" style="
    border: solid;
">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="User Name" name="Uname">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!--div class="col-12">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12" style="text-align:right">
          <button type="submit">Log In</button>
        </div>
        <!-- /.col -->
      </div>
      </div>
    </form>

  
    <!-- /.social-auth-links -->

  
  </div>   
            </section>
               
        </div>
    </div>
    <!-- Products4 block -->
</div>
  


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
  <?php
if(isset($_POST["Submit"]))
{
	$con=mysqli_connect("localhost","root","","mydb1");
	if(mysqli_connect_errno())
	{
		echo "connection failed.";
	}
	
	$date = htmlentities($_POST['bdate']);
	
	$sql="insert into reg(FullName,Contact,Email,Address,BDate)values('$_POST[fullname]','$_POST[con]','$_POST[email]','$_POST[address]','$date')";
	if(!mysqli_query($con,$sql))
	{
		echo"error occured while inserting";
	}
	else
	{
		?>
		<script>alert("Details Added Successfully!!!");</script>
		<?php
		mysqli_close($con);
	}
}
 
?>
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