<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage hexagon
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('hexagon_footer_copy',__('Hexagon WordPress Theme By','hexagon'))); ?> <?php hexagon_credit(); ?></p>
</div>