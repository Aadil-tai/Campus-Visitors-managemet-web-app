<?php
include('dbconn.php');
if(!empty($_POST["departmentid"])) 
{

 $sql=mysqli_query($con,"select dept_users,id from dept_users where department='".$_POST['departmentid']."'");?>
 <option selected="selected">Select department user </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['dept_users']); ?></option>
  <?php
}
}

?>