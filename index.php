<?php
while(have_posts()){
    the_post(); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
    <?php the_date(); the_time(); ?></h1>
<?php the_content(); ?>
<hr>
<?php 
}

?>