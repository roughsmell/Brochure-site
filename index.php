<?php get_header(); ?>


<?php 
// KUNG ANO ANG IRERETURN NYA
$blog_page = get_option('page_for_posts');
$image = get_post_thumbnail_id($blog_page);
$image = wp_get_attachment_Image_src($image,'full');
?>


<!-- THUMBNAIL PICTURE -->
	<div class="hero" style="background-image:url(<?php echo $image[0]; ?>">
		<div class="hero-content">
			<div class="hero-text">

			<!-- to add the title of the page -->
	<h2><?php echo get_the_title($blog_page); ?></h2>

			</div>
		</div>
	</div>

		<div class="main-content container">
			<div class="container-grid">
					<main class=" content-text column2-3">
							
						<?php while(have_posts()): the_post();?>
						<artcile class="entry">
									<!-- para mapunta sa singe post -->
								<a href="<?php the_permalink();?>">
									<!-- specialties size ng image sa function -->
									<?php the_post_thumbnail('specialties');?>
								</a>

								<header class="entry-header clear ">
									<div class="date">
										<time >
											<?php echo the_time('d');?>
											<span><?php echo the_time('M');?></span>
										</time>
									</div> <!-- .date -->

									<div class="entry-title">
										<h2><?php the_title();?></h2>
										<p class="author">
											<i class="fa fa-user" aria-hidden="true"></i>
												<?php the_author();?>
										</p> <!-- .author -->
								</header>
						
								<div class="entry-content">
									<!-- parang the content pero konting words lang ipapakita nya -->
								<?php the_excerpt(); ?>

								<a  class="btn btn-primary margin" href="<?php the_permalink();?>" role="button">Read More</a>
								</div>

						</artcile>
						<?php endwhile; ?>	
					</main>	
					<?php

					get_sidebar();
					?>
			</div>
		</div>

<div> </div>

<?php  get_footer(); ?>	