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
          <li ><a href="index.php">Home</a></li>

          <li class="drop-down" ><a href="#">Student</a>
            <ul>
              <li><a href="addstudent.php">Add Student</a></li>
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewretakestudent.php">View Retake Student</a></li>
              <li><a href="viewretakelog.php">Retake Log</a></li>
            </ul>
          </li>

          <li class="drop-down" ><a href="#">Subject</a>
            <ul>
              <li><a href="addsubject.php">Add Subject</a></li>
              <li><a href="viewsubject.php">View Subject</a></li>
            </ul>
          </li>
          <li class="drop-down" ><a href="#">Mark</a>
            <ul>
              <li><a href="studentmark.php">Add Student Mark</a></li>
              <li><a href="viewstudentmark.php">View Student Mark</a></li>
            </ul>
          </li>
          <li class="active"><a href="gradescore.php">Grade Score</a></li>
          <li><a href="print.php" >Print GPA</a></li>
         
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
                    <center><div class="panel-body"  style="height: 120px; background-color: #e9ecef; padding-top: 30px"><h1>Grade Score Table </h1></div></center>

                  </div>
    

                <table class="table table-bordered" id="myTable">
                  <thead class="text-center">
                    <tr>
                      
                      <th>Marks</th>
                      <th>Letter Grade</th>
                      <th>Grade Score</th>
                    </tr>
                  </thead>
                <?php 
                    require_once 'db.php'; 
                    
                    $query="SELECT * FROM `gradescore` order by gradescore desc";
                    $data=mysqli_query($conn,$query);
                    foreach ($data as $value) {
                
                      
                ?>
                <tbody class="text-center">
                  <tr>
                    
                    <td><?php echo $value['marks']; ?></td>
                    <td><?php echo $value['lettergrade']; ?></td>
                    <td><?php echo $value['gradescore']; ?></td> 
                  </tr>
                </tbody>
                  <?php } ?>
                </table>
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
  <!-- <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script> -->
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

  </script>

</body>

</html>
