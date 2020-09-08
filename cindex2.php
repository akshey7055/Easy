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
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
         height: 200px;
         cursor: pointer;
         backface-visibility: visible;
         }
         .anim-front{
         transform-style: preserve-3d;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: black;
           animation-fill-mode: forwards;
         animation-name: front;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-back {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: Black;
         animation-name: back;
         animation-duration: 3s;
           animation-fill-mode: forwards;
         animation-iteration-count: 1;
         }
         .anim-page1 { 
         transform-style: preserve-3d;
         position: absolute;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #efefef;
         animation-name: example1;
           animation-fill-mode: forwards;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-page2 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #efefef;
           animation-fill-mode: forwards;
         animation-name: example2;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-page3 {
         transform-style: preserve-3d;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #f5f5f5;
           animation-fill-mode: forwards;
         animation-name: example3;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-page4 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #f5f5f5;
           animation-fill-mode: forwards;
         animation-name: example4;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-page5 {
         transform-style: preserve-3d;
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #fafafa;
           animation-fill-mode: forwards;
         animation-name: example5;
         animation-duration: 3s;
         animation-iteration-count: 1;
         }
         .anim-page6 {
         border-bottom-right-radius: .5em;
         border-top-right-radius: .5em;
         transform-style: preserve-3d;
         position: absolute;
         width: 130px;
         height: 90%;
         top: 0; left: 0;
         transform-origin: left center;
         transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
         background: #fdfdfd;
         animation-name: example6;
         animation-duration: 3s;
           animation-fill-mode: forwards;
         animation-iteration-count: 1;
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
         .link{
               border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;

             background-color:#4edbd0;
         }
         .link:hover{
             background-color:#30BDB2;
         }
      </style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169332400-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169332400-1');
</script>


   </head>
   <body class="is-preload">
      <!-- Header -->
      <header id="header">
         <a class="logo" href="../../index.html">Easybooks</a>

         <nav>
 <a href="home2.html">Back</a>   
          </nav>
         <nav>
            <a href="#menu">Menu</a>
         </nav>
      </header>
      <!-- Nav -->
      <nav id="menu">
         <ul class="links">
            <li><a href="dashboard/examples/career.php">Web Development</a></li>
            <li><a href="dashboard/examples/career2.php">Marketing</a></li>
			<li><a href="dashboard/examples/career3.php">Campus Ambassador</a></li>
			<li><a href="dashboard/examples/career4.php">Content</a></li>
			<li><a href="dashboard/examples/career5.php">Graphics</a></li>
			<li><a href="dashboard/examples/career6.php">SEO</a></li>
         </ul>
      </nav>
      <!-- Banner -->
      <!-- Highlights -->
      <section class="wrapper">
         <div class="inner">
            
            <div class="anim">
               <div class="anim-book">
                  <div class="anim-back"></div>
                  <div class="anim-page6">
                     <h4><br><b>Unlock</b><br><b>Your</b><br> <b>Journey</b><br> <b>With</b><br> <b>EasyBooks</b></h4>
                  </div>
                  <div class="anim-page5"></div>
                  <div class="anim-page4"></div>
                  <div class="anim-page3"></div>
                  <div class="anim-page2"></div>
                  <div class="anim-page1"></div>
                  <div class="anim-front">
                     <h4 style="text-align:center; color:white;">              <b style="text-align:center; color:white;"><br><br>Career</b><br><b style="text-align:center; color:white;">At</b> <br><b style="text-align:center; color:white;">Easybooks</b></h4>
                  </div>
               </div>
            </div><br>
<!--
    <img src="./logo.png" style="width:50%;  display: block;
  margin-left: auto;
  margin-right: auto;
">
-->
            <div id="about">
            <header class="special">
                  <h2 style="text-align:center"><b>Start Your Journey With Easybooks</b></h2>
            </header>
            <div style="text-align:center">
            <p>Think you fit in? Want to get real experience? We are also looking for college students to get on board with us.
Look for jobs here that suit your interests and we will surely get back to you.</p>
            </div>
            </div>
            <br>
<br>
<br>
                
            <br>
               <header class="special">
               <h2><b>Internships We Provide</b></h2>
              
            </header>
            <div class="highlights">
               <section>
                  <div class="content">
                     <header>
                     <img src="webd.jpeg" alt="content" style="width:40%; height:20%;">
                     <br>
                        <h3>Web Development </h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                    <a href="dashboard/examples/career.php">
                     <div class="link">
                     Apply
                    </div>
                  </a>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <header>
                     <img src="marketing.jpeg" alt="content" style="width:40%; height:20%;">
                        <br>
                        <h3>Marketing</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <a href="dashboard/examples/career2.php">
                        <div class="link">
                     Apply
                    </div>
                    </a>
                  </div>
               </section>
               <section>
				<div class="content">
                     <header>
                      <img src="campus.jpg" alt="content" style="width:40%; height:20%;">
                        <br>
                        <h3>Campus Ambassador</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <a href="dashboard/examples/career3.php">
                     <div class="link">
                     Apply
                    </div>
                    </a>
                </div>
			    </section>
                <section>
                  <div class="content">
                     <header>
                      <img src="content.jpeg" alt="content" style="width:40%; height:20%;">
                        <br>
                        <h3>Content</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <a href="dashboard/examples/career4.php">
                     <div class="link">
                     Apply
                    </div>
                    </a>
                  </div>
                  </section>
                  <section>
                  <div class="content">
                     <header>
                    <img src="graphics.jpeg" alt="content" style="width:70%; height:35%;">
                        <br>
                        <h3>Graphics</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <a href="dashboard/examples/career5.php">
                     <div class="link">
                     Apply
                    </div>
                    </a>
                  </div>
               </section>
               <section>
                  <div class="content">
                     <header>
                    <img src="seo.jpeg" alt="content" style="width:40%; height:20%;">
                        <br>
                        <h3>SEO</h3>
                     </header>
                     <hr style="width: 100%; text-align: right; margin-right: 0;">
                     <a href="dashboard/examples/career6.php">
                     <div class="link">
                     Apply
                    </div>
                    </a>
                  </div>
               </section>
             </section>
                            
               </div>
               </div>
            </div>
                  <div class="float-class">
         <div class="float">
            <a href="https://wa.me/919837910699" target="_blank"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"></a>
         </div>
	  </div>
            <!-- The Modal -->
      <!-- Footer -->
		<footer class="footer-distributed" style="bottom:0;">

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
	<form method="POST" action="cindex.php">
					<h4><span><font size="3" family="new times roman"> <b style="color:white;">Subscribe to Newsletter</b></font></span></h4>
					<input type="text" style="background-color:white;" placeholder="Enter Your Email">
					<br>
					<center><input type="submit" style="background-color:white;" value="Submit"></center>
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
