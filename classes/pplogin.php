<?php
   require '../includes/glob.inc.php';


  if (isset ($_POST['login_username'], $_POST['login_password'])) {
     $login_username = trim(mysql_real_escape_string(htmlentities($_POST['login_username'])));
     $login_password = md5(trim(mysql_real_escape_string(htmlentites($_POST('login_password'])))));
     if (!empty($login_username) && !empty($login_password)) {
        $login_query = mysql_query("SELECT `id` FROM `users` WHERE `username`='".$login_username."' AND `password`='".$login_password."'");
          if (mysql_num_rows($login_query)==1) {
             $id = mysql_result($login_query, 0, 'id');
             $_SESSION['id'] = $id;
             header('Location: index.php');
             die();
          }
     }
  }

  if (isset ($_SESSION['id'])) {

  ?>

    <p>Your are logged in. <a href="logout.php">Log out</a></p>
   
    <form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
       <input type="hidden" name="cmd" value=" _xclick">
       <input type="hidden" name="business" value=" clarkp@jopcinc.org">
       <input type="hidden" name="item_name" value=" Premium Membership">
       <input type="hidden" name="item_number" value="1">
       <input type="hidden" name="amount" value="0">
       <input type="hidden" name="no_shipping" value="1">
       <input type="hidden" name="no_note" value="1">
       <input type="hidden" name="currency_code" value=" US">
       <input type="hidden" name="lc" value=" GB">
       <input type="hidden" name="bn" value=" PP-BuyNowBF">
       <input type="hidden" name="return" value=" http://Pegasus.holden4u.com/JOPCINC/">
       <input type="hidden" name="cancel_return" value=" http://Pegasus.holden4u.com/JOPCINC/">
       <input type="hidden" name="rm" value="2">
       <input type="hidden" name="notify_url" value=" http://Pegasus.holden4u.com/JOPCINC/classes/pplogin.php">
       <input type="hidden" name="custom" value=" <?php echo $_SESSION['id']; ?>">
       <input type="hidden" name="Upgrade to premium" >
    </form>
