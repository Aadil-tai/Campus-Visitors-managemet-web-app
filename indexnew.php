<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['visitors']==0)) {
  header('location:logout.php');
  } else{ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Parul University Visitors Management System</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.jumbotron {
			background-color: #fff;
			padding: 80px 25px;
			margin-bottom: 0;
			text-align: center;
			color: #5c5c5c;
			font-family: Arial, sans-serif;
		}

		h1.display--1 {
			font-size: 3rem;
			font-weight: bold;
			margin-bottom: 0;
			line-height: 1.2;
			text-transform: uppercase;
		}

		p.display-3 {
			font-size: 2rem;
			font-weight: bold;
			margin-bottom: 0;
			line-height: 1.2;
			color: #007bff;
		}

		hr.my-4 {
			border-color: #007bff;
			width: 10%;
			margin: 30px auto;
		}

		p {
			font-size: 1.25rem;
			margin-bottom: 1rem;
			font-weight: 300;
			line-height: 1.2;
		}
	</style>
</head>
<body>
	<?php include('includenew/header.php'); ?>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display--1">Welcome to Parul University Visitors Management System!</h1>
			<p class="display-3"><h1><?php echo $_SESSION['visitor_name']; ?></h1></p>
			<hr class="my-4">
			<p>You can close this window, you will be logged in!</p>
		</div>
	</div>
	<?php include('includenew/footer.php'); ?>
	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>