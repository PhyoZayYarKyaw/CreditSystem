<!DOCTYPE html>
<html>
<head>
	<title></title>



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


	 <form action="testajax.php" method="post">
		

	 		<select name="sel"  id="year"class="navbar-link btn btn-info" style="height: 40px; margin-right: 30px;">
						<option value='' selected disabled hidden> Choose Here</option>
						  
						<option value="-1"> first year</option>
						<option value="-2"> second year</option>
						<option value="-3"> third year</option>
						<option value="-4"> fourth year</option>
						<option value="-5"> fifth year</option>
				</select>
<?php 

 require_once 'db.php';
function showsubject($conn){


$output = '';

$output .='<table class="table table-bordered" id="myTable">
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
                  </thead><tbody>';
$sql = "select * from subject";
$result = mysqli_query($conn,$sql);
$no=1;
while ($row = mysqli_fetch_array($result)) {
	$output .=' <tr>
                    
                    <td>'.$no++.'</td>
                   
                    <td>'.$row['scode'].'</td>
                    <td>'.$row['subname'].'</td>
                    <td>'. $row['stype'].'</td>
                    <td>'.$row['scu'].'</td>
                    
                    
                    <td><a href="updatesubject.php?edit=<?php echo '.$row['scode'].'?>" class="btn btn-warning">Edit</a></td>



                    <td><button class="btn btn-secondary"><a class="deletesubject" href="viewsubject.php?delete=<?php echo'. $row['scode'].'?>">Delete</a></button></td>
                  </tr>';
}
$output .='</tbody></table>';


return $output;


}




?>
			<div class ="row" id="showsub">
				<?php 

				echo showsubject($conn);
				?>


			</div>



	</form>





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

</body>
</html>


<script >
	
$(document).ready(function(){

	$('year').change(function(){

		var year = $(this).val();
		$.ajax({
			url : "ajaxt.php",
			method: "POST",
			data:{ scode : year},
			success:function(data){
				$('#showsub').html(data);
			}
		});

	});


});


</script>