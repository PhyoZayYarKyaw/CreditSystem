<?php ob_start();
session_start(); ?>
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
<!-- <style type="text/css">
  #t2{
    display: none;
  }
</style> -->
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
              <li class="active"><a href="viewsubject.php">View Subject</a></li>
            </ul>
          </li>
           <li class="drop-down"><a href="#">Mark</a>
            <ul>
              <li><a href="studentmark.php">Add Student Mark</a></li>
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

      <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="container">
                 <div class="panel">
                    <center><div class="panel-body"  style="height: 120px; background-color: #e9ecef; padding-top: 30px"><h1> View Subject</h1></div></center>

                  </div>
    
                <div class="navbar navbar-light bg-light"> 
                  <a href="addsubject.php" class="btn btn-primary navbar-link">Add New Subject</a>
                  

                <form action="" method="post">
                

           <script>

        function fun_Show(){
          var select_value = $('#sel').val();
          if(select_value == "0"){
           
            $("#t1").show();
            $("#t2").hide();
          }

          if(select_value == "-1"){

             $("#t1").hide();
             $("#t2").show();
          }
          if(select_value == "-2"){

             $("#t1").hide();
             $("#t2").show();
          }
          if(select_value == "-3"){

             $("#t1").hide();
             $("#t2").show();
          }
          if(select_value == "-4"){

             $("#t1").hide();
             $("#t2").show();
          }
          if(select_value == "-5"){

             $("#t1").hide();
             $("#t2").show();
          }
          $(document).ready(function(){
          $("#t2").hide();
        }

}


</script>

          <select name="sel" id="sel" class="navbar-link btn btn-info" style="height: 40px; margin-right: 30px;">
            <option value="0" selected>View All Subject</option>
              
            <option value="-1"> first year</option>
            <option value="-2"> second year</option>
            <option value="-3"> third year</option>
            <option value="-4"> fourth year</option>
            <option value="-5"> fifth year</option>
        </select>

        
        <input type="submit" name="submit" onclick="fun_Show()" class="navbar-link btn btn-info float-right">

        </div>

       
        </form>
    


<!-- <script>
  function fun_Show() {
    document.getElementById("t1").style.display="none";
  }
</script> -->
<!-- <style type="text/css">
  #t1{
    display: none;
  }
</style> -->

<div id="t1" >
<table class="table table-bordered" id="myTable">
                 
                <?php 
                    require_once 'db.php';
                    $no=1;
                    if (isset($_POST['submit'])) {
                    if (isset($_POST['sel'])) {
                    $year = $_POST['sel'];
            
                       $query="SELECT * FROM `subject` where scode regexp '$year'";


                        $data=mysqli_query($conn,$query);

                    
                 echo ' <thead>
                    <tr>
                      <th>No</th>
                      <th>Subject Code</th>
                      <th>Subject Name</th>
                      <th>Subject Type</th>
                      <th>Standard Credit Unit</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>';
                    foreach ($data as $value) {
                      
                ?>
                
                <tbody>

                  <tr>
                    
                    <td><?php echo $no++; ?></td>
                   
                    <td><?php echo $value['scode']; ?></td>
                    <td><?php echo $value['subname']; ?></td>
                    <td><?php echo $value['stype']; ?></td>
                    <td><?php echo $value['scu']; ?></td>
                    
                    
                    <td><a href="updatesubject.php?edit=<?php echo $value['scode']?>" class="btn btn-warning">Edit</a></td>



                    <td><button class="btn btn-secondary"><a class="deletesubject" href="viewsubject.php?delete=<?php echo $value['scode']?>">Delete</a></button></td>
                  </tr>
                </tbody>
                  <?php
                  
                    }
                  } 

        }
                ?>
</table>
</div>

<div id="t2">
<table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Subject Code</th>
                      <th>Subject Name</th>
                      <th>Subject Type</th>
                      <th>Standard Credit Unit</th>   
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                <?php 
                    require_once 'db.php'; 
                    $no=1;
                    $query="SELECT * FROM `subject`";
                    $data=mysqli_query($conn,$query);
                    foreach ($data as $value) {
                
                      
                ?>
                <tbody>
                  <tr>
                    
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['scode']; ?></td>
                    <td><?php echo $value['subname']; ?></td>
                    <td><?php echo $value['stype']; ?></td>
                    <td><?php echo $value['scu']; ?></td>
                    
                    
                    <td><a href="updatesubject.php?edit=<?php echo $value['scode']?>" class="btn btn-warning">Edit</a></td>



                    <td><button class="btn btn-secondary"><a class="deletesubject" href="viewsubject.php?delete=<?php echo $value['scode']?>">Delete</a></button></td>
                  </tr>
                </tbody>
                  <?php } ?>
</table>
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
  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );


    $(function(){
      $('.deletesubject').click(function(){
        return confirm('Are you sure want to delete');
      })
    })
  </script>

  

</body>
</html>





<?php 
  require_once 'db.php';
  
    if (isset($_GET['delete'])) {
      $delete=$_GET['delete'];
      // $query="SELECT * from subject where scode=$delete";
      // $result=mysqli_query($conn,$query);
      // $data=mysqli_fetch_assoc($result);
      
    $sql="DELETE FROM subject WHERE scode='$delete'";
    mysqli_query($conn,$sql);
    header("location:viewsubject.php");
    }
    
    
  

 ?>