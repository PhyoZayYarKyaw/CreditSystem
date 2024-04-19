<?php
  require_once('db.php');
  
if(isset($_GET['edit'])){
  $edit=$_GET['edit'];
  $sql="SELECT * FROM `retakestudent` WHERE `rno`='$edit'";
  $select_post=mysqli_query($conn,$sql);

  $result=mysqli_fetch_assoc($select_post);
  
   $rno=$result['rno'];
   $sid=$result['sid'];
   $scode=$result['scode'];
   $totalmark=$result['totalmark'];
  
   $query="SELECT * FROM `studentmark` WHERE `sid`='$sid' and `scode`='$scode'";

   $select_post1=mysqli_query($conn,$query);
  
    $result1=mysqli_fetch_assoc($select_post1);
    $mid=$result1['mid'];
    $sid=$result1['sid'];
    $scode=$result1['scode'];
    $cu=$result1['cu'];
    $written=$result1['written'];
    $tutorial=$result1['tutorial'];
    $assignment=$result1['assignment'];
    $quiz=$result1['quiz']; 
    $project=$result1['project']; 
    $practical=$result1['practical'];
    $totalmark=$result1['totalmark']; 
    $attempt=$result1['attempt']; 


}

 


  if(isset($_POST['add'])){

    $sid=$_POST['sid'];
    $scode=$_POST['scode'];
    $cu=$_POST['cu'];
    $written1=$_POST['written'];
    $tutorial=$_POST['tutorial'];
    $assignment=$_POST['assignment'];
    $quiz=$_POST['quiz']; 
    $project=$_POST['project']; 
    $practical=$_POST['practical'];
    $totalmark1=$_POST['totalmark']; 

   switch ($totalmark1) {
      case $totalmark1 >90:
        $gs=5.0;
        $p=$cu * $gs;
        $g="A+";
         break;

        case $totalmark1 >=80:
        $gs=4.8;
        $p=$cu * $gs;
        $g="A";
         break;

        case $totalmark1 >=75:
        $gs=4.67;
        $p=$cu * $gs;
        $g="A-";
         break;

        case $totalmark1 >70:
        $gs=4.33;
        $p=$cu * $gs;
        $g="B+";
         break;

        case $totalmark1 >=65:
        $gs=4.0;
        $p=$cu * $gs;
        $g="B";
        break;

        case $totalmark1 >=60:
        $gs=3.67;
        $p=$cu * $gs;
        $g="B-";
        break;

        case $totalmark1 >=55:
        $gs=3.33;
        $p=$cu * $gs;
        $g="C+";
        break;

        case $totalmark1 >=50:
        $gs=3.0;
        $p=$cu * $gs;
        $g="C";
        break;

        case $totalmark1 >=40:
        $gs=2.0;
        $p=$cu * $gs;
        $g="D";
        break;
      
      default:
        $gs=0.0;
        $p=$cu * $gs;
        $g="F/Abs/I";
        break;
    }

    if ($totalmark1 >=50 || $totalmark1 > $totalmark) {
      # code...
       $sql1= "UPDATE `g` SET `totalmark` = '$totalmark1', `grade`='$g',`grade_score`='$gs',`grade_point`='$p' WHERE `sid`='$sid' and `scode`='$scode'";
      mysqli_query($conn,$sql1);
    }

 

    if($totalmark1>=50){

      $query="UPDATE `studentmark` SET `written`='$written1',`totalmark`='$totalmark1' WHERE `sid`='$sid'and `scode`='$scode'";
      mysqli_query($conn,$query);

      $query2="DELETE FROM `retakestudent` WHERE `rno`='$rno'";
      mysqli_query($conn,$query2);

      // $updateG = "update g set grade = '$g',grade_score='$gs' , grade_point='$p' where sid = '$sid' and scode = ''$scode";
      // mysqli_query($conn,$updateG);

     

     $qq="INSERT INTO `retakelog`(`sid`, `scode`, `totalmark`) VALUES ('$sid','$scode','$totalmark')";
        mysqli_query($conn,$qq);

        

      
    }



    if($totalmark1<50){

      $attempt = $attempt + 1;
      $query3 = "UPDATE `studentmark` SET `attempt`= '$attempt' WHERE `mid`='$mid'";
      mysqli_query($conn,$query3);

      $query10="SELECT sum(`attempt`) FROM `studentmark` WHERE `sid`='$sid'";
      $res=mysqli_query($conn,$query10);

      $row = mysqli_fetch_row($res);

      $query9 = "UPDATE `student` SET `totalattempt`=$row[0] WHERE `sid`='$sid'";
      mysqli_query($conn,$query9);

      $res2= "UPDATE `g` SET `attempt`='$attempt' WHERE `sid`='$sid' and `scode`='$scode'";
    mysqli_query($conn,$res2);

      if($totalmark1>$totalmark){
        $query4 = "UPDATE `retakestudent` SET `totalmark`='$totalmark1' where `sid`='$sid' and `scode`='$scode'";  
        mysqli_query($conn,$query4);

        $query5="UPDATE `studentmark` SET `written`='$written1',`totalmark`='$totalmark1' WHERE `sid`='$sid'and `scode`='$scode'";
        mysqli_query($conn,$query5);

        $query9="INSERT INTO `retakelog`(`sid`, `scode`, `totalmark`) VALUES ('$sid','$scode','$totalmark')";
        mysqli_query($conn,$query9);

        

      }


      else{
        $query6="INSERT INTO `retakelog`(`sid`, `scode`, `totalmark`) VALUES ('$sid','$scode','$totalmark1')";
        mysqli_query($conn,$query6);
      }
      

    }
    
    header("location:viewretakestudent.php");
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
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewretakestudent.php">View Retake Student</a></li>
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
              <li><a href="viewstudentark.php">View Student Mark</a></li>
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
   
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

                <div class="container">
                    <div class="jumbotron">
                      <h1 class="text-center">Add student mark</h1>
                    </div>

                      
                    <div class="card-body">
                        <form action="" method="post">
                          

                          <div class="form-group">
                            <label for="">Student ID</label><br>
                            <input type="text" name="sid" id="sid" class="form-control" readonly value="<?php echo $sid; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Subject Code</label><br>
                            <input type="text" name="scode" id="scode" class="form-control" readonly value="<?php echo $scode; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Credit Unit</label><br>
                            <input type="text" name="cu" id="cu" class="form-control" readonly value="<?php echo $cu; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Written mark</label><br>
                            <input type="text" name="written" id="written" class="form-control" onkeyup="sum()" value="<?php echo $written; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Tutorial mark</label><br>
                            <input type="text" name="tutorial" id="tutorial" readonly class="form-control"  value="<?php echo $tutorial; ?>">
                          </div>

                            <div class="form-group">
                            <label for="">Assignment mark</label><br>
                            <input type="text" name="assignment" id="assignment" class="form-control" readonly value="<?php echo $assignment; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Quiz mark</label><br>
                            <input type="text" name="quiz" id="quiz" class="form-control" readonly value="<?php echo $quiz; ?>">
                          </div>

                          <div class="form-group">
                           <label for="">Project mark</label><br>
                            <input type="text" name="project" id="project" class="form-control" readonly value="<?php echo $project; ?>">
                          </div>
                           
                          <div class="form-group">
                            <label for="">Practical mark</label><br>
                            <input type="text" name="practical" id="practical" class="form-control" readonly value="<?php echo $practical; ?>">
                          </div>

                          <div class="form-group">
                            <label for="">Total mark</label><br>
                            <input type="text" name="totalmark" id="totalmark" class="form-control" readonly value="<?php echo $totalmark; ?>">
                          </div>

                         <div><center>
                            <input type="submit" name="add" class="btn btn-primary" value="Update" style="width: 270px"></center>
                          </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

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


   <script type="text/javascript">
  function sum() {
       var first = document.getElementById('written').value;
       var second = document.getElementById('tutorial').value;
       var third = document.getElementById('assignment').value;
       var fourth = document.getElementById('quiz').value;
       var fifth = document.getElementById('project').value;
       var sixth = document.getElementById('practical').value;

       
         if (first == "")
           first = 0;
         if (second == "")
           second = 0;
         if (third == "")
           third = 0;
         if (fourth == "")
           fourth = 0;
         if (fifth == "")
           fifth = 0;
         if (sixth == "")
           sixth = 0;

       var result = (parseInt(first))/2 + parseInt(second)+ parseInt(third)+ parseInt(fourth)+ parseInt(fifth)+ parseInt(sixth);
       result=Math.round(result);
       if (!isNaN(result)) {
           document.getElementById('totalmark').value = result;
       }
   }
</script>
  
</body>

</html>