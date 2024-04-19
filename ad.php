
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

if(isset($_POST['submit'])){
 $cu=$_POST['cu'];
    
    echo 'cu is :' .$cu;





}


?>

<h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <select  name="cu" id="cu" onchange="fun_Show()" class="form-control">
         <option value="" selected disabled hidden> Choose Here</option>
       
        <option id="three" value="3" default>3</option>
        
        <option id="two" value="2">2</option>
        <option id="zero" value="0">0</option>  
        
      </select>   
  
  <input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>
