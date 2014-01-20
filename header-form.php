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
		<title><?php wp_title( '--', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
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
			<!-- wp_head -->
			<?php wp_head();?>
			<!-- /wp_head -->
	</head>
	<body <?php body_class();?>>
			<div id="page-content" class="clear-children">
