<?php 
/*
Template Name: Automatic Sitemap
*/

get_header(); ?>

<main id="content">
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			?>

			<h1 class="page-title">
				<?php the_title(); ?>
			</h1>
			<div class="entry-content">
				<?php the_content(); ?>

				<div class="one-third">
					<h2>Pages:</h2>
					<ul>
						<?php wp_list_pages( array(
							'title_li' => '',
						) ); ?>
					</ul>
				</div>
				<div class="one-third">
					<h2>Feeds:</h2>
					<ul>
						<li><a href="<?php bloginfo('rss2_url'); ?>">
						All Posts RSS
						</a></li>
						<li><a href="<?php bloginfo('comments_rss2_url'); ?>">
						All Comments RSS
						</a></li>
					</ul>

					<h2>Posts:</h2>
					<ul>
						<?php wp_get_archives( array(
							'type' => 'alpha', //or 'postbypost'
						) ); ?>
					</ul>
				</div>
				<div class="one-third">
					<h2>Categories:</h2>
					<ul>
						<?php wp_list_categories( array(
							'title_li' => '',
							'feed' 		=> 'feed',
						) ); ?>
					</ul>
				</div>
			</div>

			<?php
		} // end while
	} // end if
	?>

</main>

<?php get_footer(); ?>