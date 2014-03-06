<?php
$title = 'Register / Login';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require('includes/head.php'); ?>
		<script type="text/javascript">
		function toggleLogin() {
			var regDisp = document.getElementById('register-form');
			if (regDisp.style.display == "block") {
				regDisp.style.display = "none";
				document.getElementById('login-form').style.display = "block";
				document.getElementsByTagName('h2')[0].innerHTML = "Login Now";
				document.getElementsByTagName('h3')[0].innerHTML = 'Not registered? <a href="javascript:toggleLogin()">Register</a> now.';
			}
			else {
				regDisp.style.display = "block";
				document.getElementById('login-form').style.display = "none";
				document.getElementsByTagName('h2')[0].innerHTML = 'Register Now'
				document.getElementsByTagName('h3')[0].innerHTML = 'Already registered? <a href="javascript:toggleLogin()">Login</a> now.';
			}
		}
		function jsValidateForm(ch) {
			err = document.getElementById('error-msg');
			switch(ch) {
			case 1: 
				x=document.forms["register-form"]["register-email"].value;
				if (x==null || x=="") {
				  err.innerHTML = "You need an email address to register.";
				  return false;
				}
				var atpos=x.indexOf("@");
				var dotpos=x.lastIndexOf(".");
				if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
				  err.innerHTML = "Not a valid e-mail address";
				  return false;
				}
				x=document.forms["register-form"]["register-password"].value;
				if (x==null || x=="" || x.length < 6) {
				  err.innerHTML = "Password must be at least six characters.";
				  return false;
				}
				y=document.forms["register-form"]["register-password-confirm"].value;
				if (x != y) {
				  err.innerHTML = "Both password fields should match";
				  return false;
				}
				break;
			case 2:
				x=document.forms["login-form"]["login-email"].value;
				if (x==null || x=="") {
				  err.innerHTML = "Please enter the email address.";
				  return false;
				}
				y=document.forms["login-form"]["login-password"].value;
				if (y==null || y=="") {
				  err.innerHTML = "Please enter the password";
				  return false;
				}
				if (x!="admin" || y!="pass") {
				  err.innerHTML = "Email or password is incorrect.";
				  return false;
				}
				break;
			}
			err.innerHTML = "&nbsp";
			location.href="index.html";
			
		}
		</script>
	</head>
	<body>
		<div class="main">
			<!-- Header -->
			<?php require('includes/header.php'); ?>
			<!-- Header close -->
			<!-- Content body -->
			<div class="content">
				<div class="col">
				<h2>Register Now</h2>
				<h3>Already registered? <a href="javascript:toggleLogin()">Login</a> now.</h3>
				<h4 id="error-msg">&nbsp;</h4>
				<form id="register-form" style="display: block;">
					<div class="form-div">
						<div class="form-row">Email<input type="text" id="register-email"></div>
						<div class="form-row">Password<input type="password" id="register-password"></div>
						<div class="form-row">Confirm Password<input type="password" id="register-password-confirm"></div>
						<a class="quick-book-submit clearfix" href="javascript:jsValidateForm(1);">Register</a>
					</div>
				</form>
				<form id="login-form" style="display: none;">
					<div class="form-div">
						<div class="form-row">Email<input type="text" id="login-email"></div>
						<div class="form-row">Password<input type="password" id="login-password"></div>
						<a class="quick-book-submit clearfix" href="javascript:jsValidateForm(2);">Login</a>
					</div>
				</form>
				</div>
			</div>
			<!-- Content body close -->
			<!-- Footer -->
			<?php require('includes/footer.php'); ?>
			<!-- Footer close -->
		</div>
	</body>
</html>