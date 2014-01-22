<?php
 /**
 * @package WordPress
 * @subpackage 
 */
    global $theme;
?>

    <div class="header">
<?php if( is_single() || is_page() ): ?>
        <?php if (has_post_thumbnail()): ?>
            <span class="featured-image">
                    <?php the_post_thumbnail('large') ?>
            </span>
        <?php endif; ?>

    <?php if( is_front_page() ): ?>
            <h2><?php the_title();?></h2>
    <?php else: ?>
            <h1><?php the_title();?></h1>
    <?php endif; ?>

<?php endif; ?>


								</div>

								<div class="content">
									<?php has_excerpt() ? the_excerpt(): the_content( '...' );?>
								</div>

<?php if( !is_page() || is_front_page() ): ?>
								<div class="context">
									<p><?php the_tags(); ?></p>
	<?php if( !is_single() && !is_page() ):?>
									<p><a href="<?php the_permalink();?>" class="more"><?php echo __( 'Read more', 'fc' );?></a></p>
	<?php endif;?>
								</div>
<?php endif; ?>