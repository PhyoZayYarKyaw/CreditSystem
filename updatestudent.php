<?php
require_once('db.php');

  
  if(isset($_GET['edit'])){
    $edit=$_GET['edit'];
    $sql="SELECT * FROM `student` WHERE `sid`='$edit'";
    $select_post=mysqli_query($conn,$sql);
  
    $result=mysqli_fetch_assoc($select_post);
  
    $sid=$result['sid'];
    $sname=$result['sname'];
    $email=$result['email'];
    $phno=$result['phno'];
    $totalattempt=$result['totalattempt'];
    
  
  }

  if(isset($_POST['updatestudent'])){
     
   
    $studentemailcheck = $_POST['email'];
     $studentphnocheck = $_POST['phno'];

    $check = true;

    

    

    if(empty($studentemailcheck)){
      $name_error2 = "Please Enter Student email Correctly!";
      $check = false;
    }
    $pattern ="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/"; //pattern
   
      if(preg_match($pattern, $studentemailcheck)){
       
      }else{
        
        $check = false;
        $name_error2 = "Please Enter Student email Correctly!"; 
      }



    if(empty($studentphnocheck)){
      $name_error3 = "Please Enter Student Phno Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1,3}-?[0-9]{7,9}$/"; //pattern
    //$pattern= "/^[0-9]{1,3}$/";
    //echo "$name";
      if(preg_match($pattern, $studentphnocheck)){
        //echo " is match with pattern";
      }else{
        //echo "is not match with pattern";
        $check = false;
        $name_error3 = "Please Enter Student Phno Correctly!"; // error text
      } 

    if ($check==true) {
        
    $sid=$_POST['sid'];
    $sname=$_POST['sname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $totalattempt=$_POST['totalattempt'];

    $query="UPDATE `student` SET sname='$sname',email='$email',phno='$phno',totalattempt='$totalattempt' WHERE sid='$sid'";
    mysqli_query($conn,$query);

    
    header("location:viewstudent.php");
      }
   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

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
          <li><a href="index.php">Home</a></li>

          <li class="drop-down"><a href="#">Student</a>
            <ul>
              <li><a href="addstudent.php">Add Student</a></li>
              <li class="active"><a href="viewstudent.php">View Student</a></li>
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
          <li><a href="gradescore.php">Grade Score</a></li>
          <li><a href="print.php">Print GPA</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

 

  <main id="main">

      <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

                <div class="container">
                  <div class="jumbotron">
                    <h1 class="text-center">Update Student</h1>
                  </div>

                  
                    <div class="card-body">
                    <form action="" method="post">
                      <div class="form-group">
                        <label for="">Student ID</label><br>
                        <input type="text" name="sid" id="sid" class="form-control" value="<?php echo $sid; ?>" readonly>
                         
                      </div>

                      <div class="form-group">
                        <label for="">Name</label><br>
                        <input type="text" name="sname" id="sname" class="form-control" value="<?php echo $sname; ?>" >
                        
                      </div>

                      <div class="form-group">
                        <label for="">Email</label><br>
                        <input type="text" name="email" id="sname" class="form-control" value="<?php echo $email; ?>">
                            <?php 
                            if(isset($name_error2)){ ?>
                            <!-- <p><?php //echo $name_error; }?></p> -->
                            <label style ="text-align: left;
                                color: red;
                                font-size: 10px;
                                top:0;"><?php echo $name_error2; }?></label>
                      </div>

                      <div class="form-group">
                        <label for="">Phone No</label><br>
                        <input type="text" name="phno" id="phno" class="form-control" value="<?php echo $phno; ?>">
                         <?php 
                        if(isset($name_error3)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error3; }?></label>
                      </div>

                      <div class="form-group">
                        <label for="">Total Attempt</label><br>
                        <input type="text" name="totalattempt" id="totalattempt"class="form-control" value="<?php echo $totalattempt; ?>" >
                      </div>

                      <div><center>
                        <input type="submit" name="updatestudent" class="btn btn-primary" value="Update Student" style="width: 270px;"></center>
                      </div>
                    </form>
                    </div>
                  </div>
                  
                </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  
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
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>

</html>