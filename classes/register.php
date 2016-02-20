<?php
  /* Register.php
     Matt Lee
     10202012   */
?>

<?php
if(!$_SESSION['username']) {
    // some code ;
}
else
{
    header('Location: http://www.holden4u.com/JOPCINC/index.html');
    exit();
}
?>






<?php
//  include 'init.php';
?>



<?php
  include "../includes/header.html";
?>

<?php

  echo "<h1>Register</h1>";

  $submit = $_POST['submit'];
  $username = strtolower(strip_tags($_POST['username']));
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];
  $email = $_POST['email'];
  $firstname = strip_tags($_POST['firstname']);
  $lastname = strip_tags($_POST['lastname']);
  $date = date("Y-m-d");

  if ($submit) {

      if ($firstname&&$lastname&&$username&&$password&&$confirmPassword&&$email){


        // encrypt password use

       /* $salt = "!427yOHiq7uM";
        $password = $_POST['password'];
        $password = md5($salt.$password);
        $confirmPassword = $_POST['confirmPassword'];
        $confirmPassword = md5($salt.$confirmPassword);*/

        if ($password==$confirmPassword) {
            // checking length of first/last name
              if (strlen($firstname)>25 || strlen($lastname)> 25){
                 echo "Length of firstname/lastname is to long. Max=25";
              }
              else
              {
            // checking password length
              if (strlen($password)> 15 || strlen($password)< 6) {
                  echo "Password must be between 6 and 15 characters";
              }
              else
              {
            // checking email is unique
//              if (strlen($email)>50 || strlen($email)< 2) {
//                  echo "email must be unique";
               if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])
  .*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",
               $email)){


                  echo "email must be valid";



              }
//              else
//              { 
            // register the user.
               
             $salt = "!427yOHiq7uM";
             $password = $_POST['password'];
             $password = md5($password);
             $confirmPassword = $_POST['confirmPassword'];
             $confirmPassword = md5($confirmPassword);




//               echo "Success!";

               // database process
               $connect = mysql_connect("24.7.226.40","jopc1234","d7HDKDzj2012!");
               mysql_select_db("loginphp");


            //  check for dupicate username while database is open. 
              $userNameCheck = mysql_query("SELECT username FROM users WHERE username='$username'");
              $count = mysql_num_rows($userNameCheck);
                           if ($count!=0){
                              die ("Username Already been taken! Try Another username please. <a href='register.php'>Return to Register page</a>");
                           }
                           else
                           { 
                            echo "SUCCESS!";        
                           }
             


//santize items
               $username = mysql_real_escape_string($username);
               $email = mysql_real_escape_string($email);
               $firstname = mysql_real_escape_string($firstname);
               $lastname = mysql_real_escape_string($lastname);

               $queryReg = mysql_query("
                   INSERT INTO users VALUES ('', '$username', '$password', '$email', '$firstname', '$lastname', '$date');

               ");
                    $myId = mysql_insert_id(); //good. Displayed correct number.
                    $_SESSION['id'] = $myId ; //locked in session with id.

		       die("You have been registered!, Now you can login. <a href='displayLogin.php'>Return to login page</a>");
		      }
		  } 

		} 
		else
		   echo "Your passwords do not match!";



	     
	      }
	      else
		 echo "Please fill in <b>all</b> fields !";
	}





	?>

<html>
<p>

<form action='register.php' method='POST'>
     <table>
         <tr>
            <td>
              Your First Name:
            </td>
            <td>
            <input type='text' name='firstname' maxlength='25' value='<?php echo $firstname; ?>'> <!-- user friendly -->
            </td>
          </tr>
          <tr>
            <td>
              Your Last Name:
            </td>
            <td>
            <input type='text' name='lastname' maxlength='25' value='<?php echo $lastname; ?>'><!-- user friendly -->
            </td>
         </tr>
          <tr>
            <td>
              Choose a username:
            </td>
            <td>
            <input type='text' name='username' maxlength='15' value='<?php echo $username; ?>'><!-- user friendly -->
            </td>
         </tr>
          <tr>
            <td>
              Create a Password:
            </td>
            <td>
            <input type='password' name='password'>
            </td>
         </tr>
          <tr>
            <td>
              Confirm Password:
            </td>
            <td>
            <input type='password' name='confirmPassword'>
            </td>
         </tr>
         <tr>
           <td>
              Your email:
           </td>
           <td>
           <input type='email' name='email' size='25' maxlength='50'>
           </td>
         </tr>
     </table>
      <p>
      <input type='submit' name='submit' value='Register'>
</form>
</html>

<?php
  include "../includes/footer.html";
?>
