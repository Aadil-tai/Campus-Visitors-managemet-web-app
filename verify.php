<?php  
 
if (isset($_GET['vkey'])) {
	# code...
	$vkey = $_GET['vkey'];

	$mysqli = NEW MySQLi('localhost','root','','aadil');

	$resultSet = $mysqli->query("SELECT verified,vkey FROM visitors_reg WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");

	if ($resultSet->num_rows == 1) {
		# code...validate
		$update = $mysqli->query("UPDATE visitors_reg SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
         
        if ($update) {
        	echo "your account has been varified,now you may be log in";

        	# code...
        }
        else{
        	echo $mysqli->error;
        }
	}else{
		echo "this account is not valid or already varified";
	}
}else{
	die("something went wrong");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>verify</title>
</head>
<body>

</body>
</html>