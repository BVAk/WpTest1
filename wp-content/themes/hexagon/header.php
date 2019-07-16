<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage hexagon
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'hexagon' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','hexagon'); ?></a></div>

<div class="header-box">
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
				        <?php if( has_custom_logo() ){ hexagon_the_custom_logo();
				           }else{ ?>
				          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				          <?php $description = get_bloginfo( 'description', 'display' );
				          if ( $description || is_customize_preview() ) : ?> 
				            <p class="site-description"><?php echo esc_html($description); ?></p>
				        <?php endif; }?>
				    </div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div id="header" class="menu-section">
						<nav class="nav">
							<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>