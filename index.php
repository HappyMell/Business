<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>


		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();
				the_content()
			?>


			<?php endwhile;


		endif; ?>


<?php
get_footer();
