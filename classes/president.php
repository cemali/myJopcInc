<?php

/*
 * President Corner - JOPCINC President program
 * Matt Lee 09152012
 */
?>

<?php
/* word press */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php
 require('../blog/wp-blog-header.php');
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

