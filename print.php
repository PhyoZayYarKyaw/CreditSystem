<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <style>
    div.absolute{
      position: absolute;
      top:10px;
      left:10px;

    }
  </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

 
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex" id = "cc">

      <style>


        @media print{
          h1 *{
            display:none;
            visibility: none;
          }

          nav *{
            display:none;
            visibility: none;
          }

          button *{
            display:none;
            visibility: none;
          }
        }
      </style>

      <div class="logo mr-auto" >
        <h1 class="text-light"><a href="index.php">Credit System</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
  <!-- <div  id = "mydiv2"> -->
        <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li style="width: 100px text-center"><a href="index.php">Home</a></li>

          <li class="drop-down" style="width: 100px"><a href="#">Student</a>
            <ul>
              <li><a href="addstudent.php">Add Student</a></li>
              <li><a href="viewstudent.php">View Student</a></li>
              <li><a href="viewretakestudent.php">View Retake Student</a></li>
              <li><a href="viewretakelog.php">Retake Log</a></li>
            </ul>
          </li>

          <li class="drop-down"style="width: 100px"><a href="#">Subject</a>
            <ul>
              <li><a href="addsubject.php">Add Subject</a></li>
              <li><a href="viewsubject.php">View Subject</a></li>
            </ul>
          </li>
          <li class="drop-down"style="width: 80px "><a href="#">Mark</a>
            <ul>
              <li><a href="studentmark.php">Add Student Mark</a></li>
              <li><a href="viewstudentmark.php">View Student Mark</a></li>
            </ul>
          </li>
          <li><a href="gradescore.php" style="width: 100px text-center" >Grade Score</a></li>
          <li class="active"><a href="print.php"style="width: 100px">Print GPA</a></li>
          <li><a href="logout.php"style="width: 100px ">Logout</a></li>
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

              
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  

 
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



  <div class="container">
    <div class ="row">
      <div class ="col-md-12">
        <div class="absolute"><img src="img/logo.png" class="img-rounded" height="150" align="center"  style="padding-left: 50px"></div>
        <p align="center" style="font-family:'Times New Roman';font-size: 20px"><b>The Republic of the Union of Myanmar</b></p>
        <p align="center" style="font-family:'Times New Roman';font-size: 20px"><b>University of Computer Studies(Magway)</b></p>
        <p align="center" style="font-family:'Times New Roman';font-size: 20px"><b>Grade Sheet</b></p>



        <table align="right" style="font-family:'Times New Roman';font-size: 19px">
          <tr>
            <td align="right">Date :&nbsp; </td>
            <td > <?php echo date("d-m-Y"); ?> </td>
          </tr>

          <tr>
            <td align="right">Name :&nbsp; </td>
            <?php
                require_once "db.php";
                if (isset($_POST['submit'])){
                  $name=$_POST['name'];
                  $q="SELECT sname from student where sid = '$name'";
                  $name1=mysqli_query($conn,$q);
                  while($tdata=mysqli_fetch_assoc($name1)){
                  
              ?>
            
            <td> <?php echo $tdata['sname']; } } ?></td>
          </tr>

          <tr>
            <td align="right">Roll Number :&nbsp; </td>
            <td>
              
              <?php
                if (isset($_POST['submit'])){
                  $name=$_POST['name'];
                  echo $name;
                }
              ?>

            </td>
          </tr>

          <tr>
            <td align="right">Specialization :&nbsp; </td>
            <td> Computer Sciences</td>
          </tr>
        </table>
        <br>

        
        <br>
        <br>
        <br><br><br><br><br><br>
        <p style="font-family:'Times New Roman';font-size: 19px">He/She gets the following marks in Semester I</p>
        <p style="font-family:'Times New Roman';font-size: 19px">Total marks obtained 100% include Exam + Tuto + Assignment+ Project + Presentation + Attendence</p>

        






<div id="mydiv">

  <form action="" method="POST">
          <label style="font-family:'Times New Roman';font-size: 19px">Enter Student Code : </label><input type="text" name="name" id = "name" style="font-family:'Times New Roman';font-size: 19px" >
          <input type="submit" name="submit" style="font-family:'Times New Roman';font-size: 19px" class="btn btn-primary">
        
      <select class ="semester" id="semester" name="sel" onchange="fun_Show()" style="width: 120px;float: right;font-size: 19px;font-family:'Times New Roman';">
        <option value='' selected disabled hidden> Choose Here</option>
        <option id="one" value=1>1 Semester</option>  
        <option id="two" value=2>2 Semester</option>
        <option id="three" value=3 >3 Semester</option>
        <option id="four"  value=4>4 Semester</option>
        <option  id="five" value=5>5 Semester</option>
        <option id="six" value=6 >6 Semester</option>
        <option  id="seven" value=7>7 Semester</option>
        <option id="eight" value=8>8 Semester</option>
        <option  id="nine" value=9>All Semester</option>
        
      </select> <br><br>
      </form>
</div>


               <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];
                            if (!empty($_POST['sel'])){
                              $sel = $_POST['sel'];
                              echo $sel;
                            }
                      }
                ?>



        <!-- semester 1 -->
        <div id="sem1">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>


              <tr>  

                 <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];



                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'M-1101'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
          
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp1=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
              <?php
            }
          }
          ?>
              </tr>

              <tr> 
                <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];

                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'E-1101'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp2=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
                  <?php
                }
              }
              ?>
              </tr>
              <tr> 
                 <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];

                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'P-1101'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp3=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
                  <?php
                }
              }
              ?>
              </tr>

              <tr> 
                 <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];

                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'CST-1111'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
                <td>4</td>
                <td>CST-1111</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp4=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
                  <?php
                }
              }
              ?>
              </tr>

              <tr> 
                 <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];

                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'CST-1142'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
                <td>5</td>
                <td>CST-1142</td>
                <td>Calculus I</td>
                <td>3</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp5=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
                <?php
                  }
                }
                ?>
              </tr>

              <tr> 
                <?php
                      require_once "db.php";
                      if (isset($_POST['submit'])){
                            $name=$_POST['name'];

                            $q="SELECT totalmark,grade,grade_score,grade_point from g where sid = '$name' and scode = 'SS-1101'";
                            $res=mysqli_query($conn,$q);

                          while($tdata=mysqli_fetch_assoc($res)){
                    ?>
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td><?php echo $tdata['totalmark']; ?></td>
                <td><?php echo $tdata['grade']; ?></td>
                <td><?php echo $tdata['grade_score']; ?></td>
                <td><?php 
                $gp6=$tdata['grade_point'];
                echo $tdata['grade_point']; ?></td>
                <?php
                  }
                }
                ?>
              </tr>
              <tr>
                <td colspan="3"> <center>Total Credit Unit</center></td>
                <td>17</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td>
                  <?php
                      $total_gp = $gp1+$gp2+$gp3+$gp4+$gp5+$gp6;
                      
                      $total_gp = round($total_gp,2);
                      echo $total_gp;


                    ?>

                </td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"> </td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td>
                  <?php 
                    $cgpa = $total_gp/17;
                    $cgpa = round($cgpa,2);
                    echo $cgpa;

                   ?>
                </td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td>
                  <?php 
                    echo $cgpa;
                  
                   ?>
                </td>
              </tr>
              

            </tbody></table>
          </div>



          <!-- semester 2-->
        <div id="sem2">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1201</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1201</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1201</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1211</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1242</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1201</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>17</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>




          <!-- semester 3 -->
        <div id="sem3">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>E-2101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>CST-2141</td>
                <td>Calculus II</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>CST-2112</td>
                <td>Programming Language Skill(Java)</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-2133</td>
                <td>Digital Logic Design</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-2124</td>
                <td>Database Management System</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SK-2155</td>
                <td>Supporting Skill</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>





          <!-- semester 4 -->
        <div id="sem4">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>E-2201</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>CST-2241</td>
                <td>Linear Algebra</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>CST-2212</td>
                <td>Data Structure and Algorithms</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-2223</td>
                <td>Software Engineering</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-2254</td>
                <td>web Technology(JavaScript Programming)</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>CST(SS)-2235<br>CST(SS)-2215</td>
                <td>Supporting Skill</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>



          <!-- semester 5 -->
        <div id="sem5">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1101</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1111</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>


          <!-- semester 6 -->
        <div id="sem6">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1101</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1111</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>



          <!-- semester 7 -->
        <div id="sem7">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1101</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1111</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>






          <!-- semester 8 -->
        <div id="sem8">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1101</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1111</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>




          <!-- semester 9 -->
        <div id="sem9">
            <table class="table table-bordered" style="font-family: 'Times New Roman';font-size: 19px">
            <thead>
              <tr>
                <th>No</th>
                <th>Subject Code</th>
                <th>Subjects</th>
                <th>Credit Unit</th>
                <th>Total Marks Obtained</th>
                <th>Grade</th>
                <th>Grade Score</th>
                <th>Grade Point</th>
              </tr>
            </thead>
            <tbody>
              <tr>  
                <td>1</td>
                <td>M-1101</td>
                <td>Myanmar</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>2</td>
                <td>E-1101</td>
                <td>English</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>3</td>
                <td>P-1101</td>
                <td>Physics</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>4</td>
                <td>CST-1101</td>
                <td>Principle of IT</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>5</td>
                <td>CST-1111</td>
                <td>Calculus I</td>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>

              <tr> 
                <td>6</td>
                <td>SS-1101</td>
                <td>Supporting Skill</td>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"><center>Total Credit Unit</center></td>
                <td>18</td>
                <td></td>
                <td colspan="2">Total Grade Points</td>
                <td></td>
                
              </tr>
              <tr >
                <td colspan="5" rowspan="2"></td>
                <td colspan="2"> Commulative GPA for each semester</td>
                <td></td>
              </tr>
              
              <tr>
                
                <td colspan="2">Overall GPA</td>
                <td></td>
              </tr>
              

            </tbody></table>
          </div>

        




      <script>

        function fun_Show(){
          var select_value = $('#semester').val();
          if(select_value == 1){
            $("#sem1").show();
            $("#sem2").hide();
            $("#sem3").hide();
            $("#sem4").hide();
            $("#sem5").hide();
            $("#sem6").hide();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 2){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").hide();
            $("#sem4").hide();
            $("#sem5").hide();
            $("#sem6").hide();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 3){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").hide();
            $("#sem5").hide();
            $("#sem6").hide();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 4){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").hide();
            $("#sem6").hide();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 5){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").show();
            $("#sem6").hide();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 6){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").show();
            $("#sem6").show();
            $("#sem7").hide();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 7){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").show();
            $("#sem6").show();
            $("#sem7").show();
            $("#sem8").hide();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 8){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").show();
            $("#sem6").show();
            $("#sem7").show();
            $("#sem8").show();
            $("#sem9").hide();
            $("#ftr").show();
          }
          if(select_value == 9){
            $("#sem1").show();
            $("#sem2").show();
            $("#sem3").show();
            $("#sem4").show();
            $("#sem5").show();
            $("#sem6").show();
            $("#sem7").show();
            $("#sem8").show();
            $("#sem9").show();
            $("#ftr").show();
          }

        }






        // hiding all divs at first

        $(document).ready(function(){
          $("#sem1").hide();
          $("#sem2").hide();
          $("#sem3").hide();
          $("#sem4").hide();
          $("#sem5").hide();
          $("#sem6").hide();
          $("#sem7").hide();
          $("#sem8").hide();
          $("#sem9").hide();
          $("#ftr").hide();
        });

      </script>





















        <p style="font-family:'Times New Roman';font-size: 19px">After SemesterI, His/Her Comulative GPA is *OGP*</p>
        
        <br> <br> 
      <!--   <div><img src="img/sign1.jpg" class="img-rounded" height="100" align="left" style="padding-left:  100px" >
        <img src="img/sign2.jpg" class="img-rounded" height="100" align="right" >
        </div> -->

        <br><br><br><br><br><br><br>

        <p align="right" style="font-family: 'Times New Roman';font-size: 19px; margin-right: 40px;"><b>Registrar</b></p>



        
        <br><br><br><br>
        <p style="font-family:'Times New Roman';font-size: 19px">Note.</p>
        <p style="font-family:'Times New Roman';font-size: 19px">UCS(Magway) follows a letter grading system for the courses.</p>
        <p style="font-family: 'Times New Roman';font-size: 19px">Letter grades and their corresponding grade point are given below</p>

<div id="ftr">
          <table class="table table-bordered" style="font-family:'Times New Roman';font-size: 19px">
        
          
        
            <tbody>

              <tr>
                <td>A+</td>
                <td>A</td>
                <td>A-</td>
                <td>B+</td>
                <td>B</td>
                <td>B-</td>
                <td>C+</td>
                <td>C</td>
                <td>D</td>
                <td>F/Abs/I</td>
              </tr>
              
              <tr>
                <td>5.0</td>
                <td>4.8</td>
                <td>4.67</td>
                <td>4.33</td>
                <td>4.0</td>
                <td>3.67</td>
                <td>3.33</td>
                <td>3.0</td>
                <td>2.0</td>
                <td>0.0</td>
              </tr>
            

          </tbody></table>

          </div>
        






        <div class="text-center">
          <button onclick="window.print();" class = "btn btn-primary" id="print-btn" style="width:150px; font-family:'Times New Roman';font-size: 19px">Print</button>
        </div>


      </div>
    </div>
  </div>


</body>

</html>