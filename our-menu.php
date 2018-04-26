<?php 

/**
*Template Name: Our Specialties
*/

get_header();

 ?>



<!-- while loop to add the content in page -->
<?php while(have_posts()): the_post();?>

<div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>">
	<div class="hero-content">
		<div class="hero-text">
	
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
<!-- gallery -->
 <div class="our-specialities container">
<h3 class="primary-text">Pizzas </h3>
<div class="container-grid">
	<?php 
	$args= array(
		// para lumabas yung post type sa page
		// nasa function yung specialities
		'post_type' => 'specialties',
		// kung ilang ang pwede ireturn na post
		'post_per_page' => 10,
		'orderby' =>'title',
		'order' => 'ASC',
		// para yung pizza lang lalabas
		'category_name' => 'pizza'
	);
	// creating new object
	// sa pag gamit ng wp_query kailangan to
	$pizzas = new WP_Query ($args);
	while ($pizzas->have_posts() ): $pizzas->the_post(); ?>
		<!-- dalawang column na 4 ang size -->
		<div class="column2-4 specialty-content">
			<!-- para magkaroon ng link -->
			<a href="<?php the_permalink();?>">
	<!-- 		specialties yung size ng thumbnails nasa function then kailangan iregenarate yung thumbnails plugin -->
		<?php the_post_thumbnail('specialties'); ?>
<h4> <?php the_title(); ?> <span><?php the_field('price'); ?></span></h4>
<?php the_content(); ?>
</a>
</div>

	<?php endwhile; wp_reset_postdata();?>
	</div>


<h3 class="primary-text">Others </h3>
<div class="container-grid">
	<?php 
	$args= array(
		// para lumabas yung post type sa page
		// nasa function yung specialities
		'post_type' => 'specialties',
		// kung ilang ang pwede ireturn na post
		'post_per_page' => 10,
		'orderby' =>'title',
		'order' => 'ASC',
		// para yung pizza lang lalabas
		'category_name' => 'others'
	);
	// creating new object
	// sa pag gamit ng wp_query kailangan to
	$other = new WP_Query ($args);
	while ($other->have_posts() ): $other->the_post(); ?>
		<!-- dalawang column na 4 ang size -->
		<div class="column2-4 last specialty-content">
			<!-- para magkaroon ng link yung clinick mapupuna sa isang page. sa single page. single-specialities. specialities name ng post type sa fucntion -->
			<a href="<?php the_permalink();?>">
	<!-- 		specialties yung size ng thumbnails nasa function then kailangan iregenarate yung thumbnails plugin -->
		<?php the_post_thumbnail('specialties'); ?>
<h4> <?php the_title(); ?> <span><?php the_field('price'); ?></span></h4>
<?php the_content(); ?>
</a>
</div>

	<?php endwhile; wp_reset_postdata();?>
	
	</div>

</div>
<?php  get_footer(); ?>	