<?php
if ( ! is_active_sidebar( 'rad-sidebar' ) ) {
	return;
}
?>

<aside>
	<div>
		<?php dynamic_sidebar( 'rad-sidebar' ); ?>
	</div> <!-- #footer-sidebar -->
</aside> <!-- #supplementary -->