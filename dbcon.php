<?php

$server= "localhost";
$user = "root";
$password = "";
$db = "aadil";

$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
	?>
	<script>
		aleart("connection succesfull");
	</script>
	<?php
}else{
	?>
	<script>
		aleart("no connection");
	</script>
	<?php
}

  ?>
