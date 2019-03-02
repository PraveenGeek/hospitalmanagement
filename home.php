<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="form">
		<div class="head" class="signup">
			<div onclick="swap(this);" class="login-tab" data-tab="login">
				LOGIN
			</div>
			<div onclick="swap(this);" class="signup-tab" data-tab="signup">
				SIGNUP
			</div>
		</div>
		
			<div class="signup">
				<div class="form-row">
				    <form action ="registration_code.php"method="post">
			          				<input type="text" name="firstname" placeholder="Enter the Firstname" required id="firstname">
			
			<input type="text" name="lastname" placeholder="Enter lastname" required id="lastname">
			
			<input type="Email" name="email" placeholder="Enter mail" required id="email">
			
			<input type="password" name="password" placeholder="Enter the password" required id="pwd"><br>
			
			<input type="submit" name="submit" value="SignUp">
		</form>
		            </form>
		        <div>
			</div>
	    </div>
	</div>
	<script>
		function swap(referTo){
			if(referTo.getAttribute("data-tab")=="login"){
				document.getElementById('form-body').classList.remove('active');
				referTo.parentNode.classList.remove('signup');
			}
			else{
				document.getElementById('form-body').classList.add('active');
				referTo.parentNode.classList.add('signup');
			}
		}
	</script>
</body>
</html>