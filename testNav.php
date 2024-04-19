 <!-- ======= Header ======= -->
  <!-- <header id="header" class="fixed-top"> -->
   <!--  <div class="container d-flex"> -->
      <div class="logo mr-auto" id = "hi">
        <h1 class="text-light"><a href="index.php">Credit System</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="navbar navbar-inverse">

        <div class="container-fluid">

           <div class=" navbar-header">            
            <button class="navbar-toggle" data-toggle = "collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>   
          </div>
          
       <div class=" collapse navbar-collapse">
             <ul class="nav navbar-nav">
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
        </div>
      </nav><!-- .nav-menu -->
      
