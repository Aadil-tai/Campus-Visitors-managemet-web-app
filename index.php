<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['uname'];
    $password=md5($_POST['upass']);
    $query=mysqli_query($con,"select ID from tbluser where  uname='$adminuser' AND upass='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['cvmsaid']=$ret['ID'];
     header('location:index_old.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

::-webkit-scrollbar {
  width: 10px;
}


::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 

::-webkit-scrollbar-thumb {
  background: #888; 
}


::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

html { 
  background: url(nightfb.jpg) center center fixed; 
  background-size: cover;
}

</style>
</head>
<body style="background:;">


<br>
<br>

 <center><h1 style="color:white" "size:10">WELCOME TO <b>PARUL UNIVERSITY</b></h1></center>
<center><a href="indexnew.php"><img src="finallogo.png" alt="Flowers in Chania" width="290" height="180"></a></center>
  <center><h1 style="color:white">Be Here...Be Vibrant</h1></center>
 <br>
<br>
<br>

  
</div>

</body>
</html>
