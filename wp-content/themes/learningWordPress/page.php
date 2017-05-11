<?php
get_header();


if(have_posts()):
	while(have_posts()): the_post(); ?>

<article class="post">
	<?php 
	
	$args = array(
		'child_of' => $post->ID,
		'title_li' => ''
		); ?>

	<?php wp_list_pages();	?>
	<h2><?php the_title(); ?></h2>	
	<h5><?php the_content(); ?></h5>
</article>

<?php
endwhile;
else:
	echo "No content found";
endif;
?>
<strong>
	<u>This is beacuse of page.php.</u>
</strong>

<?php get_footer(); ?>