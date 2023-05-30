<?php
include('connection.php');
session_start();
if(isset($_SESSION['uname']) && !empty($_SESSION['uname'])){
$sql = "select * from feedback";
$res = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>

.hed{
            color: white;
            padding-top: 300px;
            font-family: inherit;
            font-size: 25;

        }
.dropdown {
  position: relative; 
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: ;}
</style>
    <meta charset="UTF-8">
</head>

<body>
    
    <div class="nav-style">

        <nav class="navbar navbar-expand-sm fixed-top" id="mynav">
            <div class="container">
                <a class="navbar-brand nav-brand-style" href="#">
                    <h2 style="color: white; font-family: 'Lobster', cursive;">SMART CITY MANAGEMENT</h2>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="show.php">Show</a>
                        </li>
                                                 <li class="nav-item">
                            <a class="nav-link" href="info.html">infobook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feedback.php">Give Problem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                <a href=""><?php  echo '<a class="nav-link">Welcome '.$_SESSION['uname'].'</a>';?></a>
  
  <div class="dropdown-content">
     <a class="nav-link" href="logout.php">Logout</a>
    
  </div>
</div>
                           
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="hed">
            <h1 align="center" >CIVIC SUPPORT FOR SMART CITY </h1>
        </div>
    </div>
        <!--stats starts-->

    <div class="jumbotron jumbotron-fluid" style="text-align: center; margin-top: 70px;" id="stats">
        <h1 style="text-align: center;margin-bottom: 0px;font-weight: bold;">Smart city Community</h1>
        <br>
        <h6 style="color: #14b1bb;letter-spacing: -1px;font-weight: 700;margin-bottom:  25px;">HOW MANY PEOPLE WE'VE
            HELPED</h6>
        <div class="circle">
            <div class="number">4,321</div>
            <div class="dec">Problems</div>
        </div>
        <div class="circle">
            <div class="number">894</div>
            <div class="dec">Solutions</div>
        </div>
        <div class="circle">
            <div class="number">1,482</div>
            <div class="dec">Members</div>
        </div>
        <div class="circle">
            <div class="number">83</div>
            <div class="dec">Workers</div>
        </div>
    </div>
    <!--stats Ends-->
    <!--testinomial Start-->
    <div id="testimonial">
        <h1
             style="padding-top: 30px;text-align: center;color: white;letter-spacing: -0.05em;margin: 0;line-height: 1.1em;font-weight: 700">
            Problems</h1>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                    if(mysqli_num_rows($res) > 0){
                        $flag = 1;
                        while($row = mysqli_fetch_assoc($res)){
                          if($flag==1){
                            echo '<div class="carousel-item active">';
                            $flag=0;
                          }
                          else if($flag==0){
                            echo '<div class="carousel-item">';
                            
                          }
                          echo '<div class="container">
                          <div class="row">
                              <div class="col-lg-3">
                                  <img src="'.$row['img'].'" style="border-radius: 100%" height="280px" width="280px">
                                  <br><br>
                                  <h4 style="color: #fff;left:100px;position: relative;">'.$row['name'].'</h4>
                                  <br>
                                  <h4 style="color: #fff;left:100px;position: relative;">'.$row['location'].'</h4>

                              </div>
                              <div class="col-lg-9">
                                  <br><br><br>
                                  <center><p style="color: #fff;font-weight: 700">'.$row['msg'].'</p></center>
                              </div>
                          </div>
                      </div>
                      </div>';
                    }
                }
                ?>
                    
                
            </div>
        </div>

    </div>
    <!--testinomial Ends-->
    <!-- how work-->
    <br>
    <br>
    <div class="container">
        <h1 class="hrline" style="font-weight: bold; margin-bottom: 30px">How does we work</h1>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                 <p style="color: black; text-align: justify;">
                Traditionally, We give a platform for common man to share his/her technical knowledge, ideas & viewpoints to Municipal Corporation & also indulge in development of a city & India. We provide latest information & updates about developmental work done in to-besmart cities of India. We serve as a medium to convey thought, innovative ideas & knowledge to Municipality in respective localities. We fulfill the willingness to work on the site being constructed, contribute towards development & earn bread and butter.Platform to share ideas, both technical  & innovative, unlike complaint-generating apps. Strong inter-social communication starting from grass-roots to national level</p><br><br>

            </div>
            <div class="col-md-6 col-lg-6">
                <img src="images/raw.jpg" height="350px" width="600px">
            </div>
        </div>
    </div>
    <!--how work Ends-->
    

    
    <!--get an App-->
    <div id="getApp">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6">
                    <h2 class="hrline1" style="padding-top: 100px">Our Goal</h2><br>
                    <p style="color: black; text-align: justify;"> 
                    A Smart city is an urban area that uses different types of electronic Internet of Things (IoT) sensors to collect data and then use these data to manage assets and resources efficiently. This includes data collected from citizens, devices, and assets that is processed and analyzed to monitor and manage traffic and transportation systems, power plants, water supply networks, waste management, crime detection, information systems, schools, libraries, hospitals, and other community services.

                    The Smart city concept integrates information and communication technology (ICT), 
                    and various physical devices connected to the IoT network to optimize the efficiency 
                    of city operations and services and connect to citizens.</p><br>
                </div>
            </div>
        </div>
    </div>
    <!-- get an App Ends-->
    
    <div class="container">
        <h1 style="font-weight: bold;margin: 50px 0;" class="hrline">Features</h1>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-light mb-3 icon1" style="max-width: 18rem;">
                    <div class="card-header">Free of Cost</div>
                    <div class="card-body">
                        <h3 class="card-title"><i class="icon-st far fa-smile"></i></h3>
                        <p class="card-text">Applicants have to create their account and upload their problem photo for a
                            Better Future.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-light mb-3 icon1" style="max-width: 18rem;">
                    <div class="card-header">More Secure</div>
                    <div class="card-body">
                        <h3 class="card-title"><i class="icon-st fas fa-check"></i></h3>
                        <p class="card-text">Your profile is kept secured in the database of these websites which
                            implies you can lead your Improvement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card bg-light mb-3 icon1" style="max-width: 18rem;">
                    <div class="card-header">Instant Update</div>
                    <div class="card-body">
                        <h3 class="card-title"><i class="icon-st far fa-clipboard"></i></h3>
                        <p class="card-text">send notifications, emails, and messages to applicants and update of problem and their solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--Contact Us start-->
    <div id="contact">
        <div class="container">

            <div class="row">
                 <div class="col-lg-6">
                    <h1 class="hrline1"
                        style="color: black; padding-top: 70px;font-weight: bold;margin-bottom: 30px;letter-spacing: 0">
                        DROP US A SUGGESTION</h1>
                        <form method="POST" enctype="multipart/form-data" action="contact1.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Subject" name="sub1">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rw1"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h1 class="hrline1"
                        style="color: black;padding-top: 70px;font-weight: bold;margin-bottom: 30px;letter-spacing: 0">
                        VISIT OUR OFFICE</h1>
                    <p style="color: #fff" ><b>Rajkot</b></p>
                    <p style="color: #fff">RK Prime,360002<br>GUJRAT,INDIA</p>
                    <br>
                    <p style="margin-bottom: 0"><i class="fas fa-phone"></i><span style="color: #fff;"> &nbsp; +91
                            9876543210</span></p>
                    <p style="margin-bottom: 0"><i class="fas fa-fax"></i><span style="color: #fff;"> &nbsp; 02827 -
                        223344</span></p>
                    <p style="margin-bottom: 0"><i class="fas fa-envelope-open-text"></i><span style="color: #fff;">
                            &nbsp; smartcitymanagement@gmail.com</span></p>
                    <br>
                    <p style="margin-bottom: 0"><i class="far fa-clock"></i><span style="color: #fff;"> &nbsp; Mon-Fri
                            9am-5pm</span></p>
                    <p style="margin-bottom: 0"><i class="far fa-clock"></i><span style="color: #fff;"> &nbsp; Sat
                            10am-2pm</span></p>
                    <p style="margin-bottom: 0"><i class="far fa-clock"></i><span style="color: #fff;"> &nbsp; Sun
                            Closed</span></p>
                </div>
            </div>
        </div>
    </div>
    <!--Contact Us Ends-->
    <!--modal (login) starts-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #14b1bb;">
                    <h4 class="modal-title" id="exampleModalLabel" style="color: #fff;font-weight: bold;">Login here
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="login" class="box" onsubmit="return validateForm()" method="post" action="auth.php">
  <h1>Login</h1>
  <input type="text" id="uname" placeholder="Username" name="uname">
  
  <input type="password" name="psw" placeholder="Password" >
 
  <input type="submit" name="" value="Login">

</form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- modal Ends-->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #14b1bb;color: #fff;">
                    <h3 class="modal-title" style="font-weight: bold;">Register For free</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <nav class="ps">

                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Register As Employee</a>
                            <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Register As Company</a> -->
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="container">
                            <form class="box"  method="post" onsubmit="return validateForm()" action="Addemployee.php">
  <h1>Register</h1>
  <input type="text" id="uname"  placeholder="Username" name="uname">
  <input type="text" id="email" placeholder="Eneter Email" name="email">
  <input type="password" id="psw" placeholder="Password" name="psw">
  <input type="password" id="cpsw" placeholder="Confirm Password">
  <input type="submit" id="" value="Register">
</form>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <footer class="footer">
        <i class="fab fa-facebook icon"></i>
        <i class="fab fa-twitter-square icon"></i>
        <i class="fab fa-instagram icon"></i>
        <i class="fab fa-linkedin icon"></i>
        <i class="fab fa-skype icon"></i>
        <p> All rights reserved to &copy; <span style="color: #14b1bb;">SmartCityManagement.com</span></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/first.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var scroll_pos = 0;
        $(document).scroll(function() {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 300) {
                $("#mynav").removeClass('fifty').addClass('ninty');
            } else if (scroll_pos < 300) {
                $("#mynav").removeClass('ninty').addClass('fifty');
            } else {
                $("#mynav").removeClass('ninty').addClass('fifty');
            }
        });

    });
    </script>
    <script type="text/javascript">
    function formValidate() {
        var flag = true;
        var regExEmail = /^[a-z_A-Z0-9]+@[a-zA-Z.-]+\.[a-zA-Z]{2,7}$/;
        var regExPass =/^[a-zA-Z0-9@#$%^&*(){}|/-]{8,16}$/;
        
        if (!regExEmail.test(document.getElementById("email").value)) {
            document.getElementById("err").style.visibility = "visible";
            flag = false;
        } else {
            document.getElementById("err").style.visibility = "hidden";  
        }
        if (!regExPass.test(document.getElementById("password").value)) {
            document.getElementById("err1").style.visibility = "visible";
            flag = false;
        } else {
            document.getElementById("err1").style.visibility = "hidden";
        }
        
        return flag;
    }
    function validate(){
        var flag = true;
        var regExName = /^[a-zA-Z-]+\s[a-zA-Z]{4,20}$/;
        var regExEmail = /^[a-z_A-Z0-9]+@[a-zA-Z.-]+\.[a-zA-Z]{2,7}$/;
        var regExLocation = /^[a-zA-Z-]+\,[a-zA-Z]{4,20}$/;
        var regExPass = /^[a-zA-Z0-9@#$%^&*(){}|/-]{8,16}$/;
        if(!regExName.test(document.getElementById('fullName').value)){
            document.getElementById("err3").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err3').style.visibility = "hidden";
        }
        if(!regExEmail.test(document.getElementById('email1').value)){
            document.getElementById("err4").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err4').style.visibility = "hidden";
        }
        if(!regExLocation.test(document.getElementById('location').value)){
            document.getElementById("err5").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err5').style.visibility = "hidden";
        }
        if(!regExPass.test(document.getElementById('pass').value)){
            document.getElementById("err6").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err6').style.visibility = "hidden";
        }
        
        return flag;
    }
    function validate1(){
        var flag = true;
        var regExName = /^[a-zA-Z-]+\s[a-zA-Z]{4,20}$/;
        var regExEmail = /^[a-z_A-Z0-9]+@[a-zA-Z.-]+\.[a-zA-Z]{2,7}$/;
        var regExLocation = /^[a-zA-Z-]+\,[a-zA-Z]{4,20}$/;
        var regExPass = /^[a-zA-Z0-9@#$%^&*(){}|/-]{8,16}$/;
        var c=/^[a-zA-Z-\s]{4,20}$/;
        if(!regExName.test(document.getElementById('fname').value)){
            document.getElementById("err7").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err7').style.visibility = "hidden";
        }
        if(!regExEmail.test(document.getElementById('email2').value)){
            document.getElementById("err9").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err9').style.visibility = "hidden";
        }
        if(!c.test(document.getElementById('company').value)){
            document.getElementById("err8").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err8').style.visibility = "hidden";
        }
        if(!regExLocation.test(document.getElementById('locationc').value)){
            document.getElementById("err10").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err10').style.visibility = "hidden";
        }
        if(!regExPass.test(document.getElementById('pass1').value)){
            document.getElementById("err11").style.visibility = "visible";
            flag = false;
        }
        else{
            document.getElementById('err11').style.visibility = "hidden";
        }
        return flag;
    }
    
    </script>
</body>
</html>
<?php 


}
else{
    echo "<h1>YOU ARE NOT AUTHORIZED TO ACCESS THIS WEB PAGE</h1>";
} ?>