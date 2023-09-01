<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> Account activation process with email verification using PHP, MySQL and Swiftmailer </h2> 
            </div>
        </div>
      
            <div class="col-md-2"></div>
            <div class="col-md-5 well">
                <h4>Login</h4> 
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnLogin" class="btn btn-primary" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>