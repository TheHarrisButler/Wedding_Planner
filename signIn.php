<?php
	include_once 'head.php'
?>
    <link href="css/signIn.css" rel="stylesheet">
  </head>
  <body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <?php
        include_once 'header.php';
      ?>
      <div class="signup-form">
          <form action="includes/login.inc.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
              <input type="text" class="form-control" name="uid" placeholder="Username or Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary mx-auto d-block">Login</button>
            </div>
            <?php
              if (isset($_GET["error"]))
              {
                if ($_GET["error"] == "emptyinput")
                {
                  echo "<p> Fill in all fields!</p>";
                }
                elseif ($_GET["error"] == "wronglogin")
                {
                  echo "<p>Failed login. Incorrect login information.</p>";
                }
              }
            ?>
          </form>
        <div class="text-center">Don't have an account? <a href="signUp.php">Register</a></div>
      </div>
    </div>
  </body>
</html>
