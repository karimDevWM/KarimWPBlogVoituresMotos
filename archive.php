<?php 
    /**
     * Template Name: Archive
     */
?>

<?php 
    get_header();
    get_template_part('template-parts/navigation');
?>

<div class="single-grid">
	<div class="leftSideBarArchives">
		<?php get_template_part('template-parts/blog/leftSideBarArchives'); ?>
	</div>
	<div class="postContent">
		<?php get_template_part('template-parts/blog/archivePosts'); ?>
	</div>
	
</div>
<?php get_footer(); ?>