<?php

if (isset($_POST["submit"]))
{
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $accounttype = intval($_POST["accounttype"]);

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat, $accounttype) !== false)
  {
      header("location: ../signUp.php?error=emptyinput");
      exit();
  }
  if (invalidUid($username) !== false)
  {
      header("location: ../signUp.php?error=invaliduid");
      exit();
  }
  if (invalidEmail($email) !== false)
  {
      header("location: ../signUp.php?error=invalidemail");
      exit();
  }
  if (pwdMatch($pwd, $pwdRepeat) !== false)
  {
      header("location: ../signUp.php?error=pwdnomatch");
      exit();
  }
  if (uidExists($conn, $username, $email) !== false)
  {
      header("location: ../signUp.php?error=usernametaken");
      exit();
  }

  createUser($conn, $name, $email, $username, $pwd, $accounttype);
}
else
{
  header("location: ../signUp.php");
  exit();
}
