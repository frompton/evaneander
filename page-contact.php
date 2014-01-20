<?php
 /**
 * @package WordPress
 * @subpackage
 * Template name: Kontakt
 */
	get_header();
	get_sidebar( 'menu' );
?>
<?php while( have_posts() ): the_post();?>
					<div class="column small-column first-column">
						<div class="article page-article">
							<?php get_template_part( 'loop', 'page' );?>
						</div>
					</div>
<?php endwhile;?>
					<div class="aside column large-column" role="complementary">

						<?php if (has_post_thumbnail()): ?>
              <span class="featured-image">
									<?php the_post_thumbnail('large') ?>
							</span>
						<?php endif; ?>
						<?php get_sidebar( 'page' );?>&nbsp;
					</div>
<?php get_footer(); ?>