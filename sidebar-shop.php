<aside id="sidebar">
	<?php //hide the button if viewing the products archive
	if( ! is_post_type_archive( 'product' ) ){ ?>

	<section class="widget">
		<a href="<?php echo get_post_type_archive_link('product'); ?>">
			&larr; View All Products
		</a>
	</section>

	<?php } //end if not products archive ?>

	<section class="widget">
		<h3 class="widget-title">Brands:</h3>
		<ul>
			<?php wp_list_categories( array(
				'taxonomy' => 'brand',
				'title_li' => '',
			) ); ?>
		</ul>
	</section>
</aside>