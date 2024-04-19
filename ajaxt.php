<?php
require_once 'db.php';

$output ='';



if (isset($_POST["year"])) {
	if ($_POST["year"] !='') {
		$sql = "select * from subject where scode regexp '".$_POST["year"]."'";
	}
	else{
		$sql = "select * from subject";
	}
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


echo  $output;



}

?>