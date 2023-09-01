<?php
// Include necessary files
include('includes/dbconnection.php');

// Checking if the form has been submitted
if(isset($_POST['submit'])) {
    // Collect the form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $insert_query = "INSERT INTO visitors (Name, PhoneNumber, Email, Password) VALUES ('$name', '$phone', '$email', '$hashed_password')";

    // Execute the SQL statement
    if (mysqli_query($conn, $insert_query)) {
        // Registration successful
        // You can redirect to a success page or show a success message here
        echo "Registration successful!";
    } else {
        // Registration failed
        // You can redirect to an error page or show an error message here
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <!-- Add the necessary meta tags and external stylesheets/scripts here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function checkemailAvailability() {
            $("#loaderIcon").show();
            $.ajax({
                url: "check_availability.php",
                data: 'emailid=' + $("#Email").val(),
                type: "POST",
                success: function (data) {
                    $("#email-availability-status").html(data);
                    $("#loaderIcon").hide();
                },
                error: function () {}
            });
        }

    </script>
<script>
function checkPhoneAvailability() {
    $("#loaderIcon").show();
    $.ajax({
        url: "check_phone_availability.php",
        data: 'phone=' + $("#phone").val(),
        type: "POST",
        success: function (data) {
            $("#phone-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function () { }
    });
}
</script>

</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="logoblackn.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder=""
                               required/>
                        <label class="form-label" for="name">Name</label>
                    </div>

                    <!-- Phone number input -->
<div class="form-outline mb-4">
    <input type="tel" id="phone" name="phone" class="form-control form-control-lg"
        placeholder="" required onBlur="checkPhoneAvailability()" />
    <label class="form-label" for="phone">Phone Number</label>
    <span id="phone-availability-status"></span>
</div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="Email" name="Email" class="form-control form-control-lg"
                               placeholder="" required onBlur="checkemailAvailability()"/>
                        <label class="form-label" for="email">Email address</label>
                        <span id="email-availability-status"></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="password" name="password" class="form-control form-control-lg"
                               placeholder="" required/>
                        <label class="form-label" for="password">Password</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register
                        </button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                                                                                             class="link-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Add the necessary JavaScript code here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function () {
        Main.init();
        FormElements.init();
    });
</script>
</body>
</html>
