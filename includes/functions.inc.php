<?php

//function to check empty input
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat, $accounttype)
{
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) || empty($accounttype))
  {
    $result = true;
  }
  else
  {
      $result = false;
  }
  return $result;
}

//function to check invalid user ID
function invalidUid($username)
{
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
  {
    $result = true;
  }
  else
  {
    $result = false;
  }
  return $result;
}
//function to check invalid email
function invalidEmail($email)
{
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    $result = true;
  }
  else
  {
    $result = false;
  }
  return $result;
}
//function to check if passwords match
function pwdMatch($pwd, $pwdrepeat)
{
  $result;
  if ($pwd !== $pwdrepeat)
  {
    $result = true;
  }
  else
  {
    $result = false;
  }
  return $result;
}
//function to check if the userID exists
function uidExists($conn, $username, $email)
{
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signUp.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData))
  {
    return $row;
  }
  else
  {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}
//function to create new user
function createUser($conn, $name, $email, $username, $pwd, $accounttype)
{
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, accounttype) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql))
  {
    header("location: ../signUp.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $hashedPwd, $accounttype);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  //THIS IS WHERE THE USER GETS SENT AFTER THEY LOGIN
  header("location: ../signUp.php?error=none");
  exit();
}

//function to check empty input login
function emptyInputLogin($username, $pwd)
{
  $result;
  if (empty($username) || empty($pwd))
  {
    $result = true;
  }
  else
  {
      $result = false;
  }
  return $result;
}

function loginUser($conn, $username, $pwd)
{
  $uidExists = uidExists($conn, $username, $username);

  if ($uidExists == false)
  {
    header("location: ../signIn.php?error=wronglogin");
    exit();
  }

  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd == false)
  {
    header("location: ../signIn.php?error=wronglogin");
    exit();
  }
  else if ($checkPwd == true)
  {
    session_start();
    $_SESSION["userid"] = $uidExists["usersID"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    header("location: ../venues/home.php");
    exit();
  }
}
