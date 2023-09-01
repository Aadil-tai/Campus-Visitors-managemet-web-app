<?php
require_once("includes/dbconnection.php");

if (!empty($_POST["phone"])) {
    $phone = $_POST["phone"];

    $result = mysqli_query($con, "SELECT PhoneNumber FROM visitors WHERE PhoneNumber='$phone'");
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "<span style='color:red'> Phone number already exists.</span>";
    } else {
        echo "<span style='color:green'> Phone number available for Registration.</span>";
    }
}
?>
