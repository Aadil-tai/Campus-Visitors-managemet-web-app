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
  </head>
  <body>
    <section class="vh-100">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="draw2.webp"
              class="img-fluid" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form method="post" action="process_register.php">
              
              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="text" id="name" name="name" class="form-control form-control-lg"
                  placeholder="" required />
                <label class="form-label" for="name">Name</label>
              </div>

              <!-- Phone number input -->
              <div class="form-outline mb-4">
                <input type="tel" id="phone" name="phone" class="form-control form-control-lg"
                  placeholder="" required />
                <label class="form-label" for="phone">Phone Number</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="" required />
                <label class="form-label" for="email">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" id="password" name="password" class="form-control form-control-lg"
                  placeholder="" required />
                <label class="form-label" for="password">Password</label>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">
Register
</button>
<p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                 class="link-danger">Login</a></p>
</div>        </form>
      </div>
    </div>
  </div>
</section>
<!-- Add the necessary scripts here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
  </body>
</html>
