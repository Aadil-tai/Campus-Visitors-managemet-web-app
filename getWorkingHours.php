<?php
include("dbconn.php");
$department = $_GET['department'];
$query = "SELECT * FROM working_hours WHERE id IN (SELECT working_hours_id FROM dept_users WHERE department = '$department')";
$result = mysqli_query($con, $query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);
?>
