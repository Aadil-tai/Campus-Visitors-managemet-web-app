<?php
$error = NULL;


if(isset($_POST['submit'])){
  $f=$_POST['FirstName'];
  $l= $_POST['LastName'];
  $u= $_POST['userName'];
  $e= $_POST['email'];
  $p= $_POST['password'];
  $p2= $_POST['confirmPassword'];

/*if (strlen($u) < 5) {
  $error = "<p>your username must be at least 5 character</p>";
  # code...
}elseif ($p2 != $p) {
  # code...
  $error .= "<p>your password and confirm password should be same</p>";
}else{
*/  //form is valid
   $mysqli= NEW MySQLi("localhost", "root", "", "aadil");
$f=$mysqli->real_escape_string($f);
  $l= $mysqli->real_escape_string($l);
 $u=$mysqli->real_escape_string($u);

  $e= $mysqli->real_escape_string($e);
  $p= $mysqli->real_escape_string($p);
  $p2= $mysqli->real_escape_string($p2);

  $vkey = md5(time().$u);
//  echo $vkey;
  $p= md5($p);
  $insert = $mysqli->query("INSERT INTO visitors_reg (firstname,lastname,username,email,password,vkey) values ('$f','$l','$u','$e','$p','$vkey')");

  if($insert){
    $to = $e;
    $subject = "Email varification";
    $message = "<a href='/verify.php?vkey=$vkey'>Register account</a>";
    $headers = "From : aadiltai3884@gmail.com \r\n";
    $headers .= "MIME-Version:1.0"."\r\n";
    $headers .= "Content-type:text/html:charsat=UTF-8"."\r\n";

    mail($to, $subject, $message ,$headers);
    header('location:thankyou.php');

    }
  else{
    echo $mysqli->error; 
  }
  }



?>

<!DOCTYPE html>
<html style="color:black;">
<head>
  <title>sign up</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mcss.css">
<link rel="stylesheet" href="intl-tel-input-master/build/css/intlTelInput.css">
  <link rel="stylesheet" href="intl-tel-input-master/build/css/demo.css">
<style >
  ::-webkit-input-placeholder { /* Edge */
  color: red;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: red;
}

::label {
  color: red;
}

</style>
</head>
<center><body style="background-color: black; font-color: black;">
<div class="container"style="

width: 1000px;


background-color: skyblue;
padding-top: 20px;

padding-left: 50px;

border-radius: 200px;

border: 2px #b0b0b0 dotted;

border-color: green;

box-shadow: 8px 10px 15px #b0b0b0;

margin-bottom: 20px;

margin-left: 150px;

https://www.youtube.com/watch?v=vGm81GL_9rk&t=192s
">
  <h1 align="left"> <!-- style="color: red" -->
  sign up</h1>
  <div class="row" >

    <form class="col s6" id="myform" novalidate="">
        <div class="row">
          <div class="input-field col s6">
            <label for="FirstName" class="label danger" style="color: green;">first name</label>
            <input type="text" name="FirstName"  id="FirstName" onfocusout="validateFirstName()" min="4" maxlength="10" />
            <span class="helper-text"></span>
          </div>
    

    
        <div class="input-field col s6">
          <label for="LastName" style="color: green;">last name</label>
          <input type="text" name="LastName" id="LastName" onfocusout="validateLastName()" />
          <span class="helper-text"></span>
        </div>
     </div>

    <div class="row">
          <div class="input-field col s12">
            <label for="username" style="color: green;">username</label>
            <input type="text" name="username" id="username" onfocusout="validateuserName()"  />
            <span class="helper-text"></span>
          </div>
     </div>    

     <div class="row">
      <div class="input-field col s6">
          <label for="email" style="color: green;">email</label>
        <input type="email" name="email" id="email"/>
        <span class="helper-text"></span>
      </div>

      <div class="input-field col s19">
        <!--   <label for="number" style="color: green;" onfocusout="validate_mobile()">phone number</label>
        <input type="number" name="number" id="number" onfocusout="validateUser()"/>
        <span class="helper-text"></span>
      -->     <input id="phone" name="phone" type="number">
</div>
     
     </div>
    
       <div class="row">
         <div class="input-field col s5">
           <label for="password" style="color: green;">password</label>
           <input type="password" name="password" id="password" onfocusout="validatePassword()"/>
         <span class="helper-text" style="position: absolute;"></span>
         <span class="eye" onclick="Toggle()" style="position: absolute; padding-top: 15px;">
  <i id="hide1" class="fa fa-eye" style="display: none;"></i>
  <i id="hide2"class="fa fa-eye-slash"></i>
</span>
         </div>

            <div class="input-field col s5" style="  float: right; ">
               <label for="confirmPassword" style="color: green;">confirm password</label>
               <input type="password" name="confirmPassword" id="confirmPassword" onfocusout="validateConfirmPassword()" />
                  <span class="helper-text" style="position:absolute ;"></span>
           <span class="eye1" onclick="Toggle1()" style=" position: absolute; padding-top: 15px;">
  <i id="hide3" class="fa fa-eye" style="display: none;"></i>
  <i id="hide4"class="fa fa-eye-slash"></i>
</span>

            </div>
    
          

    </div>  
<br><br>     <button class="btn waves-effect wave-light" type="submit" align="center">
       Signup
     </button>
     </form>
     <div class="col s6">
        <img src="ak.jpg" style="width: 100%; border-radius: 6px; opacity: 0.85" alt="university logo"/>
     </div>
     </div> 
    </div>

         <script src="js/materialize.min.js"></script>
  <script src="intl-tel-input-master/build/js/intlTelInput.js"></script>

         <script src="script.js" ></script>

   <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "intl-tel-input-master/build/js/utils.js",
    });

function Toggle() { 
            var x = document.getElementById("password"); 
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === "password") { 
                  x.type = "text"; 
                  y.style.display = "block";
                  z.style.display = "none";

            } 
            else { 
                  x.type = "password"; 
                  y.style.display = "none";
                  z.style.display = "block";
           } 
        } 
function Toggle1() { 
            var x = document.getElementById("confirmPassword"); 
            var y = document.getElementById("hide3");
            var z = document.getElementById("hide4");

            if (x.type === "password") { 
                  x.type = "text"; 
                  y.style.display = "block";
                  z.style.display = "none";

            } 
            else { 
                  x.type = "password"; 
                  y.style.display = "none";
                  z.style.display = "block";
           } 
        } 


   </script>
  
</body>
</center>
</html>