<?php
  require_once('db.php');
  if(isset($_POST['addstudent'])){
    $name = $_POST['sid']; 
    $studentnamecheck = $_POST['sname']; 
    $studentemailcheck = $_POST['email'];
    $studentphnocheck = $_POST['phno'];

    $check = true;

    if(empty($name)){
      $name_error = "Please Enter Student ID Correctly!";
      $check = false;
    }
    $pattern = "/^[A-Z]{5}+-[0-9]{5}$/";  
      if(preg_match($pattern, $name)){
        
      }else{
        $check = false;
        $name_error = "Please Enter Student ID Correctly!"; // error text
      }



    if(empty($studentnamecheck)){
      $name_error1 = "Please Enter Student Name Correctly!";
      $check = false;
    }
    $pattern = "/^[a-zA-Z ]+$/";
      if(preg_match($pattern, $studentnamecheck)){
        
      }else{
        
        $check = false;
        $name_error1 = "Please Enter Student Name Correctly!"; 
      }

    

    if(empty($studentemailcheck)){
      $name_error2 = "Please Enter Student email Correctly!";
      $check = false;
    }
    $pattern = "/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/";  //pattern
   
      if(preg_match($pattern, $studentemailcheck)){
       
      }else{
        
        $check = false;
        $name_error2 = "Please Enter Student email Correctly!"; 
      }


    if(empty($studentphnocheck)){
      $name_error3 = "Please Enter Student Phno";
      $check = false;
    }
     $pattern = "/^[0-9]{8,11}$/";
      if(preg_match($pattern, $studentphnocheck)){
        
      }else{
        
        $check = false;
        $name_error3 = "Please Enter Student Phno Correctly!"; // error text
      } 
      
    
  }
?>
  



<!DOCTYPE html>
<html lang="en">

<head>
  <style type="text/css">
    
  </style>
 
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

 
  <link href="css/style.css" rel="stylesheet">
  <script src="js/sweetalert.min.js"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">Credit System</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php" >Home</a></li>

          <li class="drop-down"><a href="#">Student</a>
            <ul>
              <li  class="active"><a href="addstudent.php">Add Student</a></li>
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewretakestudent.php">View Student Mark</a></li>
              <li><a href="viewretakelog.php">Retake Log</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="#">Subject</a>
            <ul>
              <li><a href="addsubject.php">Add Subject</a></li>
              <li><a href="viewsubject.php">View Subject</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Mark</a>
            <ul>
              <li><a href="studentmark.php">Add Student Mark</a></li>
              <li><a href="viewstudentmark.php">View Retake Mark</a></li>
            </ul>
          </li>
          
          <li ><a href="gradescore.php">Grade Score</a></li>
          <li><a href="print.php">Print GPA</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="container">
                      <div class="panel">
                    <center><div class="panel-body"  style="height: 120px; background-color: #e9ecef; padding-top: 30px"><h1> Add New Student</h1></div></center>

                  </div>

                  
                    <div class="card-body">
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="">Student ID</label><br>
                        <input type="text" name="sid" id="sid" class="form-control">
                         <?php 
                        if(isset($name_error)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error; }?>
                        </label>

                      </div>

                      <div class="form-group">
                        <label for="">Name</label><br>
                        <input type="text" name="sname" id="sname" class="form-control">
                         <?php 
                        if(isset($name_error1)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error1; }?>
                        </label>
                      </div>

                      <div class="form-group">
                        <label for="">Email</label><br>
                        <input type="text" name="email" id="email" class="form-control">
                        <?php 
                        if(isset($name_error2)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error2; }?>
                        </label>
                       
                      </div>

                      <div class="form-group">
                        <label for="">Phone No</label><br>
                        <input type="text" name="phno" id="phno" class="form-control">
                         <?php 
                        if(isset($name_error3)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error3; }?>
                        </label>
                      </div>

                     

                      <center>
                        <div>
                          <input type="submit" name="addstudent" value="Add Student" class="btn btn-primary" style="width: 270px" />
                        </div>
                      </center>

                    </form>
                    </div>
                  </div>
                
                </div>
              </div>

              

            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  
 <?php 
        require_once('db.php');
        if(isset($_POST['addstudent'])){
          if ($check==true) {

            $sid=$_POST['sid'];
            $sname=$_POST['sname'];
            $email=$_POST['email'];
            $phno=$_POST['phno'];
           $totalattempt=0;

           

          $q= " SELECT * from student where sid='$sid'";
          $result = mysqli_query($conn,$q);
          $row = mysqli_num_rows($result);

          if($row != 1){
            echo '<script>swal("Added New Student Successfully!"); </script>';
            $query="INSERT INTO `student`(`sid`, `sname`, `email`, `phno`, `totalattempt`) VALUES ('$sid','$sname','$email','$phno','$totalattempt')";
            mysqli_query($conn,$query);
          } 
          else{
            echo '<script>swal("Student is already existed.Can not be added twice!");</script>';
          }

         
      }
     } 
?>



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

 <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/counterup/counterup.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  
</body>

</html>
