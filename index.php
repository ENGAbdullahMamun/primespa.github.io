
<?php
$con=mysqli_connect("localhost", "root", "" ,"painfree");

if(isset($_REQUEST['submit'])) {
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$massage=$_REQUEST['msg'];
$services=$_REQUEST['service'];
$b=implode("<br>--",$services);
$radio=$_REQUEST['radio'];
$query= "INSERT INTO `user`(`name`, `email`, `phone`, `massage`, `services` , `radio`) VALUES ('$name','$email','$phone','$massage','$b','$radio')";
$result=mysqli_query($con,$query);
if ($result == TRUE) {
  header('location:index.php');
}
else {
  "no";
}
}
else {
  "no";
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <title>Home - Company Name</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.ripple.js" ></script>
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Shrikhand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
  <!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">

<script>
  $(document).ready(function(){

 $("#hide").click(function(){
    $("#show").toggle(1500);
  });

  });

</script>

</head>
<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block" style="background: rgba(36,36,36,1);
background: -moz-linear-gradient(left, rgba(36,36,36,1) 0%, rgba(41,41,41,1) 12%, rgba(48,48,48,1) 25%, rgba(33,33,33,1) 39%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 51%, rgba(8,8,8,1) 60%, rgba(20,20,20,1) 76%, rgba(13,13,13,1) 91%, rgba(8,8,8,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(36,36,36,1)), color-stop(12%, rgba(41,41,41,1)), color-stop(25%, rgba(48,48,48,1)), color-stop(39%, rgba(33,33,33,1)), color-stop(50%, rgba(20,20,20,1)), color-stop(51%, rgba(0,0,0,1)), color-stop(60%, rgba(8,8,8,1)), color-stop(76%, rgba(20,20,20,1)), color-stop(91%, rgba(13,13,13,1)), color-stop(100%, rgba(8,8,8,1)));
background: -webkit-linear-gradient(left, rgba(36,36,36,1) 0%, rgba(41,41,41,1) 12%, rgba(48,48,48,1) 25%, rgba(33,33,33,1) 39%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 51%, rgba(8,8,8,1) 60%, rgba(20,20,20,1) 76%, rgba(13,13,13,1) 91%, rgba(8,8,8,1) 100%);
background: -o-linear-gradient(left, rgba(36,36,36,1) 0%, rgba(41,41,41,1) 12%, rgba(48,48,48,1) 25%, rgba(33,33,33,1) 39%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 51%, rgba(8,8,8,1) 60%, rgba(20,20,20,1) 76%, rgba(13,13,13,1) 91%, rgba(8,8,8,1) 100%);
background: -ms-linear-gradient(left, rgba(36,36,36,1) 0%, rgba(41,41,41,1) 12%, rgba(48,48,48,1) 25%, rgba(33,33,33,1) 39%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 51%, rgba(8,8,8,1) 60%, rgba(20,20,20,1) 76%, rgba(13,13,13,1) 91%, rgba(8,8,8,1) 100%);
background: linear-gradient(to right, rgba(36,36,36,1) 0%, rgba(41,41,41,1) 12%, rgba(48,48,48,1) 25%, rgba(33,33,33,1) 39%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 51%, rgba(8,8,8,1) 60%, rgba(20,20,20,1) 76%, rgba(13,13,13,1) 91%, rgba(8,8,8,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#242424', endColorstr='#080808', GradientType=1 );">
    <div class="clearfix"><center>
      <div class="contact-info d-inline-block">
        <i class="fa fa-envelope-o"></i> <a href="info@painfreemedspa.com" class="text-white"><b>info@painfreemedspa.com</b></a>
        <i class="fa fa-phone"></i><b class="text-white">+918 710 5060</b>
        </div>
        <div class="social-links d-inline-block">
       <a href="https://www.facebook.com/primemedspa/" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
</center>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header"  style="background-color: whitesmoke;
-webkit-box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.63);
-moz-box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.63);
box-shadow: 0px 3px 7px 0px rgba(0,0,0,0.63);">
    <div class="container" style="background-color: whitesmoke;">
<div id="logo" class="pull-left">
     <a href="#body"><img src="logo.png" class="scrollto" height="50px"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">We Do</a></li>
          <li class="menu-has-children"><a href="">PrimeMed</a>
            <ul>
            <li><a href="pages/Acne.php">Acne Treatments</a></li>
            <li><a href="pages/botox.php" >Botox</a></li>
            <li> <a href="pages/dermalFilter.php">Dermal Filter</a></li>
            <li><a href="pages/dremplanefacials.php">Dremplane Facials</a></li>
            <li><a href="pages/melanageMinPeel.php">Melanage Min Peel</a></li>
            <li><a href="pages/skinResufacing.php" >Skin Resurfacing</a></li>
            <li><a href="pages/BBLlaser.php">BBL Laser Hair Removel</a></li>
            <li><a href="pages/chestandneck.php" >Chest And Neck Rejuvenation</a></li>
            <li> <a href="pages/hairlossrestoration.php">Hair Lose Restoration</a></li>
            <li><a href="pages/microlaserpeel.php">Microlaser Peel</a></li>
            <li> <a href="pages/permanetcosmetic.php">Permanet Cosmetics</a></li>
            <li><a href="pages/searrevision.php" >Sear Revision</a></li>
            <li> <a href="pages/profacial.php">Photo Facial</a></li>
            <li><a href="pages/queladge.php">Queladge</a></li>
            <li><a href="pages/profacialtherafy.php">Profacial Therafy</a></li>
            <li><a href="pages/skinresurfacingnano.php">Skin Resurfacing with Nano Laser Peel</a></li>
            </ul>
           </li>

          <li class="menu-has-children"><a href="">PrimeSpa</a>
            <ul>
                <li><a href="pages/bridalparty.php" class="1">Bridal Party Beauty</a></li>
                <li> <a href="pages/dermaplane.php" class="1">Dermaplane</a></li>
                <li><a href="pages/massagetheraphy.php" class="1">Massagetheraphy</a></li>
                <li> <a href="pages/waixing.php" class="1">Waixing</a></li>
           <li> <a href="pages/redken.php" class="1">Redken Salon</a></li>
            </ul>
          </li>

            <li class="menu-has-children"><a href="">Products</a>
            <ul>
              <li><a href="pages/additional.php" class="1">Aditional Skincare Lines</a></li>
              </ul>
          </li>


            <li class="menu-has-children"><a href="">Resources</a>
            <ul>
            <li><a href="https://carecredit.com/" class="1">Care Credit</a></li>
              </ul>
          </li>

          <li class="menu-has-children"><a href="">PrimeMen</a>
            <ul>
              <li><a href="pages/mensfacials.php" class="1">Mens Facials</a>
            <a href="pages/hairlossrestorationmen.php" class="1">Hair Loss Restoration Men</a>
            <a href="pages/menslasehairremovel.php" class="1">Men's Laser Hair Removel</a></li>
             </ul>
          </li>
          <li><a href="pages/contact.php">Contact</a></li>
            <li><a href="pages/blog.php">Blog</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

    <section id="intro">
     <br>
<div>
<br>

<div class="beauty">
<div class="row align-items-center justify-content-between ">
						<div class="col-lg-6 col-md-4 col-sm-4">
							<h4 style="font-family: 'Dancing Script', cursive;">Rest & Relax</h4>
							<h1 style="font-family: 'Shrikhand', cursive;">Beauty & Spa Salon</h1>
							<p>
								Enjoy some much needed me time during a three hour spa session
							</p>
							<a href="pages/contact.php" class="btn btn-info" style="padding: 15px; background-color: floralwhite ; background: rgba(247,131,193,1);
background: -moz-linear-gradient(left, rgba(247,131,193,1) 0%, rgba(156,3,85,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(247,131,193,1)), color-stop(100%, rgba(156,3,85,1)));
background: -webkit-linear-gradient(left, rgba(247,131,193,1) 0%, rgba(156,3,85,1) 100%);
background: -o-linear-gradient(left, rgba(247,131,193,1) 0%, rgba(156,3,85,1) 100%);
background: -ms-linear-gradient(left, rgba(247,131,193,1) 0%, rgba(156,3,85,1) 100%);
background: linear-gradient(to right, rgba(247,131,193,1) 0%, rgba(156,3,85,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f783c1', endColorstr='#9c0355', GradientType=1 ); border-radius: 42px 42px 42px 42px;
-moz-border-radius: 42px 42px 42px 42px;
-webkit-border-radius: 42px 42px 42px 42px;
border: 0px solid #000000;" id="req">REQUEST AN APPOINTMENT</a>
						</div><br>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end P-5">


              <form class="fom form-container login100-form validate-form" method="post">
                 <center><div class="container">
                 <b class="h3 text-warning" style="font-weight: 700">BOOK YOUR FREE</b>
                  <br><b class="h6">C O N S U L T A T I O N</b><br>
                    <b class="" style=" font-family: 'El Messiri', sans-serif;">Or call our friendly staff today</b>
                      </div></center><br>
                 <div class="form-group">
                    <input type="text" required="required" class="form-control" id="inputEmail4" name="name" placeholder="Full Name">
                  </div>

                  <div class="form-group">
                    <input type="email" required="required" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                  </div>
              <style>
              .checkbox-inline{
              font-family: 'Basic', sans-serif;
              }
              </style>
              <div class="form-group">
                <input type="text" required="required" class="form-control" id="inputAddress" name="phone" placeholder="Phone">
                </div>
             <a class="text-white btn btn-info" id="hide">Please click Here To See Our Services...</a><br>
              <div class="container p-3" id="show" style="display: none ; position: relative; background-color: white; padding: 50px; font-size: 12px; border-radius: 5px 5px 5px 5px;
              "><br>
                  <h3 class="prm text-success">PrimeMed</h3>
                  <span>
                   <label class="checkbox-inline">
                    <input type="checkbox"  name="service[]" value="Acne Treatments">Acne Treatments
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Chest and Neck Rejuvenation">Chest and Neck Rejuvenation
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Melanage Mini Peel">Melanage Mini Peel
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Photofacial">Photofacial
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Skin Resurfacing">Skin Resurfacing
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Redken Salon">Redken Salon
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Botox">Botox
                  </label>

                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Facials">Facials
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Microlaser Peel">Microlaser Peel
                  </label>
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Profracitional Theraphy">Profracitional Theraphy
                  </label>
                     <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="BBL Laser Hair Removel">BBL Laser Hair Removel
                  </label>
                      <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Dermaplane Facials">Dermaplane Facials
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Hair Loss Restoration">Hair Loss Restoration
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Skin Resurfacing With Nano Laser Peel">Skin Resurfacing With Nano Laser Peel
                  </label>

                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Dermal Fillers">Dermal Fillers
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Permanent Cosmetics"> Permanent Cosmetics
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Quelage Peel">Quelage Peel
                  </label>
                       <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Scar Revision">Scar Revision
                  </label>
                        <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Laser Hair Removal">Laser Hair Removal
                  </label>

                  </span>
                  <h3 class="prm text-warning">PrimeSpa</h3>
                   <span style="text-align: center">
                   <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Bridal Party">Bridal Party
                  </label>

                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Dermaplane">Dermaplane
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Massage Therapy">Massage Therapy
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Waxing">Waxing
                  </label> </span>
                  <h3 class="prm text-info">PrimeMen</h3>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Hair Loss Restoration (Men)">Hair Loss Restoration (Men)
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Men's Laser Hair Removal">Men's Laser Hair Removal
                  </label>
                 <label class="checkbox-inline">
                    <input type="checkbox" name="service[]" value="Men's Facials">Men's Facials
                  </label>

              <br>
                  <b class="" style="font-size: 20px;">Preferred time of day for Appointment:</b>
              <br><div class="radio container">
                    <label><input type="radio" name="radio" value="Morning">Morning</label>
                  </div>
                  <div class="radio container">
                    <label><input type="radio" name="radio" value="Afternoon">Afternoon</label>
                  </div>
              </div><br>
              <div class="form-group">
              <textarea type="text" class="form-control" id="inputAddress" name="msg" placeholder="Message"></textarea>
                </div>
              <button type="submit" name="submit" class="btn btn-primary col-md-12">REQUEST AN APPOINTMENT</button>


                       </form>


                     	</div>
					</div>
				</div>
        </div>
        <br><br>
  </section>
  <main id="main">

   <center><section class="wow fadeInUp">
   <div class="loca">
<div class="container" style="">
<div class="d-inline-block">
	<ul class="pp-icon-list-items pp-list-type-icon">


			<li class="pp-icon-list-item pp-icon-list-item-0" style="list-style: none">
                <span class="pp-list-item-icon fa fa-map-marker"></span><strong>Location</strong><br>
				<span class="pp-list-item-text">7307 S Yale Ave Tulsa, OK 74136</span>
			</li>


		</ul>
</div>
<loc>
<div class="d-inline-block locc">
	<ul class="pp-icon-list-items pp-list-type-icon">
			<li class="pp-icon-list-item pp-icon-list-item-0" style="list-style: none ;">
                <span class="pp-list-item-icon ua-icon fa fa-users"></span><strong>Experienced</strong><br>
				<span class="pp-list-item-text">Team</span>
			</li>


		</ul>
</div>
<div class="d-inline-block locc">
	<ul class="pp-icon-list-items pp-list-type-icon">


			<li class="pp-icon-list-item pp-icon-list-item-0" style="list-style: none">
                <span class="pp-list-item-icon fa fa-cogs"></span><strong>Cutting edge</strong><br>
				<span class="pp-list-item-text">Technology</span>
			</li>


		</ul>
</div>
<div class="d-inline-block locc">
	<ul class="pp-icon-list-items pp-list-type-icon">


			<li class="pp-icon-list-item pp-icon-list-item-0" style="list-style: none">
                <span class="pp-list-item-icon fa fa-smile-o"></span><strong>You will fee</strong><br>
				<span class="pp-list-item-text">Rejuvenated</span>
			</li>


		</ul>
</div>
      </loc>
</div>
</div>
       </section></center></main>
<section id="services">
 <center>
   
 <div class="embed-responsive embed-responsive-16by9 col-lg-11 d-inline-block wow fadeInUp">
  <img class="embed-responsive-item" src="img/rec.jpg" allowfullscreen />
     <div class="centered"><div class="">
          <center class="msc"><h2><b>Welcome</b> to PainFree Medical Spa</h2></center>
          <p><welcome class="col-6">The place to go for discerning clients who desire non-surgical beauty solutions.
Your face is our specialty, and our mission is to help you feel confident in your skin every day. By combining the art and science of beauty we will help you achieve the look you desire by providing top-of-the-line, physician-directed services and medical-grade skin care products. The latest in laser technology can be found at Prime along with staff experienced in injectables and educated in the newest techniques .  Many of our treatments are non-invasive, and in most cases, you are able to return to work on the same day.  It’s not vain to want to look great.  It means you are striving to be the best version of you so you can step out in confidence every day.</welcome></p>
</div></div>
<div class="">
   <video controls class="vdt col-5">
       <source class="embed-responsive embed-responsive-16by9" src="325474563.mp4">
  </video>        
</div></div>
</center>
    </section>
<br>
     <section id="services">
         <center>
       <div class="col-lg">
        <div class="top">
            <div class="d-inline-block col-lg-3 box wow fadeInLeft top">
              <img class="container m-auto p-3" src="img/1.jpg">
              <h4 class="title m-auto p-auto">PrimeMed</h4>
               <p class="containear m-auto p-auto">Services include injectables, laser treatments, micro-needling, skin tightening, spider vein removal, acne treatments, and much more.</p>
                <a href="pages/skinpen.html" class="btn btn-dark text-white">Learn More</a>
            </div>
          <div class="d-inline-block col-lg-3 box wow fadeInLeft  top">
            <img class="container m-auto p-3" src="img/2.jpg"><br><br>
              <h4 class="title m-auto p-auto">PrimeSpa</h4>
               <p class="containear m-auto p-auto">Services we offer include massage therapy, waxing, dermaplaning, and more.</p>
                <a href="pages/massagetheraphy.html" class="btn btn-dark text-white">Learn More</a>
            </div>

          <div class="d-inline-block col-lg-3 box wow fadeInLeft top">
          <img class="container m-auto p-3" src="img/3.jpg"><br><br><br>
              <h4 class="title m-auto p-auto">Resources</h4>
               <p class="containear m-auto p-auto">Check out our Frequently Asked Questions.</p>
                <a href="pages/primespa.html" class="btn btn-dark text-white">Learn More</a>
            </div>
          </div>
              </div>
        </center>

      </section>

    <section id="portfolio" class="wow fadeInUp">
      <div class="">
        <div class="container">
          <center><h2><b>WHAT</b> WE DO</h2></center>
          <h4 class="are"><b>Are You Ready For Prime Skin?</b></h4>
            <p>I have to admit, I used to depend on makeup for a good complexion.  But not anymore.  Now I'm focused on correcting my skin for a more radiant complexion --without makeup.  So are you ready to be makeup-free?  Are you ready for Prime skin?
<br>
During our complimentary consultations, I help our guests select the best services and products to correct what bothers them about their skin.  It's important for guests to understand that beautiful skin doesn't happen overnight.  Depending on the extent of the damage, it could take a combination of medical grade products, a series of laser treatments, and for some, injectables like Botox and dermal fillers to achieve the desired results.  It really just comes down to each individual's goals and budget which we discuss during the consultati<br><br>
          </p>
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp ">
              <a href="pages/img/sld/Skin%20Resurfacing.jpg" class="portfolio-popup">
                <img src="pages/img/sld/Skin%20Resurfacing.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Skin Resurfacing</h2></div>
                </div>
              </a>
            </div>
          </div>


            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/laser-treatments.jpg" class="portfolio-popup">
                <img src="pages/img/sld/laser-treatments.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">laser Treatments</h2></div>
                </div>
              </a>
            </div>
          </div>



            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/Body%20Contouring.png" class="portfolio-popup">
                <img src="pages/img/sld/Body%20Contouring.png" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Body Contouring</h2></div>
                </div>
              </a>
            </div>
          </div>



            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/Laser%20Hair%20Removal.jpg" class="portfolio-popup">
                <img src="pages/img/sld/Laser%20Hair%20Removal.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Laser Hair Removal</h2></div>
                </div>
              </a>
            </div>
          </div>



            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/Corrective%20Peel.jpg" class="portfolio-popup">
                <img src="pages/img/sld/Corrective%20Peel.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Corrective Peel</h2></div>
                </div>
              </a>
            </div>
          </div>


            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/pase.jpg" class="portfolio-popup">
                <img src="pages/img/sld/pase.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">PRESSOTHERAPY
</h2></div>
                </div>
              </a>
            </div>
          </div>


            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/Massage%20Therapy.jpg" class="portfolio-popup">
                <img src="pages/img/sld/Massage%20Therapy.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Massage Therapy</h2></div>
                </div>
              </a>
            </div>
          </div>
            <div class="col-lg-3 col-md-4 wrk">
            <div class="portfolio-item wow fadeInUp">
              <a href="pages/img/sld/Facials.jpg" class="portfolio-popup">
                <img src="pages/img/sld/Facials.jpg" alt="" class="imgg">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Facials</h2></div>
                </div>
              </a>
            </div>
          </div>


    </div>
    </div>
    </section>
<br><br>
       <section id="testimonials container" class="wow fadeInUp">
      

      <div class="nmc" style="border:0; z-index: -1" >

          <center class="nmc"><h1><b>BEAUTY</b> WITH PASSION</h1>
              <i><b>Beauty is our passion – and nothing makes us happier than<br> sharing our secrets exclusively with you, our customers.</b></i></center>
      </div> </section>
<section id="contact1" class="wow fadeInUp">
      <div class="mapp">
           <center> <img class="img-fluid bedi" src="img/cousin-left.png" width="916" height="800"></center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.476944447223!2d-95.9237571843191!3d36.057469280108464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b692422763fc81%3A0x7fd5a89305af99c5!2s7307+S+Yale+Ave%2C+Tulsa%2C+OK+74136%2C+USA!5e0!3m2!1sen!2sbd!4v1547975326389" width="100%" height="380" frameborder="0" style="border:0; border-top: 5px solid skyblue;" allowfullscreen></iframe>
      </div>
</section>

<section class="wow fadeInUp conta">
<div>
    <img src="logo1.png" class="fl col-md-3">
    
<span>
<div class="col-md-3 d-inline-block container">

<h3>
<span><strong>Contact</strong></span>
</h3>
Phone : +918 710 5060<br>
Fax : +918 392 4555<br>
Email :info@painfreemedspa.com<br>
Address : 7307 S Yale Ave Tulsa, OK 74136<br>
Facebook : <a href="https://www.facebook.com/primemedspa/">Primemedspa</a><hr>
</div>

 <div class="col-md-3 d-inline-block">

<h2 class="fl-heading">
<span class="fl-heading-text"><strong>Opening</strong> Hours</span>
</h2>
<div class="col-md-5 d-inline-block">Monday	</div>
<div class="col-md-5 d-inline-block">
<time itemprop="opens" content="8:00 AM">8:00 AM</time> - <time itemprop="closes" content="8:00 PM">8:00 PM</time></div>
<div class=" col-md-5 d-inline-block">
<link itemprop="dayOfWeek">Tuesday</div>
<div class=" col-md-5 d-inline-block">
<time itemprop="opens" content="8:00 AM">8:00 AM</time> - <time itemprop="closes" content="8:00 PM">8:00 PM</time></div>
<div class="col-md-5 d-inline-block">
<link itemprop="dayOfWeek" href="https://schema.org/Wednesday">Wednesday</div>
<div class="col-md-5 d-inline-block">
<time itemprop="opens" content="8:00 AM">8:00 AM</time> - <time itemprop="closes" content="8:00 PM">8:00 PM</time></div>
<div class="col-md-5 d-inline-block">
<link itemprop="dayOfWeek" href="https://schema.org/Thursday">Thursday</div>
<div class="col-md-5 d-inline-block">
<time itemprop="opens" content="8:00 AM">8:00 AM</time> - <time itemprop="closes" content="8:00 PM">8:00 PM</time>			</div>
<div class="col-md-5 d-inline-block">
<link itemprop="dayOfWeek" href="https://schema.org/Friday">Friday</div>
<div class="col-md-5 d-inline-block">
<time itemprop="opens" content="8:00 AM">8:00 AM</time> - <time itemprop="closes" content="8:00 PM">8:00 PM</time>			</div>
<div class="col-md-5 d-inline-block">Saturday</div>
<div class="col-md-5 d-inline-block">
<time itemprop="opens" content="11:00 AM">11:00 AM</time> - <time itemprop="closes" content="5:00 PM">5:00 PM</time>			</div>
<div class="fl-rich-text">
<b>Sunday by appointment only.</b>
</div>
</div>
    </span>
</div>
</section>

<footer class="page-footer font-small special-color-dark bg-dark">
 <div class="footer-copyright text-center text-white p-1">© 2018 Copyright |
      <a href="https://www.upwork.com/freelancers/~017565024bc78aeede"> Abdullah Mamun</a>
    </div>
 </footer>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
