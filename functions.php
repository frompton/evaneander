<?php
	if( !isset( $theme ) ){
		require( STYLESHEETPATH . '/module/KN.class.php' );
		$theme = new KN();
	}