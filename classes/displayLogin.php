<?php

/* displayLogin2.php - using a html page for post action 
   Matt Lee 10172012 */

?>

<?php
  include "../includes/header.html";
?>

<html>
      <div class="loginPrompt">
	<form action='login.php' method='POST'>
            <table>
               <tr>
                  <td>
                    Username:
                  </td>
                  <td> 
                     <input type='text' name='username' value=''> <!--user friendly -->
                  </td>
               </tr>
               <tr>
                  <td>
                   Password:
                  </td>
                  <td> 
                    <input type='password' name='password'>
                  </td>
               </tr>
            </table>
                <input type='submit' name='submit' value='Log in'>
        </form><p>
               <a href='register.php'>Are You Register?</a></p>
      </div>
</html>


<?php
  include "../includes/footer.html";
?>
