<?php

/*
 * photoblog - JOPCINC photoblog program
 * Matt Lee 09152012
 */
?>





<?php
  include "../includes/header.html"
?>

<div class="page content">
        <div id="columnl"> 
              <h1>Joint Olive Prayer Connection Inc (JOPC)</h1>
                 <h1>Directors</h1>




<?php
/* word press */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php
 require('../photoblog/wp-blog-header.php');
?>




<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : start_wp(); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_excerpt(); ?> 
<?php
endforeach;
?>

<?php
  include "../includes/footer.html"
?>