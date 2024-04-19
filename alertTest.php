<!DOCTYPE html>
<html>
<head>
	<title>Alert Test</title>
	
</head>
<body>

<form action="" method="POST">
	User Id : <input type="text" name="id"> <br>
	User Name :  <input type="text" name="name"><br>
	<input type="submit" name="submit" value="Submit">

</form>
<script src="js/sweetalert.min.js"></script>

<?php 
  require_once('db.php');
  if(isset($_POST['submit'])){

    $id = $_POST['id']; 
    $name = $_POST['name']; 

    $q= " SELECT * from user where uid='$id'";
    $res = mysqli_query($conn,$q);
    $row = mysqli_num_rows($res);

    if($row != 1){
    	echo '<script>swal("New User Inserted Successfully"); </script>';
    } 
    else{
    	echo '<script>swal("User is already existed.Can not be added twice!");</script>';
    }

    $query = "INSERT INTO user values('$id','$name')";
    mysqli_query($conn,$query);
}
 ?>

</body>
</html>