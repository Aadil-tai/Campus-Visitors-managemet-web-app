<!DOCTYPE html>
<html id="courseReg" class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>about puvms</title>
  
    <!-- include the stylesheets to be used on the page --> 
  <!--<?php// include("css2/main.css"); ?>-->
  
  <!-- end css2-->

</head>

<body style="background-color:powderblue;">
  <div id="wrapper">

    <header>
<style>
table, th, td {
  border: 1px solid black;
}
</style>      </div>
    </header>
&nbsp&nbsp&nbsp
<table align="center">
    <tr><th align="center"><h1><font color="red">About The Website</font></h1></th>
</tr>
<tr> <td>  <center>     <font size="5"><p>Nowadays, in most organizations Visitor management consists of visitors scribbling their name in a paper book."; </p></font></center>
    <center>    <font size="5"> <p>"Instead, Parul university management system will assist you the professionalized way in which you welcome your visitors."</p></font>		</center> 


   <center>     <font size="5"> <p>The website is made in PHP/HTML5 with JavaScript and jquery.</p>  </font></center></td> </tr>
   </table>
<br>
<br>
<br>
<table align="center">
<tr>   <th>     <h1><font color="red">About Us</font></h1></th>
     <tr> <td>  <p>The team member 
            <ul>
                
                <li><font size="2">AADIL TAI(180510101090)</font></li>
                <li><font size="2">SAHIL YADAV(180510101099)</font></li>
                </ul>
       
        </p></td></tr>
      </section>


</table>  
    </div>
  </div>
<a href="index.php">Home</a>


  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<!-- 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
 -->
  <script type="text/javascript" src="js/modernizr-2.0.6.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.8.18.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
        $('#login-form').submit(function(e) {
            e.preventDefault();
            var postUrl = $(this).attr("action");
            var request = $.ajax({
                type: 'POST',
                url: postUrl,
                data: $(this).serialize()
            })
            request.done(function(response) {
                if(response.status==="success") {
                    window.location.href = response.access;
                }
                else {
                    $('.form-error').show().html(response.message);
                }            
            });
        });
    });
  </script>
  <!-- end scripts-->
	

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>