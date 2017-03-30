<?php get_header(); //include header.php ?>

<main id="content">
	<?php 
	if( have_posts() ){
		?>
		<h1>Products by <?php single_cat_title(); ?></h1>
		<?php
			while( have_posts() ){ 
				the_post();
				?>
				<article class="one-product">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'thumbnail' ); ?>
						
						<div class="caption">
							<h2><?php the_title(); ?></h2>
					<?php the_terms( $post->ID, 'brand', '<h3>', ', ', '</h3>' ); ?>

							
							<?php platty_price(); ?>

							<?php the_excerpt(); ?>
						</div>
					</a>
				</article>
				<!-- end .post -->
				<?php 
		} //end while
		?>
	<!--</div> end of .product-grid -->
	<?php

	platty_pagination();

		comments_template( '/comments.php', true ); //include comments.php or WP default

	}//end if there are posts
	else{
		echo 'Sorry, no posts to show';
	} 
	?>

	
</main>
<!-- end #content -->


<?php get_sidebar('shop'); //include sidebar-shop.php ?>
<?php get_footer(); //include footer.php ?>