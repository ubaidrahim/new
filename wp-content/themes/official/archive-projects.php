<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>
	<main id="primary" class="site-main">
		
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		<div class="page-content">
		<div class="projects-display">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content-projects', 'none' );

			endif;
			?>
		</div>
		
		<?php
		
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => 'Previous',
            'next_text' => 'Next',
        ) );

    ?>
	</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
