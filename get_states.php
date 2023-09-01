<?php
include('conn.php');

$sql = "SELECT * FROM dept_users_timings WHERE departmentid = '".$_POST['id']."'";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['slot_time'];
	$data['label']=$row['slot_time'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 