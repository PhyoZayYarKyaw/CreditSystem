<?php
  require_once('db.php');
  if(isset($_POST['add'])){
    $sid=$_POST['sid'];
    $scode=$_POST['scode'];
    $cu=$_POST['cu'];
    $written=$_POST['written'];
    $tutorial=$_POST['tutorial'];
    $assignment=$_POST['assignment'];
    $quiz=$_POST['quiz']; 
    $project=$_POST['project']; 
    $practical=$_POST['practical'];
    $totalmark=$_POST['totalmark'];

    $check = true;

    if(empty($sid)){
      $name_error = "Please Enter Student ID Correctly!";
      $check = false;
    }
    $pattern = "/^[A-Z]{5}+-[0-9]{5}$/";  
      if(preg_match($pattern, $sid)){

        $selectS = "select count(sid) from student where sid = '$sid'";
        $res=mysqli_query($conn,$selectS);
        $row = mysqli_fetch_row($res);
        if ($row[0] >0) {
          # code...
          
        }else{
          $check = false;
        $name_error = "Please Enter Student ID Correctly!"; // error text
        }
       
        
      }else{
       
        $check = false;
        $name_error = "Please Enter Student ID Correctly!"; // error text
      }


    if(empty($scode)){
      $name_error1 = "Please Enter Subject Code!";
      $check = false;
    }

    $pattern ="/^[A-Z]{1,3}+-[0-9]{4}$/";  
      if(preg_match($pattern, $scode)){
//select subject code if exist or not
        $selectS = "select count(scode) from subject where scode = '$scode'";
        $res=mysqli_query($conn,$selectS);
        $row = mysqli_fetch_row($res);
        if ($row[0] >0) {
          # code...

        }else{
        
        $check = false;
        $name_error1 = "Please Enter Subject Code Correctly!"; // error text
      }
        
      }else{
        
        $check = false;
        $name_error1 = "Please Enter Subject Code Correctly!"; // error text
      }


       if(empty($written)){
      $name_error3 = "Please Enter Written mark Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1,3}+$/"; 
      if(preg_match($pattern, $written)){
        
      }else{
        
        $check = false;
        $name_error3 = "Please Enter Written mark Correctly!"; // error text
      }

      //check correct marks for each text box
      if ($written>100) {
       $check=false;
        $name_error3 = "Please Enter Written mark Correctly!";

      }
      if ($tutorial>10) {
       $check=false;
        $name_error4 = "Please Enter Tutorial mark Correctly!";

      }
      if ($assignment>10) {
       $check=false;
        $name_error5 = "Please Enter Assignment mark Correctly!";

      }
      if ($quiz>10) {
       $check=false;
        $name_error6 = "Please Enter Quiz mark Correctly!";

      }
      if ($practical>10) {
       $check=false;
        $name_error8 = "Please Enter Practical mark Correctly!";

      }
      if ($project>10) {
       $check=false;
        $name_error7 = "Please Enter Project mark Correctly!";

      }

      

    if(empty($tutorial)){
      $name_error4 = "Please Enter Tutorial mark Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1,2}+$/"; 
      if(preg_match($pattern, $tutorial)){
        
      }else{
       
        $check = false;
        $name_error4 = "Please Enter Tutorial mark Correctly!"; // error text
      }


    if(empty($assignment)){
      $name_error5 = "Please Enter Assignment mark Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1,2}+$/"; 
      if(preg_match($pattern, $assignment)){
        
      }else{
       
        $check = false;
        $name_error5 = "Please Enter Assignment mark Correctly!"; // error text
      }



    // if($quiz){
    //   $name_error6= "Please Enter Quiz mark Correctly!";
    //   $check = false;
    // }
       if(empty($quiz)){
        $quiz =0;
       }
      $pattern = "/^[0-9]{1,2}+$/"; 
      if(preg_match($pattern, $quiz)){
        
      }else{
        
        $check = false;
        $name_error6 = "Please Enter Quiz mark Correctly!"; // error text
      }



    // if($project){
    //   $name_error7= "Please Enter Project mark Correctly!";
    //   $check = false;
    // }

      if(empty($project)){
        $project =0;
       }
      $pattern7 = "/^[0-9]{1,2}+$/"; 
      if(preg_match($pattern, $project)){
        
      }else{
        
        $check = false;
        $name_error7 = "Please Enter Project mark Correctly!"; // error text
      }



    // if($practical){
    //   $name_error8= "Please Enter Practical mark Correctly!";
    //   $check = false;
    // }
      if(empty($practical)){
        $practical =0;
       }
    $pattern8 = "/^[0-9]{1,2}+$/"; 
      if(preg_match($pattern, $practical)){
        
      }else{
       
        $check = false;
        $name_error8 = "Please Enter Practical mark Correctly!"; // error text
      } 

       if(empty($totalmark)){
      $name_error9= "Please Enter Total mark Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1,3}+$/"; 
      if(preg_match($pattern, $totalmark)){
        
      }else{
        //echo "is not match with pattern";
        $check = false;
        $name_error9 = "Please Enter Total mark Correctly!"; // error text
      }
      if ($totalmark>100) {
       $check=false;
        $name_error9 = "Please Enter Total mark Correctly!";

      }      





      
    
    

   
    //echo '<script>alert("insert successfully");</script>';
   
    
    
   
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
              <li class="active"><a href="studentmark.php">Add Student Mark</a></li>
              <li><a href="viewstudentmark.php">View Student Mark</a></li>
            </ul>
          </li>
          <li><a href="gradescore.php">Grade Score</a></li>
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
                    <center><div class="panel-body"  style="height: 120px; background-color: #e9ecef; padding-top: 30px"><h1>  Add Student Mark</h1></div></center>

                  </div>

                      
                    <div class="card-body">
                        <form action="" method="post">
                          

                          <div class="form-group">
                            <label for="">Student ID</label><br>
                            <input type="text" name="sid" id="sid" class="form-control" > <?php 
                        if(isset($name_error)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
          color: red;
          font-size: 10px;
          top:0;"><?php echo $name_error; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Subject Code</label><br>
                            <input type="text" name="scode" id="scode" class="form-control">
                             <?php 
                        if(isset($name_error1)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error1; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Credit Unit</label><br>
                          
      <select  name="cu" id="cu" class="form-control">
         <option value="" selected disabled hidden> Choose Here</option>
       
       <option id="three" value=3 default>3</option>
        
        <option id="two" value=2>2</option>
        <option id="zero" value=0>0</option>  
         
      </select> 
    
                             <?php 
                        if(isset($name_error2)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error2; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Written mark</label><br>
                            <input type="text" name="written" id="written" class="form-control" onkeyup="sum()">
                             <?php 
                        if(isset($name_error3)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error3; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Tutorial mark</label><br>
                            <input type="text" name="tutorial" id="tutorial" class="form-control" onkeyup="sum()">
                             <?php 
                        if(isset($name_error4)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error4; }?></label>

                          </div>

                            <div class="form-group">
                            <label for="">Assignment mark</label><br>
                            <input type="text" name="assignment" id="assignment" class="form-control" onkeyup="sum()" > <?php 
                        if(isset($name_error5)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error5; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Quiz mark</label><br>
                            <input type="text" name="quiz" id="quiz" class="form-control" onkeyup="sum()" >
                             <?php 
                        if(isset($name_error6)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error6; }?></label>

                          </div>

                          <div class="form-group">
                           <label for="">Project mark</label><br>
                            <input type="text" name="project" id="project" class="form-control" onkeyup="sum()" >
                             <?php 
                        if(isset($name_error7)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                          color: red;
                          font-size: 10px;
                          top:0;"><?php echo $name_error7; }?></label>

                          </div>
                           
                          <div class="form-group">
                            <label for="">Practical mark</label><br>
                            <input type="text" name="practical" id="practical" class="form-control" onkeyup="sum()" > <?php 
                        if(isset($name_error8)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                              color: red;
                              font-size: 10px;
                              top:0;"><?php echo $name_error8; }?></label>

                          </div>

                          <div class="form-group">
                            <label for="">Total mark</label><br>
                            <input type="text" name="totalmark" id="totalmark" class="form-control" readonly >
                             <?php 
                        if(isset($name_error9)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
                            color: red;
                            font-size: 10px;
                            top:0;"><?php echo $name_error9; }?></label>

                          </div>
<br><br>
                         <div><center>
                            <input type="submit" name="add" class="btn btn-primary" value="Add Student Mark" style="width: 270px"></center>
                          </div>
                        </form>
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
        if(isset($_POST['add'])){
          if ($check==true) {

            $sid=$_POST['sid'];
            $scode=$_POST['scode'];
            $cu=$_POST['cu'];
            $written=$_POST['written'];
            $tutorial=$_POST['tutorial'];
            $assignment=$_POST['assignment'];
            $quiz=$_POST['quiz']; 
            $project=$_POST['project']; 
            $practical=$_POST['practical'];
            $totalmark=$_POST['totalmark']; 
            // $attempt=$_POST['attempt'];
            $attempt = 1;
            if($totalmark >= 50) {
              $attempt = 0;
            }



                                
            $q= " SELECT * from studentmark where sid = '$sid' and scode='$scode'";
            $result = mysqli_query($conn,$q);
            $row = mysqli_num_rows($result);

            if($row != 1){
             
              
              $query="INSERT INTO `studentmark`( `sid`, `scode`, `cu`, `written`, `tutorial`, `assignment`, `quiz`, `project`, `practical`, `totalmark`,`attempt`)VALUES('$sid', '$scode', '$cu', '$written', '$tutorial', '$assignment', '$quiz', '$project', '$practical', '$totalmark','$attempt')";
                mysqli_query($conn,$query);

                //add semester where all subject for one semester are all passed 

                 









                 echo '<script>swal("Added New Mark of student Successfully!"); </script>';


            } 
            else{
              echo '<script>swal("The given mark of the student is already existed.Can not be added twice!");</script>';
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