<?php
get_header();
while(have_posts()){
    the_post(); ?>
<h1><?php the_title(); ?></h1>
<h2 class="datetime"><?php the_date(); the_time(); ?></h2>
<?php the_content(); ?>
<?php 
}
get_footer();
?>