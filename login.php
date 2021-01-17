<?php
  session_start();
  $username = $_POST['username']; 
  $password = $_POST['password'];
  if($username === 'admin' && $password === 'Hx77leuyYvQ5'){
    $_SESSION['login'] = true;
    header('LOCATION:tasks.php');
    //die();
  }  {
          echo "<h1>Login failed</h1>";
          echo "<i>Username and Password do not match.</i><br><br>";
          //echo "session login".$_SESSION['login']."<br>";
          echo "Username:".$_POST['username']."<br>";
          echo "Password:".$_POST['password']."<br>";
        }
?>
<br>
<a href="index.php">Back</a>
