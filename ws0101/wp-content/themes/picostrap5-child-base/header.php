<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- wp_head -->
	<?php wp_head(); ?>
	<!-- /wp_head -->
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

    <header id="lc-site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    logo
                </div>
                <div class="col-md-6">
                    cta con menu
                </div>
            </div>
        </div>
    </header>

	<main id='theme-main'>
