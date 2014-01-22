<?php
 /**
 * @package WordPress
 * @subpackage 
 */
	get_header();
	get_sidebar( 'menu' );
?>
<?php while( have_posts() ): the_post();?>
					<div class="column large-column">
						<div class="article page-article">
							<?php get_template_part( 'loop', 'page' );?>
						</div>

					</div>
<?php endwhile;?>
<?php get_footer(); ?>