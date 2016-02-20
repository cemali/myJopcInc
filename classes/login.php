<?php
/*  login.php
   Matt Lee
   10192012 */
?>


<?php
session_start();
?>


<?php
  include "../includes/header.html";
?>
<?php


$username = $_POST['username'];
$password = $_POST['password'];


if ($username && $password) {
$connect = mysql_connect("Pegasus.holden4u.com","jopc1234","d7HDKDzj2012!") or die("couldn't connect at this time");
mysql_select_db("loginphp") or die("couldn't find database");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows = mysql_num_rows($query);

   if ($numrows!=0){ //row for user 
 
   // login check
      while ($row = mysql_fetch_assoc($query)) {
      $dbusername = $row['username'];
      $dbpassword = $row['password'];

      }
        // check to see if the user and password matches
           
        if ($username == $dbusername && md5($password)==$dbpassword) {
           echo " You are Logged In, $username.";
           $_SESSION['username']=$username;
        }
        else
           echo "incorrect password!";
   }
   else
      die ("That user doesn't exist!"); // checking for user selected
    

}
else
    die("Please enter an user name and password");
?>







<?php

//if(isset($_POST['login_username'], $_POST['login_password'])) {
//   $login_username = $_POST['login_username'];
//   $login_password = $_POST['login_password'];

//    if (empty($login_username) || empty($login_password)) {
//        echo "Username and password required";
//    } else {
//    // check to matching of data
//       $username = mysql_real_escape_string($username);
//       $login_query = mysql_query("SELECT COUNT('id') as 'count', 'id' FROM 'users' WHERE 'username' = '$username' AND 'password' = '$password' = '".md5($salt.$password)."'");
//       return (mysql_result($login_query, 0) == 1) ? mysql_result($login_query, 0, 'id') : false;

//    }
//}
?>


<?php
  include "../includes/footer.html";
?>
