<?php
include('conn.php');

$sql = "SELECT * FROM department";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['departmentname'];
	$data['label']=$row['departmentname'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 