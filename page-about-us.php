<?php get_header(); ?>



<!-- while loop to add the content in page -->
<?php while(have_posts()): the_post();?>
<!-- para makuha yung feature photo -->
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
		</main>
	</div>

<?php endwhile; ?>
<div class="box-information container clear">
	<div class="single-box">
		<?php 
 		// to custom size the image and  to get the url of the image and you must instal regenerate thumbnail
		$id_image = get_field('image1');
		$image = wp_get_attachment_image_src($id_image,'boxes');
		
		?>
 		<!-- to print image -->
		<img src="<?php echo $image[0]; ?>" class="box-image">
		<!-- to add the field in custmized field -->
		<!-- <img src="<?php the_field('image1'); ?>"> -->
		<div class="content-box">
			<!-- to add the field in custmized field -->
			<?php the_field('decription_1');?>	

		</div>
	</div>

		<div class="single-box">
		
		
		<div class="content-box">
			<!-- to add the field in custmized field -->
			<?php the_field('decription_2');?>	

		</div>
		<?php 
 		// to custom size the image and  to get the url of the image and you must instal regenerate thumbnail
		$id_image = get_field('image_2');
		$image = wp_get_attachment_image_src($id_image,'boxes');
		
		?>
 		<!-- to print image -->
		<img src="<?php echo $image[0]; ?>" class="box-image">
	</div>

		<div class="single-box">
		<?php 
 		// to custom size the image and  to get the url of the image and you must instal regenerate thumbnail
		$id_image = get_field('image_3');
		$image = wp_get_attachment_image_src($id_image,'boxes');
		
		?>
 		<!-- to print image -->
		<img src="<?php echo $image[0]; ?>" class="box-image">
		
		<div class="content-box">
			<!-- to add the field in custmized field -->
			<?php the_field('decription_3');?>	

		</div>
	</div>
</div>
<?php  get_footer(); ?>	