<?php 
	require "header.php"; 
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Sign Up</h1>
			<form class="form-SignUp" action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-request" placeholder="Request-Password">
				<button type="submit" name="signup-submit" placeholder="Password">Sign Up</button>	
			</form>
		</section>
	</div>
</main>

<?php 
	require " footer.php";
?>
