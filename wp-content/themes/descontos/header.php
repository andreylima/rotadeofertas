<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title(' ',true); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	wp_head();
	
?>
</head>
<body <?php body_class(); ?>>
	
	<header>
		<?php
		$logo = esc_url( get_stylesheet_directory_uri() . '/assets/img/logo-small.png' );
		?>
		<img class ="logo-header" src="<?php echo $logo; ?>">
		<div class="slogan">
		Aceita um desconto?	
		</div>
		<div class="email-field">
		<div class="label-email">Receba e-mails do RotadeOfertas.com!</div>
		<input type="text" class="email" placeholder="Seu endereço de e-mail">
		</div>
		<input type="submit" value="Go"  class="subscribe-button">
	</header>