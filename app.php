<?php
/*session_start();
error_reporting(0);
include('dbconn.php');
  include "lib/qrlib.php";
  include "config.php";
if (!isset($_SESSION['cvmsaid'])) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cvmsaid=$_SESSION['cvmsaid'];
$fullname=$_POST['fullname'];

$mobnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$add=$_POST['address'];
$date=$_POST['date'];
$whomtomeet=$_POST['whomtomeet'];
$department=$_POST['department'];
$timetomeet=$_POST['timetomeet'];
$reasontomeet=$_POST['reasontomeet'];
$query=mysqli_query($con,"insert into tblonlinevisitor(FullName,Email,MobileNumber,Address,date,WhomtoMeet,Deptartment,ReasontoMeet) value('$fullname','$email','$mobnumber','$add','$date','$whomtomeet','$department','$timetomeet','$reasontomeet')");

 $qrUname = "aadil";
 
    $qrImgName = "qr".rand();
  
  
  
 $qc=$fullname;

    $final = $qc;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($qrUname,$final,$qrimage,$qrlink);
   
   if ($query) {
    $msg="Visitors Detail has been added.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
*/
$msg="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PU Visitors Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


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
	</style>    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
<script src="assets11/js/jquery.min.js"></script>
<script src="assets11/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets11/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets11/css/custom.css">
    <script>
function getdept_users(val) {
  $.ajax({
  type: "POST",
  url: "get_dept_users.php",
  data:'departmentid='+val,
  success: function(data){
    $("#dept_users").html(data);
  }
  });
}
</script> 


<script>
function getfee(val) {
  $.ajax({
  type: "POST",
  url: "get_dept_users.php",
  data:'dept_users='+val,
  success: function(data){
    $("#fees").html(data);
  }
  });
}
</script> 

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includenew/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                             
							 <strong>Add</strong> your details

                                    </div>
                                    <div class="card-body card-block">
                                        <form action="action/action.php" method="post" enctype="multipart/form-data" class="form-horizontal">
   
   <p style="font-size:16px; color:green" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <input type="hidden" name="AppointmentID" value="<?php echo $AppointmentID; ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="<?php echo $_SESSION['visitor_name']; ?>" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required ?>                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" value="<?php echo $_SESSION['visitor_Email']; ?>" id="email" name="email" placeholder="Enter Email" class="form-control" required="">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" class="form-control" maxlength="10" required="">
                                                    
                                                </div>
                                            </div>
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" id="address" rows="4" placeholder="Enter Visitor Address..." class="form-control" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">when you wants to visit</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="date" min="<?php echo date("Y-m-d"); ?>">
                                                    
                                                </div>
                                            </div>

                                           <!-- Department Dropdown -->
<div class="row form-group">
  <div class="col col-md-3">
    <label for="department" class="form-control-label">Department</label>
  </div>
  <div class="col-12 col-md-9">
    <select name="department" id="department" class="form-control" onchange="getWorkingHours(this.value)" required>
      <option value="">Select department</option>
      <?php
      include("dbconn.php");
      $ret = mysqli_query($con,"select * from department");
      while($row = mysqli_fetch_array($ret)) {
        echo "<option value='".htmlentities($row['department'])."'>".htmlentities($row['department'])."</option>";
      }
      ?>
    </select>
  </div>
</div>

<!-- Working Hours Dropdown -->
<div class="row form-group">
  <div class="col col-md-3">
    <label for="working_hours" class="form-control-label">Time Slot</label>
  </div>
  <div class="col-12 col-md-9">
    <select name="working_hours" id="working_hours" class="form-control" onchange="getDepartmentUsers()" required>
      <option value="">Select working hours</option>
    </select>
  </div>
</div>

<!-- Department Users Dropdown -->
<div class="row form-group">
  <div class="col col-md-3">
    <label for="department_users" class="form-control-label">Department Authority</label>
  </div>
  <div class="col-12 col-md-9">
    <select name="department_users" id="department_users" class="form-control" required>
      <option value="">Select department Authority</option>
    </select>
    <span id="working_hours_info"></span>
  </div>
</div>

<script>
function getWorkingHours(department) {
  if (department == "") {
    document.getElementById("working_hours").innerHTML = "<option value=''>Select working hours</option>";
    document.getElementById("department_users").innerHTML = "<option value=''>Select department users</option>";
    return;
  } else {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var working_hours = JSON.parse(this.responseText);
        var options = "<option value=''>Select working hours</option>";
        for (var i = 0; i < working_hours.length; i++) {
          options += "<option value='" + working_hours[i].id + "'>" + working_hours[i].start_time + " - " + working_hours[i].end_time + "</option>";
        }
        document.getElementById("working_hours").innerHTML = options;
        getDepartmentUsers();
      }
    };
    xhttp.open("GET", "getWorkingHours.php?department="+department, true);
    xhttp.send();
  }
}

function getDepartmentUsers() {
  var department = document.getElementById("department").value;
  var working_hours = document.getElementById("working_hours").value;
  if (department != "" && working_hours != "") {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var department_users = JSON.parse(this.responseText);
        var options = "<option value=''>Select department users</option>";
for (var i = 0; i < department_users.length; i++) {
  options += "<option value='" + department_users[i].id + "'>" + department_users[i].dept_users +"</option>";
}
document.getElementById("department_users").innerHTML = options;

var working_hours_info = "Working Hours of department Authority: " + document.getElementById("working_hours").options[document.getElementById("working_hours").selectedIndex].text;
document.getElementById("working_hours_info").innerHTML = working_hours_info;
}
};
xhttp.open("GET", "getDepartmentUsers.php?department="+department+"&working_hours="+working_hours, true);
xhttp.send();
} else {
document.getElementById("department_users").innerHTML = "<option value=''>Select department users</option>";
document.getElementById("working_hours_info").innerHTML = "";
}
}
</script>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Reason To Meet</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="reasontomeet" name="reasontomeet" placeholder="Reason To Meet" class="form-control" required="">
                                                    
                                                </div>
                                                   <div class="col-12 col-md-9">
                                                    <input type="hidden" id="visitor_type" name="VisitorType"  class="form-control" value= "OnlineVisitor" required="">
                                                    
                                                </div>
                                            </div>
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm" >Submit
                                        </button></p>
                                        
                                    </div>
                                        </form>
                                    </div>
                                   
                                </div>
                       
                        </div>
                        
                    </div>
               
 
<?php include_once('includes/footer.php');?>
   </div> </div>
            </div>
        </div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<div class="div">
  
</div>

<!-- <script type="text/javascript">
	
  $(document).ready(function(){


    /*Get the country list */

      $.ajax({
        type: "GET",
        url: "get_countries.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.countries').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.countries').find("option:eq(0)").html("Select department");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.countries').append(option);
         });  

          /*ends */
          
        }
      });



    /*Get the state list */


    $('.countries').change(function(){
      $.ajax({
        type: "POST",
        url: "get_states.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $(".states option:gt(0)").remove(); 
      $(".cities option:gt(0)").remove(); 
      $('.states').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.states').find("option:eq(0)").html("Select timeslots");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.states').append(option);
         });  

          /*ends */
          
        }
      });
    });




    /*Get the state list */





    $('.states').change(function(){
      $.ajax({
        type: "POST",
        url: "get_cities.php",
        data:{id:$(this).val()}, 
          beforeSend :function(){
   
      $(".cities option:gt(0)").remove(); 
      $('.cities').find("option:eq(0)").html("Please wait..");

        },  

        success: function (data) {
          /*get response as json */
            $('.cities').find("option:eq(0)").html("Select name");

          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);
           $('.cities').append(option);
         });  
          
          /*ends */
          
        }
      });
    });




  });




</script>
 --><style type="text/css">
  
</style>
