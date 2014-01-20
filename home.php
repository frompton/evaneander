<?php
 /**
 * @package WordPress
 * @subpackage 
 */
	get_header();
	get_sidebar( 'menu' );
?>
<?php while( have_posts() ): the_post();?>
					<div class="column medium-column first-column">
						<div class="article page-article">

							<?php get_template_part( 'loop', 'page' );?>

						</div>
					</div>
<?php endwhile;?>
					<div class="aside column medium-column" role="complementary">
                        <?php if (has_post_thumbnail()): ?>
                        <div class="featured-image">
                            <?php the_post_thumbnail('medium') ?>
                        </div>
                        <?php endif; ?>
						<?php get_sidebar( 'page' );?>&nbsp;
					</div>
<?php get_footer(); ?>