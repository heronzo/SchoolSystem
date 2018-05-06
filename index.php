<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--make it resposive to screen size using bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scaled=1.0">
	<!--title> School Information Management System</title-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <style>
  .slide1 {
            background-image: url(Images/green.jpg);
            /* background-color: antiquewhite; */
            height: 300px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    .slide2 {
            background-image: url(Images/ix.jpg);
            /* background-color: antiquewhite; */
            height: 300px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    .slide3 {
            background-image: url(Images/cvr.jpg);
            /* background-color: antiquewhite; */
            height: 300px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    .carousel-caption h3,p{
                color:#ffffff;
        }
  </style>
</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">School IMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <!-- <header class="bg-primary text-white" style="height: 50px; padding: 0.01; ">
      <div class="container text-center" style="max-width: 1000px; max-height: 80px; padding:0.1; top:0.1 ">
        <h3> TXXXS School Information Management System </h3>
        <p> Progressively monitoring and managing education for success </p>
      </div>
 </header> -->
 <!-- slider container -->
        <div id="theCarousel" class="carousel slide" data-ride="carousel" style="width: 750px; margin:auto auto; padding-top:70px;">
            <ol class="carousel-indicators">
                <li data-target="#theCarousel" data-slide-to="0" class="active">
                </li>
                <li data-target="#theCarousel" data-slide-to="1">
                </li>
                <li data-target="#theCarousel" data-slide-to="2">
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <!-- <img class="d-block w-100" src="Images/cvr.jpg" alt="First slide"> -->
                <div class="slide1"></div>
                    <div class="carousel-caption">
                        <h3> TXXXS School Information Management System </h3>
                        <p> Progressively monitoring and managing education for success </p>
                        <p>
                            <a href="#" class="btn btn-primary btn-md">About Us</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                <!-- <img class="d-block w-100" src="Images/ix.jpg" alt="Second slide"> -->
                <div class="slide2"></div>
                    <div class="carousel-caption">
                        <h3> TXXXS School Information Management System </h3>
                        <p> Progressively monitoring and managing education for success </p>
                        <p>
                            <a href="#" class="btn btn-primary btn-md">About Us</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                <!-- <img class="d-block w-100" src="Images/imaes.jpg" alt="Third slide"> -->
                <div class="slide3"></div>
                    <div class="carousel-caption">
                        <h3> TXXXS School Information Management System </h3>
                        <p> Progressively monitoring and managing education for success </p>
                        <p>
                            <a href="#" class="btn btn-primary btn-md">About Us</a>
                        </p>
                    </div>
                </div>
                         <a class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
            </div>
        </div>
   <section id="Home">
      <div class="container" style="max-width: 750px; max-height: 700px; padding:0; top:0 ">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-sm-8 col-lg-4">
            Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
            Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
			</div>
			<div class="col-xs-12 col-md-6 col-sm-8 col-lg-4" style="">
            Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
            Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
            </div>
            <div class="col-xs-12 col-md-6 col-sm-8 col-lg-4">
            Case explicari vituperatoribus nam at, in alia inani duo. Qui ea tale aeterno conclusionemque. 
            Vim fabulas voluptua ut, in usu quod saepe. Has aeque tractatos eu.
			</div>
		</div>
      </div>
    </section>
    <div class="footer fixed-bottom" style="background-color:#000000;height:50px;">
    <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
			</div>
    <a href="#facebook">
    <img src="Images/f1.png" style="width:30px; height:30px;float:left;padding-top:15px;">
    </a>
    <a href="#twitter">
    <img src="Images/t1.png" style="width:30px; height:30px;float:left; padding-top:15px;">
    </a>
    <a href="#linkdin">
    <img src="Images/l1.png" style="width:30px; height:30px;float:left; padding-top:15px;">
    </a>
    <h5 style="text-align:center;color:#FFFFFF;font-size:15px; padding-top:15px;">Copyright @ 2018 XYZ</h5>
    <h5 style="text-align:right;color:#FFFFFF;font-size:15px; padding-top:15px;">Email: contactus@xyz.co.ke</h5>
    </div>
<!--load javascript at the bottom of the page-->
<!--load javascript jquery first because bootstrap uses jquery-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
      cycle: true
    })
  });    
</script>
</body>
</html>