<?php

include 'dbcon.php';
	
	if(isset($_POST['submit']))
	{
		$username =mysqli_real_escape_string($con,$_POST['username']);
		$email =mysqli_real_escape_string($con,$_POST['email']);
		$mobile =mysqli_real_escape_string($con,$_POST['mobile']);
		$password =mysqli_real_escape_string($con,$_POST['password']);
		$cpassword =mysqli_real_escape_string($con,$_POST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpass, PASSWORD_BCRYPT);

        $emailquery = "select * from visitors_login where email='$email' ";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
        	echo "email allready exist";

        }
        else{
        	if ($password === $cpassword) {
        		$insertquery = "insert into visitors_login (`username`, `email`, `mobile`, `password`, `cpassword`) values('$username','$email','$mobile','$pass','$cpass')";
        		# code...
        		$iquery = mysqli_query($con,$insertquery);
        	}else{
        	echo "password are not match";
        }


form-control
	}
?>
