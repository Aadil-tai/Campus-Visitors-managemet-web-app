<?php
//$error = NULL;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	# code...
  include('includes/dbconnection.php');
  $email= real_escape_string($_POST['mail']);
  $password= real_escape_string($_POST['password']);
  $password = password_hash($password);

  $query = "SELECT * FROM  `vs_reg` WHERE `mail` = '$email' AND `password` = '$password'");
  $result = mysqli_query($con, $query);

 $num = mysqli_num_rows($result);

 if ($num == 1) {
   # code...
  $login = true;
 
  	# code...
     $row = fetch_assoc();
     $varified = $row['varified'];
     $email = $row['mail'];
     $date = $row['createdate'];
     $date = strtotime($date);
     $date = date('M d Y',$date);
     
     if($varified == 1){

     	# code... 
     	echo "your account is varified and  you have been logged in";
       session_start();
       $_SESSION['visitor'] = true;
       header('location: thankyou.php')
 
     }else{
     	echo "this account is not verified yet.email sent to $email on $date";
     }
  }else{
  	# code...
  	$error = "The Username or Password You Entered Is Incorrect";
 }
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َpuvisit || Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
      body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}

    </style>
  </head>
  <body>

<form class="box" action="loginmail.php" method="POST">
  <h1>Login</h1>
  <input type="text" name="mail" placeholder="mail">
  <input type="password" name="password" placeholder="Password">
  <input type="submit" name="submit" value="Login">
<center style="color:red;  font-family: sans-serif;
"> <?php echo  $error;?></center>
</form>


  </body>
</html>
<!--
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
				<td colspan="2" align="center"><input type="submit" value="login"/></td></tr>


			

		</table>

	</form>
</body>
</html>
-->