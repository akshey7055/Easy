<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
#$id=$_POST['t1'];
#if($id!="")
#{
#echo "<script>localSession.setItem('t1', $id)</script>";
#}
$c=0;
$a=0;
if($a==0)
{
    session_start();
    $id=$_SESSION['id'];
    $c=$_SESSION['c'];
    if($c!=2)
    {
        echo "<script>alert('Sign In First')
      window.location.replace('./dashboard/examples/signin.php')</script>";
    }
}
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
                }    
#    echo "<script>$id=localSession.getItem('t1')</script>";
        $first ="SELECT first_name FROM books WHERE id = '$id'";
        $firstresult = mysqli_query($conn ,$first);
        $firstrow = mysqli_fetch_assoc($firstresult);
        $second ="SELECT last_name FROM books WHERE id = '$id'";
        $secondresult = mysqli_query($conn ,$second);
        $secondrow = mysqli_fetch_assoc($secondresult);
        $email ="SELECT email FROM books WHERE id = '$id'";
        $emailresult = mysqli_query($conn ,$email);
        $emailrow = mysqli_fetch_assoc($emailresult);
        $contact ="SELECT contact_no FROM books WHERE id = '$id'";
        $contactresult = mysqli_query($conn ,$contact);
        $contactrow = mysqli_fetch_assoc($contactresult);
  mysqli_close($conn);
?>
<!DOCTYPE HTML>
<!--
   Industrious by TEMPLATED
   templated.co @templatedco
   Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
   -->
<html>
   <head>
      <title>EasyBooks</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./rel.css">
      <link rel="stylesheet" href="assets/css/main.css" />
      	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="footer.css">
      <style type="text/css">

.columns {
  float: left;
  width: 42%;
  padding: 8px;
  left:20px;
  position:relative;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.columns2 {
  float: right;
  width: 42%;
  padding: 8px;
  right:20px;
  position:relative;

}

.price2 {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}
.price2:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price2 .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price2 li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price2 .grey {
  background-color: #eee;
  font-size: 20px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
    left:0;
  }
}

@media only screen and (max-width: 600px) {
  .columns2 {
    width: 100%;
    right:0;
  }
}

@media only screen and (max-width: 600px) {
    .columns {
        right:0;
        width: 100%;
    }
}

         .log1{background-color: white;
         color: black;
         border: 2px solid #4CAF50;
         padding: 15px 32px;
         text-align: center; 
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 30%;
         }
         .log2{background-color: white;
         color: black;
         border: 2px solid #f44336;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 30%;
         }
         .log1:hover{background-color: #4CAF50;
         color: white;
         border: 2px solid black;
         padding: 15px 32px;
         text-align: center; 
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 20%;
         }
         .log2:hover{background-color: #f44336;
         color: white;
         border: 2px solid black;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 4px 2px;
         cursor: pointer;
         border-radius: 20%;
         }
         .float-class{
         padding: 0;
         margin: 0;
         }
         .float {
         position: fixed;
         width: 60px;
         height: 60px;
         bottom: 40px;
         right: 40px;
         z-index:1;
         background-color: none;
         text-align: center;}
         .my-float {
         margin-top: 22px;
         }
         .map-responsive{
         overflow:hidden;
         padding-bottom:56.25%;
         position:relative;
         height:0;
         }
         .map-responsive iframe{
         left:0;
         top:0;
         height:100%;
         width:100%;
         position:absolute;
         }
         .anim {
         width: 100%;
         height: 100%;
         text-align:center;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .anim-book {
         transform-style: preserve-3d;
         position: relative;
         height: 230px;
         cursor: pointer;
         backface-visibility: visible;
         }
         .anim-front{
         transform-style: preserve-3d;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: black;
         animation-name: front;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-back {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: Black;
         animation-name: back;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page1 { 
         transform-style: preserve-3d;
         position: absolute;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #efefef;
         animation-name: example1;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page2 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #efefef;
         animation-name: example2;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page3 {
         transform-style: preserve-3d;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #f5f5f5;
         animation-name: example3;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page4 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #f5f5f5;
         animation-name: example4;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page5 {
         transform-style: preserve-3d;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #fafafa;
         animation-name: example5;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         .anim-page6 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 155px;
         height: 100%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #fdfdfd;
         animation-name: example6;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         }
         @keyframes front {
         from{
         }
         to{
         transform: rotateY(-160deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);  
         }
         }
         @keyframes example1 {
         from{
         }
         to{
         transform: rotateY(-150deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes example2 {
         from{
         }
         to{
         transform: rotateY(-30deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes example3 {
         from{
         }
         to{
         transform: rotateY(-140deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes example4 {
         from{
         }
         to{
         transform: rotateY(-40deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes example5 {
         from{
         }
         to{
         transform: rotateY(-130deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes example6 {
         from{
         }
         to{
         transform: rotateY(-50deg) scale(1.1);
         box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
         }
         }
         @keyframes back {
         from{
         }
         to{
         transform: rotateY(-20deg) scale(1.1);
         }
         }
         .lg{
             width:40%;  display: block;
  margin-left: auto;
  margin-right: auto;
         }
         @media only screen and (max-width: 600px) {
    .lg {
 width:80%;  display: block;
  margin-left: auto;
  margin-right: auto;    }
}
         @media only screen and (max-width: 750px) {
         #hid {
         display: none;
         }
         }
.gif{
    width:75%;
}
         @media only screen and (max-width: 750px) {
         .gif {
         width: 100%;
         }
         }
         #siz{
 font-size:40px;
         }
         @media only screen and (max-width: 750px) {
         #siz {
         font-size:35px;
         }
         }
      </style>
             <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169332400-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169332400-1');
</script>



   </head>
   <body class="is-preload" bgcolor="white">
       <!--
        onload="setTimeout(display, 25000);"
      -->
      <!-- Header -->
      <header id="header">
         <a class="logo" href="index.html">Easybooks</a>
         <nav>

          </nav>
         <nav>
            <a href="#menu">Menu</a>
         </nav>
      </header>
      <!-- Nav -->
      <nav id="menu">
         <ul class="links">
    <!--
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
		-->
          <li><a href="dashboard/examples/dashboard.php">DashBoard</a></li>
        	<li><a href="#cont">Contact Us</a></li>
			<li><a href="theeasybooks.com/faq.html">FAQ's</a></li>
			<li><a href="cindex2.php">Career</a></li>
         </ul>
      </nav>
      <!-- Banner -->
      <section id="banner">
         <div class="inner">
            <h1><img src="./logo.png" class="lg"></h1>
            <p></p>
         </div>
         <video autoplay loop muted playsinline src="easybooks.mp4"></video>
      </section>
      <!-- Highlights -->
      <section class="wrapper" id="about">
         <div class="inner">
             <!--
            <div class="anim">
               <div class="anim-book">
                  <div class="anim-back"></div>
                  <div class="anim-page6">
                     <h4><br><br><br><b>Books At</b><br> <b>Door, Knowledge</b><br> <b>At Core</b></h4>
                  </div>
                  <div class="anim-page5"></div>
                  <div class="anim-page4"></div>
                  <div class="anim-page3"></div>
                  <div class="anim-page2"></div>
                  <div class="anim-page1"></div>
                  <div class="anim-front">
                     <h4 style="text-align:center; color:white;">                         <br><br><br> <br><b style="text-align:center; color:white;">Easybooks</b></h4>
                  </div>
               </div>
            </div>
    -->
            <b>
               <div>
                   <header class="special">
                  <h2 style="text-align:center"><b>About Us</b></h2>
            </header>
            <p>
            We provide a low-cost solution to all your semester exam problems, light on your pocket. We offer a hassle-free delivery and are a one-stop-shop for your academic books. Having faced problems arranging for textbooks ourselves we came up with a solution, with a goal to make textbooks available and affordable for every student. With the requirement of multiple readings, many of us spend money on expensive books without using them much. EasyBooks provides you with a platform to acquire these readings and books with our 24*7 support assistant commitment to serving customers.
<div style="text-align:center">
    <br>
            <a href="#pri"><button class="button" ><span>Prices</span></button></a>
            <button class="button" id="myBtn"><span>Contact Us </span></button>
            </div>
            </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                  <div class="modal-header">
                     <span class="close" style="color:white;"><font color="white">&times;</font></span>
                     <h2 style="color:white;"><b><font color="white">Contact Us</font> </b></h2>
                  </div>
                  <div class="modal-body">
                                <p><span class="glyphicon glyphicon-phone">Call: </span><a href="https://wa.me/919149367276" style="text-decoration:none; color:black;"> +919149367276 </a></p>
              <p><span class="glyphicon glyphicon-envelope"> Email: </span><a href="mailto:info@theeasybooks.com" style="text-decoration:none; color:black;">  info@theeasybooks.com</a></p>
                  </div>
                  <div class="modal-footer">
                    <!-- <h5>We'll get back to you within 24 hours</h5>-->
                  </div>
               </div>
            </div>
            <br>
            <hr id="services" style="width: 100%; text-align: right; margin-right: 0;">
            <br>
            <header class="special" >
               <h2><b>SERVICES</b></h2>
               <p>What we offer</p>
            </header>
            <div class="highlights">
               <section>
                  <div class="content">
                     <header>
                        <a class="fa fa-truck" style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>Door-to-Door Delivery </h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Rent books at efficient cost</p>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <header>
                        <a class="glyphicon glyphicon-ok " style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>Availability</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Easy availability of all kind of academic books</p>
                  </div>
               </section>
               <section>
<div id="services">
				<div class="content">
                     <header>
                        <a class="glyphicon  glyphicon-refresh " style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>Quick Exchange</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Promised quick exchange and return</p>
				  </div>
					</div>
               </section>
               <section id="hid">
                  <div class="content">
                     <header>
                        <a class="glyphicon  glyphicon-star " style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>Special Offers</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Get discounted coupons of various outlets.</p>
                  </div>
               </section>
               <section id="hid">
                  <div class="content">
                     <header>
                        <a class="glyphicon glyphicon-leaf " style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>24x7 Assistance</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Need any help? Call us anytime.</p>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <header>
                        <a class="glyphicon glyphicon-book" style="font-size:50px;"><span class="label"></span></a>
                        <br>
                        <br>
                        <br>
                        <h3>Books</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <p>Get unlimited books.</p>
                  </div>
               </section>
            </div>
            </b>
    	</div>
    	
	<!--
		<br>
	<br>
	<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
-->	<!-- CTA -->
            <hr style="width: 80%;margin-right: auto; margin-left:auto;">

            <header class="special">
               <br>
               <h2><b>How It Works</b></h2>
            </header>
<center>
     <video autoplay muted src="adds.mp4" class="gif">
     </video>
</center>
<br>
            <hr style="width: 80%;margin-right: auto; margin-left:auto;">
<br>
         <div class="inner">
             <header class="special">
            <h2><b>Message to Parents</b></h2>
            </header>
            <p style="font-size:16px;"><b>Learning is pivotal for a student’s success in academics and life. The digital age is deeply shaping the way students learn and will also determine their future prospects but it’s no match for good old books. BUT, sometimes it could be hard on the pocket of students.
This is where we come in
As parents, you understand better why a student needs books. Gift our subscription to your child and help them get a load off their back.
Take a look at our subscription prices, ping us and we will get back to you.</b>
<!--
<br>

<b>This is where we come in. having faced similar problems while arranging books in our college and determined to come up with a solution, we came up with this start-up.</b>
<br>
<b>WE PROVIDE UNLIMITED BOOKS FOR A FIXED FEE.</b>
<br>
<b>As parents, you understand better why a student need books even if they don’t understand it yet. Gift our subscription to your child and help them get a load off their back.</b>
<br>
<b>Take a look at our subscription prices, ping us and we will get back to you.</b>
    -->
            </p>
         </div>

      <br>
         <!--<h2 class="text-center"><b>How It Works</b></h2>

      <div>-->
           <!--style="background-color:white; width:80%;"-->
    <!-- <p style="font-size:16px; font-face:arial; margin-right:auto; margin-left:auto;"><b>Make a one time payment of Rs.2000</b><br>
<b>Get 5 books delivered at your door</b><br>
<b>You can exchange your books</b><br>
<b>When you are done with them</b><br>
<b>For free</b> <br>
<b>We Will pick them up</b><br>
<b>All for Rs. 500 per semester</b></p>
</div>
<br>--><br id="pri">
            <hr style="width: 80%;margin-right: auto; margin-left:auto;">

<div class="inner">
	  <h2 class="text-center"><b>Prices</b></h2>
<br>
<div class="columns">
    <br>
  <ul class="price">
    <li class="header" style="background-color:#B22A33;">Basic</li>
    <li class="grey">Rs. 2000, Subscription Fee</li>
<!--
    <li class="grey">₹ 2000/ 4 years</li>
    -->
    <li>₹ 500/Sem</li>
    <li>Refurbished Books</li>
        <li>Unlimited Books</li>
    <li>Free Exchange And Delivery</li>
    <li class="grey" ><a href="https://wa.me/919149367276?text=Hi,%20i%20want%20to%20know%20more%20about%20your%20subscription">    Buy This Subscription</a></li>
  </ul>
</div>

<div class="columns2">
    <br>
  <ul class="price2">
    <li class="header" style="background-color:#B22A33;">Pro</li>
    <li class="grey">Rs. 4000, Subscription Fee</li>
    <!--
    <li>₹ 4500/ 4 years</li>
    -->
    <li>₹ 1500/Sem</li>
    <li>New Books</li>
        <li>Unlimited Books</li>
    <li>Free Exchange and Delivery</li>
<li class="grey"><a href="https://wa.me/919149367276?text=Hey,%20i%20want%20to%20know%20more%20about%20your%20subscription">    Buy This Subscription</a></li>

  </ul>
</div>
</div>
<br>
</section>
	  <br>
	  

	  <!-- Testimonials 
 
	   <section class="wrapper">
         <div class="inner">
            <header class="special">
               <br>
               <h2>Team</h2>
            </header>
            <div class="testimonials">
               <section>
                  <div class="content">
                     <blockquote>
                        <p>This Is Archit, And I'll Share My Words With You Here.</p>
                     </blockquote>
                     <div class="author">
                        <div class="image">
                           <img src="archit.jpg" alt="" />
                        </div>
                        <p class="credit">- <strong>Archit</strong> <span>CEO - Easybooks.</span></p>
                     </div>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <blockquote>
                        <p>This Is Varshit, And I'll Share My Words With You Here.</p>
                     </blockquote>
                     <div class="author">
                        <div class="image">
                           <img src="varshit.jpg" alt="" />
                        </div>
                        <p class="credit">- <strong>Varshit</strong> <span>CEO - Easybooks.</span></p>
                     </div>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <blockquote>
                        <p>This Is Akshey, And I'll Share My Words With You Here.</p>
                     </blockquote>
                     <div class="author">
                        <div class="image">
                           <img src="akshey2.jpg" alt="" />
                        </div>
                        <p class="credit">- <strong>Akshey Arora</strong> <br><span>Web Development Head - Easybooks.</span></p>
                     </div>
                  </div>
               </section>
            </div>
         </div>
	  </section>
-->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

      <div class="float-class">
         <div class="float">
            <a href="https://wa.me/919149367276" target="_blank"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"></a>
         </div>
	  </div>
	              <hr style="width: 80%;margin-right: auto; margin-left:auto;">

	<section class="wrapper">
         <div class="inner">
<header class="special">
			<h2 style="text-align: center; font-size: 30px;color: #2A3C4A;font-weight: bolder;letter-spacing: -1px; font-family: 'Montserrat',Futura,Century Gothic,CenturyGothic,AppleGothic,sans-serif, sans-serif; color:#4CAF50"><b>Our Happy Customers</b></h2>
</header>
		<div class="row counters" style="width:100%;">
			<div class="col-lg-3 col-6 text-center"  style="width:32%;">
				<font style="font-size: 20px;"><b>Over</b></font><br>
				<span class="counter-up" id="siz"><b><font color="#fb4918"><span class="count">2500</span></font></b></span><br>
				<font style="font-size: 18px;"><b>Customers</b></font>
			</div>
			<div class="col-lg-3 col-6 text-center" style="width:32%;">
				<font style="font-size: 20px;"><b>In</b></font><br>
				<span class="counter-up" id="siz"><b><font color="#0082a5	">30</font></b></span><br>
				<font style="font-size: 18px;"><b>Colleges</b></font>
			</div>
			<div class="col-lg-3 col-6 text-center" style="width:32%;">
				<font style="font-size: 20px;"><b>Provided</b></font><br>
				<span class="counter-up" id="siz"><b><font color="#fb9800">30000</font></b></span><br>
				<font style="font-size: 18px;"><b>Books</b></font>
			</div>
		</div>
	</div>
</section>

<!--
	  <div class="container container-padd">
        <br id="cont">
        <header class="special">
         <h2 class="text-center"><b>CONTACT</b> </h2>
		 </header>
		 <hr style="width: 100%; text-align: right; margin-right: 0;">
          <!--
              <p><a href="" style="text-decoration:none;">Contact us and we'll get back to you within 24 hours.</a></p>
              
              <p><span class="glyphicon glyphicon-map-marker"></span><a href="" style="text-decoration:none;color:black;"> EasyBooks</a></p>
              <p><span class="glyphicon glyphicon-phone"></span><a href="https://wa.me/919149367276" style="text-decoration:none; color:black;"> +919149367276 </a></p>
              <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:info@theeasybooks.coml.com" style="text-decoration:none; color:black;"> info@theeasybooks.com</a></p>
			  <hr style="width: 100%; text-align: right; margin-right: 0;">
</div>

            <br>
<br>
<br>
<br>
<br>
<br>
      <br>
-->
      <!-- Footer -->
      </section>
    		<footer class="footer-distributed">

			<div class="footer-left">

				<h4><a class="logo" style="color:white;text-underline:none;"><font size="4" family="new times roman"> <b style="color:white;">Easy<span>Books</span></b></font></a></h4>
				<h4 class="footer-links">
					<font size="3px" family="Times New Roman"><a href="#about">About Us</a>
					·
					<a href="#services">Services</a>
					·
					<a href="./cindex.php">Career</a>
					
					<br>
					<a href="#">Faq</a>
					·
					<a href="#">Articles</a>
					·
					<a href="#pri">Prices</a></font>
				</h4>
<!--
				<p class="footer-company-name"><center style="color:white;">EasyBooks &copy; 2020</center></p>
	-->
				<div class="footer-icons">

					<a href="https://www.facebook.com/EasyBooks.in/"><i class="fa fa-facebook"></i></a>
					<a href="https://instagram.com/easybooks.in?igshid=1f2u3hc7xls41"><i class="fa fa-instagram"></i></a>
					<a href="https://www.linkedin.com/company/42812851"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>

			<div class="footer-center">
<!--
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Delhi, India</p>
				</div>
					<i class="fa fa-map-marker"></i>

-->
				
					<h4><p><span><font size="4" family="new times roman">      <b style="color:white;">Contact Us</b></font></span></p></h4>
				<div>
					<i class="fa fa-phone"></i>
					<p><span><a href="https://wa.me/919149367276" style="color:white;">+91 9149367276</a></span></p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:info@theeasybooks.com" style="color:white;"><span>info@theeasybooks.com</span></a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
				    	<form method="POST" action="newsletter3.php">
					<h4><span><font size="3" family="new times roman"> <b style="color:white;">Subscribe to Newsletter</b></font></span></h4>
					<input type="text" style="background-color:white;" id="emailid" name="emailid" placeholder="Enter Your Email">
					<br>
					<script>
					    function fun()
                                 {
                                   var i,l;
                                   var x=0;
                                   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                   var email= document.getElementById("emailid").value;
                                            
                                                for(i=0;i<1;i++)
                                   {
                                       if(email.length=="0")
                                       {
                                           alert('Please Provide Us Your Email Address');
                                       }
                                       else if (filter.test(email)==false) 
                                       {
                                           alert('Please Provide A Valid Email Address');
                                       }
                                       else if (filter.test(email)==true) 
                                       {
                                           x=1;
                                           break;
                                       }
                                   if(x==1)
                                   {
                                       return true;
                                   }
                                   
                                   return false;
                                  } 
                                 }    
					</script>
					<center><input type="submit" style="background-color:white;" onclick="return fun()" value="Submit"></center>
					</p>
</form>


			</div>

		</footer>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

      <script>
         $(document).ready(function(){
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
         	// Make sure this.hash has a value before overriding default behavior
         	if (this.hash !== "") {
         	  // Prevent default anchor click behavior
         	  event.preventDefault();
         
         	  // Store hash
         	  var hash = this.hash;
         
         	  // Using jQuery's animate() method to add smooth page scroll
         	  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
         	  $('html, body').animate({
         		scrollTop: $(hash).offset().top
         	  }, 900, function(){
            
         		// Add hash (#) to URL when done scrolling (default click behavior)
         		window.location.hash = hash;
         	  });
         	} // End if
           });
           
           $(window).scroll(function() {
         	$(".slideanim").each(function(){
         	  var pos = $(this).offset().top;
         
         	  var winTop = $(window).scrollTop();
         		if (pos < winTop + 600) {
         		  $(this).addClass("slide");
         		}
         	});
           });
         })
         
         // Get the modal
         var modal = document.getElementById('myModal');
         
         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");
         
         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         
         // When the user clicks the button, open the modal 
         btn.onclick = function() {
         	modal.style.display = "block";
         }
         
         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
         	modal.style.display = "none";
         }
         
         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
         	if (event.target == modal) {
         		modal.style.display = "none";
         	}
         }	
         
      </script>
      <script>
         function display(){
         document.getElementById('id01').style.display='block';
         }
           
      </script>
      <div class="w3-container">
         <div id="id01" class="w3-modal">
            <div class="w3-modal-content w3-card-4">
               <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'" 
                     class="w3-button w3-display-topright">&times;</span>
                  <h3 style="font-style:Arial ;">Header Or Subject</h3>
               </header>
               <div class="w3-container">
                  <br>
                  <p>
                     EasyBooks is a very humble start-up originated and operating in Thapar university, Patiala. As engineering students, we often faced difficulties arranging books to study, since money is tight when you are in hostel. hence, we came up with EasyBooks. we provide unlimited books for a semester at a very nominal membership fee of Rs. 750. currently, we have around 250 customers in our college and our looking to expand to colleges in Delhi-NCR. we are building a team of students from various colleges in Delhi-NCR who will represent EasyBooks in their respective campus. 
                     Hoping to connect with some dynamic student who like to take initiatives.
                     For more details contact - 9149367276
                  </p>
                  <!--<h3>This Is Made By Most Intelligent Akshey And Devansh,  Don't Thank Us It's Ok</h3>
                     <h3>Chal Ab Bhaag Ja Yaha Se</h3>
                     -->
                  <br>
               </div>
               <footer class="w3-container w3-teal">
                  <h3 style="font-style:Arial ;">Footer</h3>
               </footer>
            </div>
         </div>
      </div>
      <!-- Scripts -->
            <script>
         $(document).ready(function(){
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
         	// Make sure this.hash has a value before overriding default behavior
         	if (this.hash !== "") {
         	  // Prevent default anchor click behavior
         	  event.preventDefault();
         
         	  // Store hash
         	  var hash = this.hash;
         
         	  // Using jQuery's animate() method to add smooth page scroll
         	  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
         	  $('html, body').animate({
         		scrollTop: $(hash).offset().top
         	  }, 900, function(){
            
         		// Add hash (#) to URL when done scrolling (default click behavior)
         		window.location.hash = hash;
         	  });
         	} // End if
           });
           
           $(window).scroll(function() {
         	$(".slideanim").each(function(){
         	  var pos = $(this).offset().top;
         
         	  var winTop = $(window).scrollTop();
         		if (pos < winTop + 600) {
         		  $(this).addClass("slide");
         		}
         	});
           });
         })
         
         // Get the modal
         var modal = document.getElementById('myModal');
         
         // Get the button that opens the modal
         var btn = document.getElementById("myBtn");
         
         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         
         // When the user clicks the button, open the modal 
         btn.onclick = function() {
         	modal.style.display = "block";
         }
         
         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
         	modal.style.display = "none";
         }
         
         // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
         	if (event.target == modal) {
         		modal.style.display = "none";
         	}
         }	
         
      </script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>