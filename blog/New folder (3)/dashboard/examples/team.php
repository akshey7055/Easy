<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
Our Team  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169373037-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169373037-1');
</script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
      <a href="../../index.html" class="simple-text logo-mini">
        <img src="logo.png" style="height: 100%;width:100%">
      </a>
      <a href="../../index.html" class="simple-text logo-normal">
        Notes Pickup
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li>
          <a href="./dashboard.html">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="./profile.php">
            <i class="now-ui-icons users_single-02"></i>
            <p>Profile</p>
          </a>
        </li>
        <li>
          <a href="./notes.html">
            <i class="now-ui-icons education_atom"></i>
            <p>Notes</p>
          </a>
        </li>
<!--
        <li>
          <a href="./map.html">
            <i class="now-ui-icons location_map-big"></i>
            <p>Contact Us</p>
          </a>
        </li>
  -->
        <li>
          <a href="./notifications.html">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>Notifications</p>
          </a>
        </li>
        <li class="active">
          <a href="./team.html">
            <i class="now-ui-icons text_caps-small"></i>
            <p>Our Team</p>
          </a>
        </li>
        <li>
          <a href="./query.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Query</p>
          </a>
        </li>
        <li class="active-pro">
          <a href="">
            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
            <p>Career With Us</p>
          </a>
        </li>
      </ul>
    </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">Our Team</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Subscribe...">
                <div class="input-group-append">
                  <div class="input-group-text">
    <!--
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
        -->
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
<!--
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
    -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons ui-1_bell-53"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Notifications</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Notification 1</a>
                  <a class="dropdown-item" href="#">Notification 2</a>
                  <a class="dropdown-item" href="#">Notification 3</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>                  <p>
                    <span class="d-lg-none d-md-block">Profile</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="profile.php">Profile</a>
                  <a class="dropdown-item" href="../../index.html">Logout</a>
                </div>
              </li>
<!--
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
    -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Our Team</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                       First Name
                      </th>
                      <th>
                        Last Name
                      </th>
                      <th>
                        Branch
                      </th>
                      <th class="text-right">
                        College                        
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Amit
                        </td>
                        <td>
                          Yadav
                        </td>
                        <td>
                          B.Tech
                        </td>
                        <td class="text-right">
                          Malaviya National Institute of Technology (MNIT)
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Ankita
                        </td>
                        <td>
Chaudhary
                        </td>
                        <td>
B.Sc
                        </td>
                        <td class="text-right">
                          RCCV girls college Ghaziabad
                        </td>
                      </tr>
                      <tr>
                        <td>
Neeraj
                        </td>
                        <td>
                        </td>
                        <td>
B.Com(H)
                        </td>
                        <td class="text-right">
Banaras Hindu University
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Aayush
                        </td>
                        <td>
                          Khanna
                        </td>
                        <td>

                          B.Tech

                        </td>
                        <td class="text-right">
                        Amritsar College Of Engineering And technology
                        </td>
                      </tr>
                      <tr>
                        <td>
Akshita
                        </td>
                        <td>
       Sharma
                        </td>
                        <td>
B.Sc(H)
                        </td>
                        <td class="text-right">
Mata Sundri College For Women       
                        </td>
                      </tr>
                      <tr>
                        <td>
       Anand
                        </td>
                        <td>
            Shukla
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
IILM College Of Engineering And Technology
                        </td>
                      </tr>
                      <tr>
                        <td>
Navya
                        </td>
                        <td>
     Sen
                        </td>
                        <td>
B.Com(P)
                        </td>
                        <td class="text-right">
Gargi College
                        </td>
                      </tr>
                      <tr>
                        <td>
Lakshita
                        </td>
                        <td>
                        </td>

                        <td>
                          B.Sc(H)
        
                        </td>
                        <td class="text-right">
Miranda House        
                        </td>
                      </tr>
                      <tr>
                        <td>
        Anshul
                        </td>
                        <td>
        Sangal
                        </td>
                        <td>
BJMC
                        </td>
                        <td class="text-right">
  Maharaja Agrasen Institute Of Management Studies
                        </td>
                      </tr>
                      <tr>
                        <td>
  Shagun
                        </td>
                        <td>
        Raghav
                        </td>
                        <td>
BCA              
                        </td>
                        <td class="text-right">
    KCC Institute Of Legal And Higher Education          
                        </td>
                      </tr>
                      <tr>
                        <td>
              Alisha
                        </td>
                        <td>
                    Chunduri
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Chaitanya Bharathi Institute Of Technology                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Ritika
                        </td>
                        <td>
                          Chaudhary
                        </td>
                        <td>
BALLB
                        </td>
                        <td class="text-right">
  Gautam Budh University                      
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Prabhu Datt
                        </td>
                        <td>
                          Sharma
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Ajay Kumar Garg Engineering College
                        </td>
                      </tr>
                      <tr>
                        <td>
Aditya
                        </td>
                        <td>
                          Jain     
                        </td>
                        <td>
BBA
                        </td>
                        <td class="text-right">
Dr Akhilesh Das Gupta Institute Of Technology And Management                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Aditi
                        </td>
                        <td>
                        Trivedi
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Banasthali Vidyapith                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Arihant
                        </td>
                        <td>
                          Tyagi
                        </td>
                        <td>
B.Sc(H)
                        </td>
                        <td class="text-right">
       Ramjas College                 
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Aryan
                        </td>
                        <td>

                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
J.C. Bose University Of Science And Technology                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Aayushi
                        </td>
                        <td>

                        </td>
                        <td>
                        Mass Communication
                        </td>
                        <td class="text-right">
                        SGT University
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Deepanshu
                        </td>
                        <td>
                          Garg
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Maharaja Agrasen Institute Of Technology                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Manas
                        </td>
                        <td>
                          Gupta
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
                          IMS Engineering College
                        
                        </td>
                      </tr>
                      <tr>
                        <td>
                        Bhavesh
                        </td>
                        
                        <td>
                        Kumar
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Manav Rachna International Institute
                        </td>
                      </tr>
                      <tr>
                        <td>
Manisha 
                        </td>
                        <td>
        Chaudhary
                        </td>
                        <td>
B.Com(H)
                        </td>
                        <td class="text-right">
Janki Devi Memorial College
                        </td>
                      </tr>
                      <tr>
                        <td>
Bharti
                        </td>
                        <td>
Arya
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
Banasthali Vidyapith
                        </td>
                      </tr>
                      <tr>
                        <td>
Dinesh
                        </td>
                        <td>
Ram
                        </td>
                        <td>
BE
                        </td>
                        <td class="text-right">
Psna College Of Engineering And Technology
                        </td>
                      </tr>
                      <tr>
                        <td>
Esha
                        </td>
                        <td>
    Bhardwaj
                        </td>
                        <td>
BBA
                        </td>
                        <td class="text-right">
Mody University Of Science And Technology
                        </td>
                      </tr>
                      <tr>
                        <td>
Mansi
                        </td>
                        <td>
Dahiya
                        </td>
                        <td>
BBA
                        </td>
                        <td class="text-right">
Netaji Subhash University Of Technology
                        </td>
                      </tr>
                      <tr>
                        <td>
Uffan
                        </td>
                        <td>
Manzoor
                        </td>
                        <td>
B.Tech
                        </td>
                        <td class="text-right">
KIET Group Of Institutions
                        </td>
                      </tr>
                      <tr>
                        <td>
Aman
                        </td>
                        <td>
    Jaiswal
                        </td>
                        <td>
B.Com
                        </td>
                        <td class="text-right">
Dyal Singh College University Of Delhi
                        </td>
                      </tr>

                      <tr>
                        <td>
                        Keshav    
                        </td>
                        <td>
                            Agarwal
                        </td>
                        <td>
                            B.Tech
                        </td>
                        <td class="text-right">
                        Indian Institute Of Information Technology, Vadodara 
                        </td>
                      </tr>
<!--
                      <tr>
                        <td>
                        
                        </td>
                        <td>
                        
                        </td>
                        <td>
                        
                        </td>
                        <td class="text-right">
                        
                        </td>
                      </tr>
-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
<!--
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table on Plain Background</h4>
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
      <!--
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    -->
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>