<?php
	include_once 'head.php'
?>
		<link href="css/signUp.css" rel="stylesheet">
	</head>
	<body>
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
			<?php
				include_once 'header.php';
			?>
			<div class="signup-form">
			    <form action="includes/signup.inc.php" method="post">
						<h2>Sign Up</h2>
						<p class="hint-text">Create your account. It's free and only takes a minute.</p>
				        <div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="Full Name">
				        </div>
				        <div class="form-group">
				        	<input type="text" name="email" class="form-control" placeholder="Email">
				        </div>
								<div class="form-group">
				        	<input type="text" name="uid" class="form-control" placeholder="Username">
				        </div>
								<div class="form-group">
									<input type="password" name="pwd" class="form-control" placeholder="Password">
				       	</div>
								<div class="form-group">
									<input type="password" name="pwdrepeat" class="form-control" placeholder="Confirm Password">
				        </div>
								<div class="form-group">
									<p class="hint-text">Are you an individual planning your wedding or a venue owner looking to market your business?</p>
									<input class="form-check-input" type="radio" name="accounttype" id="individualradio" value="1">
									<label class="form-check-label" for="individualradio">
								    Individual
								  </label>
									<input class="form-check-input" type="radio" name="accounttype" id="businessradio" value="0">
									<label class="form-check-label" for="businessradio">
								    Venue Owner
								  </label>
				        </div>
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary mx-auto d-block">Sign Up Now</button>
				    		</div>
								<?php
									if (isset($_GET["error"]))
									{
										if ($_GET["error"] == "emptyinput")
										{
											echo "<p> Fill in all fields!</p>";
										}
										elseif ($_GET["error"] == "invaliduid")
										{
											echo "<p>Invalid Username! Try an different username.</p>";
										}
										elseif ($_GET["error"] == "invalidemail")
										{
											echo "<p>Email is invalid!</p>";
										}
										elseif ($_GET["error"] == "pwdnomatch")
										{
											echo "<p>Passwords don't match!</p>";
										}
										elseif ($_GET["error"] == "stmtfailed")
										{
											echo "<p>Something went wrong, please try again!</p>";
										}
										elseif ($_GET["error"] == "usernametaken")
										{
											echo "<p>Username already exist! Please try a different username.</p>";
										}
										elseif ($_GET["error"] == "none")
										{
											echo "<p>Congratulations, You are signed up!</p>";
										}
									}
								?>
			  	</form>
				<div class="text-center">Already have an account? <a href="signIn.php">Sign in</a></div>
			</div>
		</div>
	</body>
</html>
