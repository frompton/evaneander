<?php
/**
 * @package WordPress
 * @subpackage 
 */
	global $theme;
?><!DOCTYPE html>
<html <?php language_attributes();?> class="js-disabled">
	<head>
		<meta charset="<?php bloginfo( 'charset' );?>">
		<title>
            <?php if (is_front_page()): ?>
                <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>
            <?php else: ?>
                <?php wp_title( '--', true, 'right' ); ?> <?php bloginfo( 'name' ); ?>
            <?php endif; ?>
        </title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">
<?php if ( is_home() || is_front_page() ):?>
		<meta name="description" content="<?php bloginfo( 'description' );?>">
<?php endif;?>
<!-- wp_head -->
<?php wp_head();?>
<!-- /wp_head -->
        <?php if ($theme->analytics_id && $theme->analytics_id != ''): ?>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', '<?php echo $theme->analytics_id ?>']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
        <?php endif; ?>
	</head>
	<body <?php body_class();?>>
		<div id="page-container">
			<div id="page-header" class="header">
				<div class="inner">
					<div id="logo">
						<a href="<?php echo home_url( '/' );?>">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/image/logo.gif" alt="Logo Evaneander.se">
						</a>
                        <?php if (is_front_page()): ?>
                            <h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) );?></h1>
                            <h2 class="tagline"><?php bloginfo( 'description' ); ?></h2>
                        <?php else: ?>
                            <p><?php echo esc_attr( get_bloginfo( 'name', 'display' ) );?></p>
                            <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                        <?php endif; ?>
					</div>
				</div>
			</div><!-- #page-header -->
			<div id="page-content" class="clear-children">
				<div class="column small-column first-column">
					<?php wp_nav_menu( array(
						'theme_location' => 'top-navigation',
						'menu_class' => 'nav clear-children',
						'container' => 'div',
						'container_id' => 'left-nav',
						'container_class' => 'nav',
						'depth'=> '1'
					) ); ?>
				</div>
