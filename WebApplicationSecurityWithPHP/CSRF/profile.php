<?php
// ####################
// code not fix
//######################

/*
# Here no check for any thing ,
*/

// require 'connect.php';
// $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
// $query->execute([
//   'user_id' => $_SESSION['user_id'],
// ]);



####################
// code fix
######################
session_start();
//require 'connect.php';



    if(isset($_SERVER['REQUEST_METHOD']) == 'POST')//This line checks if the current HTTP request method is POST. If it is, the code inside the curly braces will be executed
    {
      echo "Valied Mthoed.... (: <br>";//If the request method is POST, this line echo Valid Method
      if(isset($_POST['CSRF']) === $_SESSION['TOKEN'])//This line checks if the value submitted via the form with the name "CSRF"  is identical to the value stored in the session variable $_SESSION['TOKEN']. If they match, the code inside the curly braces will be executed.
      {
        echo "Valid TOKEN.... (: <br>";//If the CSRF token submitted matches the one stored in the session
        echo "<br>"; 
        echo "<br>";
        echo "Account deleted successfully";
        $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");//This line prepares an SQL statement to update the status column of the users table to 0 where the id matches the value stored in the session variable $_SESSION['user_id'].
        $query->execute(['user_id' => $_SESSION['user_id']]);//This line executes the prepared SQL statement, updating the status of the user's account to 0, effectively disabling it.
      }else{
        die("Invaild Token");
      }
      
    }
    
        ?>
        
<!-- 
In summary, this code ensures that the request method is POST, checks the validity of the CSRF token submitted with the form,
 and proceeds with updating the user's account status if the token is valid.
 If the token is invalid, it terminates the script to prevent unauthorized access.
  -->