<?php
get_header();


if(have_posts()):
	while(have_posts()): the_post(); ?>

<article class="post">
	<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>	
	<h5><?php the_content(); ?></h5>
</article>

<?php
endwhile;
else:
	echo "No content found";
endif;

get_footer();
?>