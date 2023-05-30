<?php
error_reporting(0);

?>


<!DOCTYPE html>
<html>

<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <style>
    body {
        min-height: 100%;
        margin: 0;
        padding: 0;
    }

    #map {
        height: 100%;
      }

    .heading:after {
        text-align: center;
        background-color: #000;
        content: "";
        display: block;
        height: 5px;
        margin-top: 5px;
        width: 60px;
    }

    nav {
        background-color: #14b1bb;
    }

    nav>.container>a>h2 {
        color: white;

    }

    .footer {
        margin-top: 0px;
        text-align: center;
        padding-top: 35px;
        background-color: #181818;
        color: #888;
        margin-bottom: 0;
        padding-bottom: 0;

    }

    .footer>p {
        margin-bottom: 0;
        padding-bottom: 10px;
    }
    </style>
</head>

<body>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;
        

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCc0nCbA7JKoVrDQmtZqteLYobyx2qMbfs&callback=initMap">
    </script>



    <nav class="navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2 style="font-family: 'Lobster', cursive;">Smart Solution</h2>
                <a type="button" class="btn btn-secondary" class="nav-link" href="index.php">Back</a>
            </a>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid" style="margin-top:68px;">
        <div class="container">
            <h1 style="color: #14b1bb; font-weight: bold;margin-bottom:15px;" class="heading">Give Problem </h1>
            <?php
                if ($_GET['err'] == '0') {
                    echo '<span style="color:green;text-align:center;">*Successfully Added*</span>';
                }
                if ($_GET['err'] == '1') {
                    echo '<span style="color:red;text-align:center;">*Sorry, only JPG, JPEG, PNG & GIF files are allowed.*</span>';
                }
                if ($_GET['err'] == '2') {
                    echo '<span style="color:red;text-align:center;">*File is Not an image.*</span>';
                }
                if ($_GET['err'] == '3') {
                    echo '<span style="color:red;text-align:center;">*File size is too large.*</span>';
                }
                
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" enctype="multipart/form-data" action="insertFeedback.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="" name="name"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="" name="location"
                                placeholder="Exact-Location">
                        </div>
                        <div class="form-group">
                            <select name="sd">
                                <option>Select Department</option>
                                  <option name="td" value="Traffic Dipartment">Traffic Dipartment</option>
                                  <option name="wd" value="West Menagement Dipartment">West Menagement Dipartment</option>
                                  <option name="ed" value="Education Dipartment">Education Dipartment</option>
                                  <option name="hd" value="Helth Dipartment">Helth Dipartment</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="" rows="3" placeholder="Massege" name="msg"></textarea>
                        </div>
                            <div class="form-group">
                                <label for="img">Select Your Photo</label>
                                <input type="file" class="form-control-file" id="img" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
                <div class="col-lg-6">
                   <!--<img src="2.jpg" width="100%" height="300px">-->
                   <div id="map"></div>
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
</body>

</html>