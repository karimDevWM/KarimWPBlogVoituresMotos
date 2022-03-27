<?php 
/*
Template Name: Archives
*/
    get_header();
    get_footer();
?>

<div class="single-grid">
	<div class="leftsidebar mt-5">
		<?php get_template_part('template-parts/leftSideBarArchives'); ?>	
	</div>
	<div class="postContent">
		<?php

		$args = array(
			'numberposts' => 10,
			'exclude' => get_the_ID()
		);

		$presentation_posts = get_posts($args);

		if(!empty($presentation_posts))
		{
			foreach($presentation_posts as $pst)
			{
		?>
			<div class="card mt-5">
				<div><?php echo get_the_post_thumbnail($pst); ?></div>
				<div class="card-body">
					<h5 class="card-title"><?= get_the_title($pst); ?></h5>
					<p class="card-text"><?= get_the_excerpt($pst); ?></p>
					<p class="card-text">Catégorie : <?= the_category($pst); ?></p>
					<p class="card-text">Auteur : <?= get_the_author($pst); ?></p>
					<p class="card-text">Date de création : <?= get_the_date('',$pst); ?></p>
					<a href="<?= the_permalink($pst); ?>" class="btn btn-primary">Lire l'article</a>
				</div>
			</div>
		<hr>
		<?php
			}
		}
		?>
	</div>
</div>