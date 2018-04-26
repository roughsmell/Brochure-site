<?php get_header(); ?>

<!-- while loop to add the content in page -->
<?php while(have_posts()): the_post();?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>">
	<div class="hero-content">
		<div class="hero-text">
		<!-- to add featured photo -->
<!-- <?php the_post_thumbnail();?>
 -->
		<!-- to add the title of the page -->
<h2><?php the_title(); ?></h2>

		</div>
	</div>
</div>
<div class="main-content container">
	<main class="text-center content-text">
<!-- to add the content page -->
<?php the_content(); ?>
		
	</div>

<?php endwhile; ?>

<?php  get_footer(); ?>	