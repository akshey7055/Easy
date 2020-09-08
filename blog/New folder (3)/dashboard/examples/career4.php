<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
 
  <title>
    EasyBooks
  </title>
  <!--     Fonts and icons     -->
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
<body class="">
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Internship Application</h4>
                  <!--<p class="card-category">---By EasyBooks</p>-->
                </div>
                <div class="card-body">
                  <form method="POST" action="values2.php" enctype="multipart/form-data">
                     <div class="col-md-4">
                        <div class="form-group">
                            <!--<label class="bmd-label-floating">Name</label>-->
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name..">
                        </div>
                      </div>
            
                      <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Email Address</label>-->
                          <input type="email" class="form-control" id="emailid" name="emailid"  placeholder="Email Id..">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Mobile Number</label>-->
             <input type="text" class="form-control"  id="mnumber" name="mnumber" placeholder="Mobile Number..">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">College Name</label>-->
                          <input type="text" id="college"  placeholder="College Name.." name="college" class="form-control">
                        </div>
                      </div>
                                            <div class="col-md-4">
                        <div class="form-group">
                         <!-- <label class="bmd-label-floating">Year</label>-->
                          <input type="text" id="year"  placeholder="Year.." name="year" class="form-control">
                        </div>
                      </div>
                                            <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Please Share Your Resume Link</label>-->
                          <input type="text" id="skills"  placeholder="Please Share Your Resume Link.." name="skills" class="form-control">
                        </div>
                      </div>
                                            <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Position</label>-->
                          <select id="position"  name="position" class="form-control">
                              <option value="Content" selected>Content</option>
                             <option value="Marketing">Marketing</option>
                              <option value="SEO">SEO</option>
                              <option value="Campus Ambassador">Campus Ambassador</option>
                              <option value="Web Development">Web Development</option>
                              <option value="Graphics">Graphics</option>
                              </select>
                              
                        </div>
                      </div>
                                            <div class="col-md-4">
                            <script>
          function cat()
          {
              var i,l;
              var a=0,b=0,c=0,d=0,f=0;
              var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              var name= document.getElementById("name").value;
              var email= document.getElementById("emailid").value;
              var contact= document.getElementById("mnumber").value;
              var college= document.getElementById("college").value;
              var year= document.getElementById("year").value;
                             for(i=0;i<1;i++)
              {
                  if(college.length!="0")
                  {
                      f=1;
                      break;
                  }
                  else
                  {
                      alert("Please Make Sure You Enter Your College Name")
                  } 
              }
               for(i=0;i<1;i++)
              {
                  if(year.length!="0")
                  {
                      d=1;
                      break;
                  }
                  else
                  {
                      alert("Please Make Sure You Enter Your College Year")
                  } 
              }
                             
              for(i=0;i<1;i++)
              {
                  if(name.length!="0")
                  {
                      a=1;
                      break;
                  }
                  else
                  {
                      alert("Please Make Sure You Enter Your Name ")
                  } 
              }
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
                      b=1;
                      break;
                  }
              }
              for(i=0;i<1;i++)
              {
                  if(isNaN(contact))
                  {
                      alert("Only Number Are Allowed In Mobile Number")
                  }
                  else if(contact.length=="0")
                  {
                      alert("You Don't Enter Any Number In Mobile Number")
                  }
                  else if(contact.length=="10")
                  {
                      c=1;
                      break;
                  }
                  else if(contact.length>"10")
                  {
                      alert("Length Of Contact Number Is More Than 10")
                  }
                  else if(contact.length<"10")
                  {
                      alert("Insufficient Length Of Mobile Number")
                  }
              }
             
              if((a==1) && (f==1) && (b==1) && (c==1) && (d==1)
              {
                  return true;
              }
              
              return false;
          } 
        </script>
                    <input type="submit" onclick="return cat()" name="submit" class="btn btn-primary pull-right" value="Register">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
    
</body>

</html>