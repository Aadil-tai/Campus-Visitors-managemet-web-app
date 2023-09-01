<?php
$error = NULL;


if(isset($_POST['submit'])){

  $u= $_POST['u'];
  $e= $_POST['e'];
  $p= $_POST['p'];
  $p2= $_POST['p2'];

if (strlen($u) < 5) {
  $error = "<p>your username must be at least 5 character</p>";
  # code...
}elseif ($p2 != $p) {
  # code...
  $error .= "<p>your password and confirm password should be same</p>";
}else{
  //form is valid
   $mysqli= NEW MySQLi("localhost", "sedjbpkn_aadil", "Aadiltai123", "sedjbpkn_aadil");

  $u= $mysqli->real_escape_string($u);
  $e= $mysqli->real_escape_string($e);
  $p= $mysqli->real_escape_string($p);
  $p2= $mysqli->real_escape_string($p2);

  $vkey = md5(time().$u);
  $p= md5($p);
 $insert = $mysqli->query("INSERT INTO visitors_reg (username,email,password,vkey) values ('$u','$e','$p','$vkey')");

  if($insert){
    $from = "aamir@puvisit.tk";
    $to = $e;
    $subject = "Verify your PuVisit Account!";
    $message = "Dear user, <br>Your account has been created on pumail<br> Click <a href='http://puvisit.tk/verify.php?vkey=$vkey'>Here</a> to verify Your Account";
    $headers = "From:" . $from;
    $headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  
    if(mail($to, $subject, $message ,$headers))
    {
    header('location:thankyou.php');
	}
    else {
    echo "mail not sent";
    }
    }
  else{
    echo $mysqli->error; 
  }
  }

}

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style="
  background-color: black;
  margin-top: 200px;
  
  margin-left: 100px;
  margin-right: 100px; 
  border-radius: 4px;
  color:white;
">
<form method="POST" action="" style="  color:red;
">
  
  <table border="1" align="center" cellpadding="5">
    <tr>
      <td align="center">Username:</td>
      <td><input type="text" name="u" required="" /></td>
    </tr>

<tr>
      <td align="center">email</td>
      <td><input type="text" name="e" required="" /></td>
    </tr>

<tr>
      <td align="center">password:</td>
      <td><input type="password" name="p" required="" /></td>
    </tr>

<tr>
      <td align="center">confirm password:</td>
      <td><input type="password" name="p2" required="" /></td>
    </tr>
<tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="Register" required=""/></td>
</tr>

  </table>
</form><center><?php echo $error;?></center>
</body>
</html>