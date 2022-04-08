<?php 
	get_header();
	get_template_part('template-parts/navigation');
?>
	<h1 class="post-title"><?= the_title(); ?></h1>

<div class="single-grid">
	<div class="leftsidebar">
		<?php get_template_part('template-parts/blog/leftSideBarSingle');?> 
	</div>
	<div class="postContent">
		<?php get_template_part('template-parts/blog/postContent');?>
	</div>
</div>
<?php 
	get_footer();
?>