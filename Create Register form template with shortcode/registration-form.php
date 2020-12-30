<?php
/*
Template Name: Registration
*/
global $wpdb;
if(isset($_POST['submit'])){
	$u_email = ($_POST['email']);
	$u_username = ($_POST['username']);
	$u_psw = ($_POST['psw']);
	if(email_exists( $u_email )){
		echo "email already exists";
	}
	else
	{
		$userdata = array(
               'user_login' => $u_username,
				'user_email' => $u_email,
				'user_pass' => md5($u_psw),
				'role' => 'administrator',
				
               );
		 $user = wp_insert_user( $userdata );
		 if($user){
		 	echo "<script>window.location.href='#' </script>";
		 }
	}
	
}

?>
	
	<form action="" method="post">
		<label for="text"><b>Username</b></label><br>
		<input type="text" placeholder="Username" name="username" id="username" required>
		<br><br>
		<label for="email"><b>Email</b></label><br>
		<input type="text" placeholder="Enter Email" name="email" id="email" required>
		<br><br>
		<label for="psw"><b>Password</b></label>
		<br>
		<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
		<br><br>
		<button type="submit" class="registerbtn" name="submit">Register</button>
  
		</form>
     

