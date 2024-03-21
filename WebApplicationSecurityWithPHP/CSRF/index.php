<?php 
session_start();
//require 'connect.php';

/* 
This line generates a random token of 100 bytes, then hashes it using the MD5 algorithm, and stores it in the session variable $_SESSION['TOKEN']. 
This token will be used to protect against CSRF attacks.
*/
$_SESSION['TOKEN'] = md5(random_bytes(100));
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <title>CSRF</title>
</head>
<body>
   <form action="profile.php" method="POST">
   <?php echo $_SESSION['TOKEN'];echo"<br>";?><!--echo the value of the token stored in the session.-->
   <input type="submit" value="delete my account">
   <input type="hidden" name="CSRF" value= <?php echo $_SESSION['TOKEN'];?>/>
  </form>
</body>
</html>