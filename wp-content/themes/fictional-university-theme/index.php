<?php
get_header( );

while(have_posts()){
 the_post(  );
 ?>
 <h2><a href= "<?php echo the_permalink( );?>"><?php echo the_title(); ?></a></h2>
 <p><?php echo the_content() ?></p>
 <hr>
 <?php
}

get_footer( );
?>