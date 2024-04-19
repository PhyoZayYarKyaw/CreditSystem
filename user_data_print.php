<!DOCTYPE html>
<html>
<head>
	<title>PHP Export</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <style>
  	div.absolute{
  		position: absolute;
  		top:0;
  		left:10px;

  	}
  </style>

</head>
<body>
	<!-- <img src="download3.jpg" class="img-rounded" height="100" align="center"> -->

	<!-- <script src="//code.jquery.com/jquery-latest.min.js"></script> 
	<script src="FileSaver.js"></script> 
	<script src="jquery.wordexport.js"></script> -->
	<div class="container">
		<div class ="row">
			<div class ="col-md-12">
				<div class="absolute"><img src="download3.jpg" class="img-rounded" height="100" align="center" ></div>
				<p align="center" style="font-size: 14px"><b>The Republic of the Union of Myanmar</b></p>
				<p align="center" style="font-size: 14px"><b>University of Computer Studies(Magway)</b></p>
				<p align="center" style="font-size: 14px"><b>Grade Sheet</b></p>



				<table align="right" style="font-size: 1s3px">
					<tr>
						<td >Date:</td>
						<td>12.2.2020</td>
					</tr>

					<tr>
						<td>Name:</td>
						<td>Myo Myo</td>
					</tr>

					<tr>
						<td>Roll Number:</td>
						<td>UCSMGY-19001</td>
					</tr>

					<tr>
						<td>Specialization:</td>
						<td> Computer Sciences</td>
					</tr>
				</table>
				<br>

				
				<br>
				<br>
				<br>
				<p style="font-size: 13px">He/She gets the following marks in Semester I</p>
				<p style="font-size: 13px">Total marks obtained 100% include Exam + Tuto + Assignment+ Project + Presentation + Attendence</p>

				<table class="table table-bordered" style="font-size: 13px">
				<thead>
					<tr>
						<th>Teacher ID</th>
						<th>Teacher Name</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require_once "dbcon.php";

						$q="SELECT * FROM teacher";
						$res=mysqli_query($con,$q);

						while($tdata=mysqli_fetch_assoc($res)){
					?>
					<tr>
						<td><?php echo $tdata['tid']; ?></td>
						<td><?php echo $tdata['tname']; ?></td>
						<td><?php echo $tdata['address']; ?></td>
					</tr>
					<?php
						}
					?>


				</tbody></table>


				<p style="font-size: 13px">After SemesterI, His/Her Comulative GPA is *OGP*</p>
				
				<br>
				<p align="right" style="font-size: 13px">Registar</p>



				

				<p style="font-size: 13px">Note.</p>
				<p style="font-size: 13px">UCS(Magway) follows a letter grading system for the courses</p>
				<p style="font-size: 13px">Letter grades and their corresponding grade point are given below</p>

				<table class="table table-bordered" style="font-size: 13px">
				
					
				
				<tbody>

					<tr>
						<td>A</td>
						<td>A-</td>
						<td>B+</td>
						<td>B</td>
						<td>B-</td>
						<td>C+</td>
						<td>C</td>
						<td>C-</td>
						<td>D</td>
						<td>F</td>
					</tr>
					
					<tr>
						<td>4</td>
						<td>3.75</td>
						<td>3.25</td>
						<td>3</td>
						<td>2.75</td>
						<td>2.25</td>
						<td>2</td>
						<td>1.75</td>
						<td>1</td>
						<td>0</td>
					</tr>
				

				</tbody></table>








				<div class="text-center">
					<button onclick="window.print();" class = "btn btn-primary" id="print-btn">Print</button>
				</div>


			</div>
		</div>
	</div>
</body>
</html>