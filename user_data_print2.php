<!DOCTYPE html>
<html>
<head>
	<title>PHP Export</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">

</head>
<body>
	
	<div class="container">
		<div class ="row">
			<div class ="col-md-12">
				<div id="mydiv">
 			<select class ="semester" id="semester" onchange="fun_Show()" style="width: 120px">
 				<option value='' selected disabled hidden> Choose Here</option>
	 			<option id="one" value="one">1 Semester</option>	
	 			<option id="two" value="two">2 Semester</option>
				<option id="three" value="three" >3 Semester</option>
				<option id="four"  value="four">4 Semester</option>
				<option  id="five" value="five">5 Semester</option>
				<option id="six" value="six" >6 Semester</option>
				<option  id="seven" value="seven">7 Semester</option>
				<option id="eight" value="eight">8 Semester</option>
				<option  id="nine" value="nine">All Semester</option>
				
 			</select>
 		</div>



				<!-- semester 1 -->
				<div id="sem1">
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left:hidden; border-bottom: hidden;"></td>
								<td colspan="2" > Commulative GPA for each semester</td>
								<td></td>
							</tr>
							
							<tr>
								
								<td colspan="2">Overall GPA</td>
								<td></td>
							</tr>
							

						</tbody></table>
					</div>



					<!-- semester 2-->
				<div id="sem2">
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white;"></td>
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
						<table class="table table-bordered" style="font-size: 13px">
						<thead>
							<tr>
								<th>No</th>
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
								<td>Myanmar</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>2</td>
								<td>English</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr> 
								<td>3</td>
								<td>Physics</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>4</td>
								<td>Principle of IT</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>5</td>
								<td>Calculus I</td>
								<td>3</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>

							<tr> 
								<td>6</td>
								<td>Supporting Skill</td>
								<td>2</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"></td>
								<td>17</td>
								<td></td>
								<td colspan="2">Total Grade Points</td>
								<td></td>
								
							</tr>
							<tr >
								<td colspan="4" rowspan="2" style="border-left-color: white; border-bottom-color: white; "></td>
								<td colspan="2"> Commulative GPA for each semester</td>
								<td></td>
							</tr>
							
							<tr>
								
								<td colspan="2">Overall GPA</td>
								<td></td>
							</tr>
							

						</tbody></table>
					</div>









					<!-- <?php
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
					?> -->

	
				<table class="table table-bordered" style="font-size: 13px">
				
					
				
				<!-- <tbody>

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


 -->
 		
 		



 			<script>

 				function fun_Show(){
 					var select_value = $('#semester').val();
 					if(select_value == "one"){
 						$("#sem1").show();
						$("#sem2").hide();
	 					$("#sem3").hide();
	 					$("#sem4").hide();
	 					$("#sem5").hide();
	 					$("#sem6").hide();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "two"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").hide();
	 					$("#sem4").hide();
	 					$("#sem5").hide();
	 					$("#sem6").hide();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "three"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").hide();
	 					$("#sem5").hide();
	 					$("#sem6").hide();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "four"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").hide();
	 					$("#sem6").hide();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "five"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").show();
	 					$("#sem6").hide();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "six"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").show();
	 					$("#sem6").show();
	 					$("#sem7").hide();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "seven"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").show();
	 					$("#sem6").show();
	 					$("#sem7").show();
	 					$("#sem8").hide();
	 					$("#sem9").hide();
 					}
 					if(select_value == "eight"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").show();
	 					$("#sem6").show();
	 					$("#sem7").show();
	 					$("#sem8").show();
	 					$("#sem9").hide();
 					}
 					if(select_value == "nine"){
 						$("#sem1").show();
						$("#sem2").show();
						$("#sem3").show();
	 					$("#sem4").show();
	 					$("#sem5").show();
	 					$("#sem6").show();
	 					$("#sem7").show();
	 					$("#sem8").show();
	 					$("#sem9").show();
 					}

 				}








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
 				});

 			</script>





				<div class="text-center">
					<button onclick="window.print();" class = "btn btn-primary" id="print-btn">Print</button>
				</div>

				<script>

				</script>


			</div>
		</div>
	</div>
</body>
</html>