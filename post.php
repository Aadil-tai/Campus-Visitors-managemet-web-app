<?php

$mysqli = new mysqli("localhost", "root", "", "aadil");

$name = $_POST['name'];
$email = $_POST['email'];
$v_faci = $_POST['vfacility'];
$u_cam = $_POST['campus'];
$g_nam = $_POST['nguard'];
$g_beha = $_POST['gbeha'];
$h_name = $_POST['nhost'];
$d_faci = $_POST['dfaci'];


$sql = "INSERT into feedbacks (name,email,v_facility,u_campus,g_name,g_behaviour,h_name,d_facility) VALUES('$name','$email','$v_faci','$u_cam','$g_nam','$g_beha','$h_name','$d_faci')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For visit :)";


header( "refresh:5; url=/puvisit.tk/indexnew.php" )

?>