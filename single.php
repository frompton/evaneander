<?php
 /**
 * @package WordPress
 * @subpackage
 */
	get_header();
?>
					<div class="aside column small-column first-column">
						&nbsp;
					</div>
<?php while( have_posts() ): the_post();?>
					<div class="column medium-column">
						<div class="article post-article">
							<?php get_template_part( 'loop', 'single' );?>
						</div>
					</div>
<?php endwhile;?>
					<div class="aside column small-column" role="complementary">
						<?php dynamic_sidebar( 'post' );?>&nbsp;
					</div>
<?php get_footer(); ?>