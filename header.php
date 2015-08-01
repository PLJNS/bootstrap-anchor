<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>

		<meta name="viewport" content="width=device-width">
		<meta name="generator" content="Anchor CMS">

		<meta property="og:title" content="<?php echo site_name(); ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo e(current_url()); ?>">
		<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
		<meta property="og:site_name" content="<?php echo site_name(); ?>">
		<meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
			<!-- Custom CSS -->
			<style><?php echo article_css(); ?></style>

			<!--  Custom Javascript -->
			<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">		
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<?php if(has_menu_items()): ?>
						<ul class="nav navbar-nav">
							<?php while(menu_items()): ?>
								<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
									<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
										<?php echo menu_name(); ?>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<form id="search" action="<?php echo search_url(); ?>" method="post" class="navbar-form navbar-left">
							<div class="form-group">
								<input id="term" name="term" class="form-control" placeholder="Search" value="<?php echo search_term(); ?>">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					<?php endif; ?>
				</div>
			</div>
		</nav>
	