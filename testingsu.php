<!DOCTYPE html>
<html>
<head>
	<title>
		
		test
	</title>
</head>



<style type="text/css">
  

  #t2{

    display: none;
  }
</style>

<body>


	<form action="" method="post">
		<select name="sel" id="sel1">
			<option value='' selected disabled hidden> Choose Here</option>
			<option value="-1"> first year</option>
			<option value="-2"> second year</option>
			<option value="-3"> third year</option>
			<option value="-4"> fourth year</option>
			<option value="-5"> fifth year</option>


		</select>


		<input type="submit" name="submit"  value="select" id="submit" onclick="fun_Show()">


     <script>

        function fun_Show(){
          var select_value = $('#sel1').val();
          if(select_value == "0"){
           
            $("#t1").show();
             $("#t2").hide();
          }

          if(select_value == "-1"){

             $("#t2").show();
             $("#t1").hide();
          }
          if(select_value == "-2"){

             $("#t2").show();
             $("#t1").hide();
          }
          if(select_value == "-3"){

             $("#t2").show();
             $("#t1").hide();
          }
          if(select_value == "-4"){

             $("#t2").show();
             $("#t1").hide();
          }
          if(select_value == "-5"){

             $("#t2").show();
             $("#t1").hide();
          }

}


</script>
		

<script type="text/javascript">



	
function myFunction(){

var x = document.getElementById("t1");
var y = document.getElementById("t2");

if (x.style.display == "block") {
	x.style.display ="none";

}else{
	x.style.display ="block";
}


}




</script>



<?php

function fill_subject($conn){
require_once 'db.php';


$sql = "select * from subject";

$output = '';

 $data=mysqli_query($conn,$sql);
 $output .= '<table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                     <!--  <th>No</th> -->
                      <th>Subject Code</th>
                      <th>Subject Name</th>
                      <th>Subject Type</th>
                      <th>Standard Credit Unit</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead><tbody>';

 foreach ($data as $row) {





$output .= '<tr><td>'.$row["scode"].'</td><td>'.$row["subname"].'</td><td>'.$row["stype"].'</td><td>'.$row["scu"].'</td><td><a href="updatesubject.php?edit=<?php echo '.$row["scode"].'?>" class="btn btn-warning">Edit</a></td>
                    <td><button class="btn btn-secondary"><a class="deletesubject" href="viewsubject.php?delete=<?php echo '.$row["scode"].'?>">Delete</a></button></td></tr>';


}

$output .=' </tbody></table>';
return $output;
}
?>

		<div id = "t1"> 
			<?php
                    require_once 'db.php';

                    
                     echo fill_subject($conn);
                     ?>

		</div>

		<script type="text/javascript">

			$(document).ready(function(){
				$("#submit").toggle(function(){

					$("#t1").hide();
					$("#t2").show();
					},function(){

						$("#t2").hide();
					$("#t1").show();
					


				});


			});
			

		</script>

		 <div id = "t2">
                <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                     <!--  <th>No</th> -->
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
                    if (isset($_POST['submit'])) {
						if (isset($_POST['sel'])) {
						$year = $_POST['sel'];
                    
                    	 $query="SELECT * FROM `subject` where scode regexp '$year'";


              		      $data=mysqli_query($conn,$query);
              		  
              		
                    foreach ($data as $value) {
                      
                ?>
                <tbody>
                  <tr>
                    
                    <!-- <td><?php echo $no++; ?></td> -->
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
	</form>

	

</body>
</html>