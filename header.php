<header class="mb-auto">
  <div>
    <h3 class="float-md-start mb-0">The Wedding Planner</h3>
    <nav class="nav nav-masthead justify-content-center float-md-end">
      <a class="nav-link active" href="index.php">Home</a>
      <a class="nav-link active" href="#">About</a>
      <?php
        if(isset($_SESSION["useruid"]))
        {
          echo "<a class='nav-link active' href='profile.php'>Profile</a>";
          echo "<a class='nav-link active' href='includes/logout.inc.php'>Logout</a>";
        }
        else
        {
          echo "<a class='nav-link active' href='signUp.php'>Sign Up</a>";
          echo "<a class='nav-link active' href='signIn.php'>Login</a>";
        }
      ?>
    </nav>
  </div>
</header>
