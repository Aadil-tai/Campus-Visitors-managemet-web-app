<?php
$error = NULL;

if (isset($_POST['submit'])) {
	# code...
   $mysqli= NEW MySQLi("localhost", "root", "", "aadil");

  $u= $mysqli->real_escape_string($u);
  $p= $mysqli->real_escape_string($p);
  $p = md5($p);

  $resultSet = $mysqli->query("SELECT * FROM  visitors_reg WHERE username= '$u' AND password = '$p' LIMIT 1");

  if ($resultSet->num_rows != 0) {

  	# code...
     $row = $resultSet->fetch_assoc();
     $varified = $row['varified'];
     $email = $row['email'];
     $date = $row['createdate'];
     $date = strtotime($date);
     $date = date('M d Y',$date);

     if ($varified == 1) {

     	# code... 
     	echo "your account is varified and  you have been logged in";
     }else{
     	echo "this account is not verified yet.email sent to $email on $date";
     }
  }else {
  	# code...
  	$error = "the username or password you entered is incorrect";

  }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<table border="0" align="center" cellpadding="5">
			<tr>
				<td align="right">username:</td>
				<td><input type="text" name="u" required=""/></td>
			</tr>

          <tr>
				<td align="right">password:</td>
				<td><input type="password" name="p" required=""/></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="login" required="" /></td></tr>


			

		</table>

	</form>
<center> <?php echo  $error;?></center>
</body>
</html>
