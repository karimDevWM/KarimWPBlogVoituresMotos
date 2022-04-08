<?php 
    /**
     * Template Name: Archive
     */
?>

<?php 
    get_header();
?>

<div class="single-grid">
	<div class="leftSideBarArchives">
		<?php get_template_part('template-parts/leftSideBarArchives'); ?>
	</div>
	<div class="postContent">
		<?php get_template_part('template-parts/archivePosts'); ?>
	</div>
	
</div>
<?php get_footer(); ?>