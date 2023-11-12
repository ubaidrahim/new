<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package official
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'official' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'official' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'official' ), 'official', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script>
	adminurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	//jQuery(document).ready(function($) {
    $.ajax({
        url: adminurl, // WordPress AJAX URL
        type: 'POST',
        data: {
            action: 'get_projects',
        },
        success: function(response) {
            // Handle the response data (array of projects)
            console.log(response);
        },
        error: function(error) {
            console.error('AJAX error:', error);
        },
    });
//});
</script>
</body>
</html>
