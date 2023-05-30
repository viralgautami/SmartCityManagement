<?php
include('connection.php');
session_start();

$sql = "select * from feedback";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">



    <style type="text/css">
        body{
            margin-top: 100px;
            margin-left: 25px;
            background-image: url("../images/p3.jpg");
        }
    
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #181818;
        color: #888;
   
   text-align: center;
}

.headar {
   position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   background-color: #14b1bb;
        color: #888;
        z-index: 1;
   
   
}
.headar h2{
  margin-left: 100px;
  color: white;
}
.headar a{
  margin-top: -50px;
  margin-left: 1100px;
  color: white;
}


</style>
</head>
<body>

<div class="headar">
  <h2 style="font-family: 'Lobster', cursive;">SmartCityManagement</h2>
  <a type="button" class="btn btn-info" class="nav-link" href="index.php">Back</a>
</div>




   
    <div class="row">
    <div class='list-group gallery'>


            <?php
           



            while($row = mysqli_fetch_assoc($res)){
                $imageURL = $row["img"];


            ?>
            <form>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/uploads/<?php echo $image['image'] ?>">
                        <img class="img-responsive" alt="" src="<?php echo $imageURL; ?>" />
                        
                        <div class='text-center'>
                            <small class='text-muted'><h4><?php echo 'Name:  '.$row['name'] ?></h4></small>
                        </div>
                        <div class='text-center'>
                            <small class='text-muted'><h4><?php echo 'Location:  '.$row['location'] ?></h4></small>
                        </div> 
                        <div class='text-center'>
                            <small class='text-muted'><?php  echo 'Problem:  '.$row['msg'];?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    
                </div> <!-- col-6 / end -->
            <?php } ?>


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> 
</form><!-- container / end -->
<div class="footer">
  <i class="fab fa-facebook icon"></i>
        <i class="fab fa-twitter-square icon"></i>
        <i class="fab fa-instagram icon"></i>
        <i class="fab fa-linkedin icon"></i>
        <i class="fab fa-skype icon"></i>
        <p> All rights reserved to &copy; <span style="color: #14b1bb;">smartcitymanagement@gmail.com</span></p>
</div>

</body>
</html>






























    
     








                  