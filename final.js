/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
	$("#myDropdown").toggle("show");
}

function show_login() {
	$("#login").toggle("show");
}

function show_signup() {
	$("#signup").toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
	if (!event.target.matches(".dropbtn") && !event.target.matches(".safe")) {
		var dropdowns = $(".dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if(!(openDropdown.offsetParent === null)){
				$(openDropdown).toggle("show");
			}
		}
	}
}

// Attempt to make website check for cookie on page load
$(document).ready(function (){
	if ($.cookie('logged_in')!=null) {
		$('#logindiv').hide();
		$('#signupdiv').hide();
		$('#signout').show();
		document.getElementById('display_user').innerHTML = $.cookie('user');
	}
	else {
		$('#logindiv').show();
		$('#signupdiv').show();
		$('#signout').hide();
	}
	$("#loginform").submit(function(){
		tryLogin();
		if ($.cookie('logged_in')!=null) {
			$('#logindiv').hide();
			$('#signupdiv').hide();
			$('#signout').show();
		}
	});
	$("#signupform").submit(function(){
		trySignUp();
		if ($.cookie('logged_in')!=null) {
			$('#logindiv').hide();
			$('#signupdiv').hide();
			$('#signout').show();
		}
	});
})

// Process user login
function tryLogin(){
	var myData={"user":$("#user").val(), "pass":$("#pass").val()};
	console.log(myData);
	$.ajaxSetup({async:false});
 	$.post("login.php",myData,function(message){
		alert(message);
	})
}
// Process user singup
function trySignUp() {
	var valid = verify($("#new_username").val(), $("#new_password").val(), $("#re_password").val());
	if (valid == false) {
		console.log("");
		return false;
	}
	else {
		var myData={"username":$("#new_username").val(), "password":$("#new_password").val()};
		console.log(myData);
        $.ajaxSetup({async:false});
		$.post("signup.php",myData, function(message){
			alert(message);
        });
	}
}

//Logout user
function logout(){
	$.removeCookie('logged_in', {path: '/'});
	$.removeCookie('user', {path: '/'});
	$('#logindiv').show();
	$('#signupdiv').show();
	$('#signout').hide();
	alert("You have successfully logged out.");
	window.location.reload()
}

//Verifies username and password
function verify(user, pass, repass){
    let usernameRE = /[A-Za-z]\w{5,9}/;
    let passwordRE = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,10}/;
    if (!usernameRE.test(user)){
        window.alert("Invalid Username");
        return false;
    }
    if(pass != repass){
        window.alert("Passwords don't match");
        return false;
    }
    else{
        if(!passwordRE.test(pass)){
            window.alert("Invalid Password");
        return false;
        }
        window.alert("Passed Validation");
        return true;
    }
}