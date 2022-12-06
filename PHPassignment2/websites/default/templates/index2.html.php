<main class="admin">
<h2>Log in</h2>
		<!-- <form action="" method="post" style="padding: 40px"> -->
		<form action="/admins/login" method="post" style="padding: 40px">
		<label>Enter Username</label>
		
			<input type="text" name="username" />
		
			<label>Enter Password</label>
			<input type="password" name="password" />
			<input type="submit" name="submit" value="Log In" />
		</form>
		
	<?php
	// var_dump($_SESSION);
	// echo sha1('opensesame');
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == 'work' && $_POST['username'] == 'fred'){
			$_SESSION['loggedin'] = true;	
			$_SESSION['master'] = $admin['master'];

		}
	}
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) header('location: /');

	
?>
		
	
</main>
	