<?php
		$Success  = $p_err = $age_err = $nameErr = $error = $email_err = "";
		//db file calling
		include_once 'db.php';
		// get value from registration form
		if (isset($_POST['reg'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];
			$mob = $_POST['mob'];
			//age validation..
			$dob = $_POST['dob'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dob), date_create($today));
			//name  validation..
			if (!trim($_POST["name"]) == "") {
				if ($diff->format('%y%') > 18) {
					//check email ..
					$data = mysqli_query($conn, "SELECT email FROM users Where email = '$email'");
					$check_email = mysqli_num_rows($data);
					if ($check_email == FALSE) {
						if ($pass == $cpass) {
							//Encryption
							$pass = sha1(md5(crc32($pass)));
							//Insert Data
							$querry = "INSERT INTO users(name, email,password,dob, mob) Values('$name','$email','$pass','$dob','$mob')";
							$sql = mysqli_query($conn, $querry);
							if ($sql) {
								$Success="Registered Successfully";
							} else {
								$error="Internal Error You Couldn't Register !!";
							}
						} else {
							$p_err= "Confirm Password Mismatched";
						}
					} else {
						$email_err= "$email is already registered...";
					}
				} else {
					$age_err = "Age must be greater than 18 years";
				}
			} else {
				$nameErr = "Please enter the valid Name";
			}
		}
    ?>

