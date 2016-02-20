<?php
  include "../includes/header.html";
?>


<?php

session_start(); // before destory we need to have a session


//This function will destroy your session

session_destroy();

echo "You are now logged out!";



?>

<?php
  include "../includes/footer.html";
?>
