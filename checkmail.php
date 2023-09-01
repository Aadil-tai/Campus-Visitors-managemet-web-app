<?php
require_once 'includes/dbconnection.php';

$email = trim($_POST["email"]);
$sql = "select * from tbl_users where email='$email' ";

$result=$con->query($sql);

if(mysqli_num_rows($result) > 0)
{
echo "Email is already exist.try another one";
}	
?>