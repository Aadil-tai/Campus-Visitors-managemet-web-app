<!DOCTYPE html> 
<html> 
<body> 

<b><p>Click on the checkbox to show 
		or hide password: </p></b> 

<b>Password</b>: <input type="password"
	value="geeksforgeeks" id="typepass"> 

<input type="checkbox" onclick="Toggle()"> 
	<b>Show Password</b> 

	<script> 
	// Change the type of input to password or text 
		function Toggle() { 
			var temp = document.getElementById("typepass"); 
			if (temp.type === "password") { 
				temp.type = "text"; 
			} 
			else { 
				temp.type = "password"; 
			} 
		} 
</script> 
</body> 
</html> 
