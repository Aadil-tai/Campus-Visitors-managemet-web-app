const FirstName = document.getElementById('FirstName');
const LastName = document.getElementById('LastName');
const userName = document.getElementById('username');
const number = document.getElementById('number');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');
const mobile=document.getElementById('mobile');
var mysql = require('mysql');
//form 
var con = mysql.createConnection({
  host: "localhost",
  user: "yourusername",
  password: "yourpassword",
  database: "mydb"
});
const form = document.getElementById('myform');

const green = 	'#4CAF50';
const red = '#F44336';

/*form.addEventListener('submit',function(event){
event.preventDefault();
if(
validateFirstName() &&
validateLastName()&&
validateuserName()&&
validatePassword() &&
validateConfirmPassword()
){
const name =FirstName.value;
const container = document.createElement('div');
const loader = document.createElement('div');
loader.className = 'progress';
const loadingBar = document.createElement('div');
loadingBar.className = 'interminate';
loader.appendChild(loadingBar);
container.appendChild(loader);
setTimeout(function(){
const loaderDiv = document.querySelector},1000)
}
})
*/





//validation function
function validateFirstName()
{
	//check if empty
	//check if it has only number

	if(checkIfEmpty(FirstName)) return;
   
    if(!checkIfOnlyLetters(FirstName)) return;
    return true;
}

function validateLastName()
{
	//check if empty
	//check if it has only number

	if(checkIfEmpty(LastName)) return;
   
    if(!checkIfOnlyLetters(LastName)) return;
    return true;
}
function validateuserName()
{
	//check if empty
	//check if it has only number

	if(checkIfEmpty(userName)) return;
   
    if(!checkIfOnlyLetters(userName)) return;
    return true;
}

function validatePassword()
{
	if(checkIfEmpty(password)) return;
	//must be in certain length
	if(!meetLength(password, 6, 15)) return;
	// check password for length
    if(!containsCharacters(password,3)) return;
     return true;

}
function validateConfirmPassword()
{
	if(password.className !== 'valid'){
		setInvalid(confirmPassword , 'password must match');
	    return;	
	}
	 if(password.value !== confirmPassword.value){
	 	setInvalid(confirmPassword, 'password must match');
     return;

	 }else{
	 	setValid(confirmPassword);

	 }
	 return true;
}


function validate_mobile(mobile)
{
    return preg_match('/^[0-9]{10}+$/', mobile);
}
//utility functions
   function checkIfEmpty(field){
	if(isEmpty(field.value.trim())){
		//set field invalid
          setInvalid(field,`${field.name} must not be empty`);
		return true;

	}else{
		//set field valid
         setValid(field);
		return false;


	}
}
function isEmpty(value){
	if(value === '') return true;
	return false;

}

function setInvalid(field, message){
    field.className = 'invalid';
    field.nextElementSibling.innerHTML = message;
    field.nextElementSibling.style.color =red;

}

function setValid(field){
    field.className = 'valid';
    field.nextElementSibling.innerHTML = '';
 // field.nextElementSibling.style.color =green;
    	
}


function checkIfOnlyLetters(field){
	if(/^[a-zA-Z ]+$/.test(field.value)){
		setValid(field);
		return true;

	}else{
		setInvalid(field, `${field.name} must containt only letters`);
		return false;

	}
}

function meetLength(field,minLength,maxLength){
	if(field.value.length >= minLength && field.value.length < maxLength ){

		setValid(field);
		return true;

	}else if (field.value.length < minLength){
		 	setInvalid(field, `${field.name} must be at least ${minLength} characters Long`);
		 	return false;

	}else{
		setInvalid(field , `${field.name} must be at shorter than ${maxLength} characters`);
		return false;

	}
}
 function containsCharacters(field,code){
	let regEx;
	switch(code)
	{
		case 1:
		//letters
		regEx = /(?=.*[a-zA-Z])/;
        return matchWithRegEx(regEx , field ,'must containt at least one letter ');

        case 2:
        //letters and numbers
		regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
        return matchWithRegEx(regEx , field ,'must containt at least one letter or one number');
       
        case 3:
        //uppercase , lower case and nu
		regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
        return matchWithRegEx(regEx , field ,'must containt at least one uppercase ,one lowercase one number');
         
        case 4:
        regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/
		return matchWithRegEx(regEx , field ,'must containt at least one uppercase ,one lowercase one number and special character');
		default:
		return false;

	}
}
function matchWithRegEx(regEx, field,message){
	if(field.value.match(regEx)){
		setValid(field);
		return true;

	}else{
		setInvalid(field , message);
		return false;


	}
}
