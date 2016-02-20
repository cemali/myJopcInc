<?php
// Photo Upload
// Matt Lee 10/28/2012
?>

<?php
    session_start();
?>


<?php
if(!$_SESSION['username'])
    die("You must be logged in to view this page !<a href='home.php'>Go to Home Page to Login</a>");
?>

<?php
include '..init.php';

?>


<?php
include '../includes/header.html';
?>

<div class="page content">
      <div id="column2">
       <center table>
        <tr>
        <td>
        <img src="../images/landing.png" alt="Must be Register to upload photos" />
        </td>
        </tr>
        </table>
<?php
include '../includes/footer.html';
?>
