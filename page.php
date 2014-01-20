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
							<?php if (has_post_thumbnail()): ?>
								<span class="featured-image">
									<?php the_post_thumbnail('large') ?>
							</span>
							<?php endif; ?>
							<?php get_template_part( 'loop', 'page' );?>
						</div>

					</div>
<?php endwhile;?>
<?php get_footer(); ?>