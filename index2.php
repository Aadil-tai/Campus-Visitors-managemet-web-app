 <?php include('includenew/header.php'); ?><!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
	<style>
/* updated CSS for Feedback Form */

/* Fonts */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
body {
  font-family: 'Open Sans', sans-serif;
}

h1 {
  text-align: center;
  margin-top: 50px;
  color: #333;
}

form {
  margin: 50px auto;
  max-width: 500px;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
  transition: all 0.3s ease-in-out;
}

form:hover {
  transform: scale(1.02);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  transition: all 0.3s ease-in-out;
}

input[type=text]:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: 0 0 10px #999;
}

input[type=submit] {
  background-color: #1abc9c;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  transition: all 0.3s ease-in-out;
}

input[type=submit]:hover {
  background-color: #16a085;
}


/* Media Query for responsive layout */
@media screen and (max-width: 600px) {
  form {
    max-width: 100%;
  }
}
	</style>
</head>
<body>	

	<h1>Feedback Form</h1>
	<form action="submit_feedback.php" method="post">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" required>

		<label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email" required>

		<label for="subject">Subject:</label>
		<input type="text" id="subject" name="subject" placeholder="Enter the subject" required>

		<label for="message">Message:</label>
		<textarea id="message" name="message" placeholder="Enter your message" style="height:200px" required></textarea>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
