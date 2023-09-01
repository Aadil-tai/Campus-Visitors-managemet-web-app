<?php
include('conn.php');

$sql = "SELECT * FROM dept_users WHERE dept_user_id = '".$_POST['id']."'";
$result = mysqli_query($conn, $sql);


    // output data of each row
while($row = mysqli_fetch_assoc($result)) {


	$data['value']=$row['dept_user_name'];
	$data['label']=$row['dept_user_name'];
	$json[]=$data;      
}
echo json_encode($json);


mysqli_close($conn);
?> 