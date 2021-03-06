<?php get_template_part('templates/head'); ?>
<body  data-spy="scroll" data-target="affix-nav" <?php body_class(); ?>>

<!--[if lt IE 8]>
	<div class="alert alert-warning">
		<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.', 'roots'); ?>
	</div>
	<![endif]-->

	<?php
	do_action('get_header');
	 // Use Bootstrap's navbar if enabled in config.php
	if (current_theme_supports('bootstrap-top-navbar')) {
		get_template_part('templates/header-top-navbar-rwd');
	} else {
		get_template_part('templates/header');
	}
	?>
	
	<!-- Base Home -->
	<div id="page" class="wrap" role="document">
		<div class="content">
			<main id="main" class="main <?php echo roots_main_class(); ?>" role="main">
				<?php include roots_template_path(); ?>
			</main><!-- /.main -->
			<?php if (roots_display_sidebar()) : ?>
				<aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
					<?php include roots_sidebar_path(); ?>
				</aside><!-- /.sidebar -->
			<?php endif; ?>
		</div><!-- /.content -->
	</div><!-- /.wrap -->

	<?php get_template_part('templates/footer-home'); ?>

</body>
</html>
