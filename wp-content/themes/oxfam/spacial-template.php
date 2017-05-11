<?php
/*

Template Name: Spacial Layout

*/






get_header();


if(have_posts()):
	while(have_posts()): the_post(); ?>

<article class="post page">
	<h2><?php the_title(); ?></h2>
	
	<div class="info-box">
		<h4>Disclaimer Title</h4>
		<p>
			<i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
			</i>
		</p>
	</div>

	<p><?php the_content(); ?></p>
</article>
<?php

endwhile;
else:
	echo "No content found";
endif;

get_footer();
?>