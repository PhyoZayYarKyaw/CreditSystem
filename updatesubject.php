<?php
require_once('db.php');
	
	if(isset($_GET['edit'])){
		$edit=$_GET['edit'];
		$sql="SELECT * FROM `subject` WHERE `scode`='$edit'";
		$select_post=mysqli_query($conn,$sql);
	
		$result=mysqli_fetch_assoc($select_post);
	
		$scode=$result['scode'];
		$subname=$result['subname'];
		$stype=$result['stype'];
		$scu=$result['scu'];
		
	
	}

	if(isset($_POST['updatesubject'])){
		  
       $name = $_POST['scode']; // text box name
    $creditcheck = $_POST['scu']; 
    $check = true;

    if(empty($name)){
      $name_error = "Please Enter Subject Code Correctly!";
      $check = false;
    }
    $pattern = "/^[A-Z]{1,3}+-[0-9]{4}$/"; //pattern
    //$pattern= "/^[0-9]{1,3}$/";
    //echo "$name";
      if(preg_match($pattern, $name)){
        //echo " is match with pattern";
      }else{
        //echo "is not match with pattern";
        $check = false;
        $name_error = "Please Enter Subject Code Correctly!"; // error text
      }

      if(empty($creditcheck)){
      $name_error1 = "Please Enter credit Correctly!";
      $check = false;
    }
    $pattern = "/^[0-9]{1}$/"; //pattern
    //$pattern= "/^[0-9]{1,3}$/";
    //echo "$name";

      if(preg_match($pattern, $creditcheck)){
        //echo " is match with pattern";
      }else{
        //echo "is not match with pattern";
        $check = false;
        $name_error1 = "Please Enter credit Correctly!"; // error text
      }
       if ($creditcheck==0 or $creditcheck==2 or $creditcheck==3 ) {
                     
      }


      else{


        $check = false;
        $name_error1 = "Please Enter credit Correctly!"; // error text
      
      }
      if ($check==true) {
        $scode=$_POST['scode'];
    $subname=$_POST['subname'];
    $stype=$_POST['stype'];
    $scu=$_POST['scu'];
    
    $query="UPDATE `subject` SET scode='$scode',subname='$subname',stype='$stype',scu='$scu' WHERE scode='$scode'";
    mysqli_query($conn,$query);

    
    header("location:viewsubject.php");
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
          <li><a href="index.php" style="width: 100px text-center">Home</a></li>

          <li class="drop-down"style="width: 100px"><a href="#">Student</a>
            <ul>
              <li><a href="addstudent.php">Add Student</a></li>
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewretakestudent.php">View Retake Student</a></li>
              <li><a href="viewretakelog.php">Retake Log</a></li>
            </ul>
          </li>

          <li class="drop-down" style="width: 100px"><a href="#">Subject</a>
            <ul>
              <li><a href="addsubject.php">Add Subject</a></li>
              <li><a href="viewsubject.php">View Subject</a></li>
            </ul>
          </li>
          <li class="drop-down" style="width: 80px"><a href="#">Mark</a>
            <ul>
              <li><a href="studentmark.php">Add Student Mark</a></li>
              <li><a href="viewstudentmark.php">View Student Mark</a></li>
            </ul>
          </li>
          <li><a href="gradescore.php" style="width: 100px text-center">Grade Score</a></li>
          <li><a href="print.php" style="width: 100px">Print GPA</a></li>
          <li><a href="logout.php" style="width: 100px">Logout</a></li>
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
            			<h1 class="text-center">Update Subject</h1>
            		</div>

            		
            			<div class="card-body">
            			<form action="" method="post">
            				<div class="form-group">
            					<label for="">Subject Code</label><br>
            					<input type="text" name="scode" id="scode" class="form-control" value="<?php echo $scode; ?>" >
                       <?php 
                        if(isset($name_error)){ ?>
                        <!-- <p><?php //echo $name_error; }?></p> -->
                        <label style ="text-align: left;
          color: red;
          font-size: 10px;
          top:0;"><?php echo $name_error; }?></label>

            				</div>

            				<div class="form-group">
            					<label for="">Name</label><br>
            					<input type="text" name="subname" id="subname" class="form-control" value="<?php echo $subname; ?>">
                      
            				</div>

            				<div class="form-group">
            					<label for="">Subject Type</label><br>
            					<input type="text" name="stype" id="stype" class="form-control" value="<?php echo $stype; ?>">
            				</div>

            				<div class="form-group">
            					<label for="">Standard Credit Unit</label><br>
            					<select  name="cu" id="cu" class="form-control">
         <option value="" selected disabled hidden> Choose Here</option>
       
       <option id="three" value=3 default>3</option>
        
        <option id="two" value=2>2</option>
        <option id="zero" value=0>0</option>  
         
      </select> 
            				</div>


            				<div><center>
            					<input type="submit" name="updatesubject" value="Update" class="btn btn-primary" style="width: 270px"></center>
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