
<!DOCTYPE HTML>
<html>

<head>

	<style type="text/css">
		.err{
		font-size: 15px;
		color: #000000;
		}
		.error{
		color: red;
		}

		body {
			background-color:#444C5B;
			  border-radius: 25px;
             }

        
	</style>
</head>

<body> 
<center>
	
		<h1 style="color: #00008b">Registration Form
		</h1>
		
	    <h2 style="color: green;">
		<?php echo $Success;?>
		<h2 style="color: red;">
		<?php echo $error;?>
	<form method="POST" action="insert.php">
		<fieldset>
		<p class="err">	Enter Your Full Name
				<input type="text" class="form-control" name="name" placeholder="Enter Name" required>
				<br>
				<span class="error">
					<?php echo $nameErr;?>
				</span>
			</p>

	
	
			<p class="err">	Enter Your Email:
				<input type="email" name="email" placeholder="Enter Email" required>
				<br>
				<span class="error">
					<?php echo $email_err;?>
				</span>
			</p>
		
			<p class="err">Enter  Password:    <input type="Password" name="pass" placeholder="Enter Password" required></p>

			<p class="err">Confirm Password:   <input type="Password" name="cpass" placeholder="Enter Confirm Password" required><br><span class="error"><?php echo $p_err;?></span></p>
			<p class="err">	Date of Birth:
				<input type="date" name="dob"   placeholder="Enter dob" required>
				<br>
				<span class="error">
					<?php echo $age_err;?>
				</span>
			</p>
			<p class="err"> Enter Mobile no:
				<input type="tel" name="mob"  pattern="[0-9]{10}"  title="Ten digits code" placeholder="Enter mobile no." required>
				
				<p class="err">
					<input type="submit"    name="reg" value="Sign Up" style="background-color:#2F4F4F" >
				</p>
         </fieldset>
	</form>
</div>	
			
		</center>
		
	</body>
</html>