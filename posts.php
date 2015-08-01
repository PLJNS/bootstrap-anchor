<?php theme_include('header'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?php if(has_posts()): ?>
				<?php while(posts()): ?>
					<h1 class="no-margin-top">
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h1>
					<p><span class="glyphicon glyphicon-time"></span> Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.</p>
					<?php echo article_description(); ?>
					<hr>
				<?php endwhile ?>
			<?php endif; ?>
			<?php if(has_pagination()): ?>
				<ul class="pager">
					<li class="previous">
						<?php echo posts_prev(); ?>
					</li>
					<li class="next">
						<?php echo posts_next(); ?>
					</li>
				</ul>
			<?php endif; ?>
		</div>
	</div> 
</div>
<?php theme_include('footer'); ?>